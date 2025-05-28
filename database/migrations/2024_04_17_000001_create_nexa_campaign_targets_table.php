<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nexa_campaign_targets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('CampaignId');
            $table->enum('TargetType', ['contacts', 'companies']);
            $table->unsignedBigInteger('TargetId');
            $table->boolean('Deleted')->default(false);
            $table->dateTime('TimeOf')->nullable();
            
            $table->foreign('CampaignId')->references('Id')->on('nexa_campaigns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nexa_campaign_targets');
    }
}; 