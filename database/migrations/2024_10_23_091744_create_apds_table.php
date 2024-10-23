<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('apds', function (Blueprint $table) {
        $table->id();
        $table->text('image');
        $table->string('name');
        $table->string('size');
        $table->integer('stock');
        $table->date('valid_until'); // Masa Berlaku
        $table->timestamps();
        $table->softDeletes();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apds');
    }
};
