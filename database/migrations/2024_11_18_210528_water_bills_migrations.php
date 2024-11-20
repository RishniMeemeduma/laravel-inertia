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
        Schema::create('water_bills', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->unsignedInteger('waterbillable_id');
            $table->unsignedTinyInteger('attempts');
            $table->text('waterbillable_type', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
