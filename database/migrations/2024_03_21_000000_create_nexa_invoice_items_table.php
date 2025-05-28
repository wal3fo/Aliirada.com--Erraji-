<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('nexa_invoice_items', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('InvoiceId');
            $table->string('Description');
            $table->decimal('Quantity', 10, 2);
            $table->decimal('UnitPrice', 10, 2);
            $table->timestamps();

            $table->foreign('InvoiceId')->references('Id')->on('nexa_invoices')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nexa_invoice_items');
    }
}; 