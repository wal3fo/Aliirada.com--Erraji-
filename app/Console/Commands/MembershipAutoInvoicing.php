<?php

namespace App\Console\Commands;

use App\Models\Functions;
use App\Models\NexaInvoices;
use App\Models\NexaMemberships;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MembershipAutoInvoicing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:membership-auto-invoicing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Memberships Invoices Generator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Log::info('Test Invoice Command ');

            $Prerange = 3;
            $currentTime = Carbon::now()->addDays($Prerange);

            $generatedInvoices = 0;

            Log::info('Start of the loop : ' . $currentTime->timestamp);

            NexaMemberships::with(['contact', 'subscription'])
                ->where('Expiration', '<=', $currentTime->timestamp)
                ->where('Status', 'Active')
                ->chunk(50, function ($subscriptions) use ($generatedInvoices) {
                    foreach ($subscriptions as $item) {
                        Log::info('We need to generate invoice here');

                        $invoiceReference = Functions::generateRefInvoice();

                        $newInvoice = new NexaInvoices();

                        $newInvoice->Dashboard = $item->Dashboard;
                        $newInvoice->Reference = $invoiceReference;
                        $newInvoice->ContactId = $item->ContactId;
                        $newInvoice->SubscriptionId = $item->SubscriptionId;
                        $newInvoice->Amount = $item->subscription->Price;
                        $newInvoice->Status = 'Unpaid';
                        $newInvoice->TimeOf = Carbon::now()->toDateTimeString();
                        
                        $queryInsert = $newInvoice->save();

                        if ($queryInsert) {
                            $item->update(['Status' => 'WaitingPayment']);
                            $generatedInvoices++;
                        }
                    }
                });

            Log::info("$generatedInvoices invoice(s) generated successfully.");
        } catch (\Exception $e) {
            Log::error("Error generating invoices: {$e->getMessage()}");
        }
    }
}
