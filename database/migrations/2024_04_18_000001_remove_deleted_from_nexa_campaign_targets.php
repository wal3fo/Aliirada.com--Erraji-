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
        Schema::table('nexa_campaign_targets', function (Blueprint $table) {
            $table->dropColumn('Deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nexa_campaign_targets', function (Blueprint $table) {
            $table->boolean('Deleted')->default(false);
        });
    }
}; 