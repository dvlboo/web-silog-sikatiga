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
        Schema::create('risk_registers', function (Blueprint $table) {
            $table->id();
            $table->string('name_reporter');
            $table->string('name_finding');
            $table->string('description');
            $table->date('date');
            $table->text('photo');
            $table->string('control');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risk-registers');
    }
};
