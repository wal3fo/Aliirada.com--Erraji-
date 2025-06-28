<?php

namespace App\Mail;

use Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectText;
    public $checkoutName;
    public $checkoutEmail;
    public $checkoutPhone;
    public $checkoutCountry;
    public $checkoutCity;
    public $checkoutAddress;
    public $checkoutPaymentMethod;
    public $CartItems;
    public $SubTotal;
    public $ShippingCost;
    public $Total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subjectText, $data)
    {
        $this->subjectText = $subjectText;
        $this->checkoutName = $data['checkoutName'] ?? '';
        $this->checkoutEmail = $data['checkoutEmail'] ?? '';
        $this->checkoutPhone = $data['checkoutPhone'] ?? '';
        $this->checkoutCountry = $data['checkoutCountry'] ?? '';
        $this->checkoutCity = $data['checkoutCity'] ?? '';
        $this->checkoutAddress = $data['checkoutAddress'] ?? '';
        $this->checkoutPaymentMethod = $data['checkoutPaymentMethod'] ?? '';
        $this->CartItems = $data['CartItems'] ?? [];
        $this->SubTotal = $data['SubTotal'] ?? 0;
        $this->ShippingCost = $data['ShippingCost'] ?? 0;
        $this->Total = $data['Total'] ?? 0;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subjectText)
            ->view('emails.orderConfirmation')
            ->with([
                'checkoutName' => $this->checkoutName,
                'checkoutEmail' => $this->checkoutEmail,
                'checkoutPhone' => $this->checkoutPhone,
                'checkoutCountry' => $this->checkoutCountry,
                'checkoutCity' => $this->checkoutCity,
                'checkoutAddress' => $this->checkoutAddress,
                'checkoutPaymentMethod' => $this->checkoutPaymentMethod,
                'orderReference' => Str::upper(Str::random(3)) . time(),
                'CartItems' => $this->CartItems,
                'SubTotal' => $this->SubTotal,
                'ShippingCost' => $this->ShippingCost,
                'Total' => $this->Total,
            ]);
    }
}
