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
        Schema::table('nexa_campaigns', function (Blueprint $table) {
            // Drop existing columns
            $table->dropColumn(['description', 'created_by']);
            
            // Rename columns
            $table->renameColumn('message', 'Content');
            $table->renameColumn('operator', 'OperatorId');
            $table->renameColumn('timeof', 'TimeOF');
            
            // Modify columns
            $table->string('Name')->change();
            $table->string('Provider')->change();
            $table->string('Status')->change();
            $table->integer('OperatorId')->nullable()->change();
            $table->dateTime('TimeOF')->nullable()->change();
            
            // Drop timestamps
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nexa_campaigns', function (Blueprint $table) {
            // Add back timestamps
            $table->timestamps();
            
            // Rename columns back
            $table->renameColumn('Content', 'message');
            $table->renameColumn('OperatorId', 'operator');
            $table->renameColumn('TimeOF', 'timeof');
            
            // Add back dropped columns
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by');
            
            // Modify columns back
            $table->string('name')->change();
            $table->string('provider')->change();
            $table->string('status')->change();
            $table->integer('operator')->nullable()->change();
            $table->dateTime('timeof')->nullable()->change();
        });
    }
}; 