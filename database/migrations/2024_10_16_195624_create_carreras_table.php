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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->char('idCarrera',length:15)->unique();
            $table->char('nombreCarrera',length:200);
            $table->char('nombreCorto',length:5);
            $table->unsignedBigInteger('idDepto');
            $table->foreign('idDepto')->references('id')->on('deptos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
