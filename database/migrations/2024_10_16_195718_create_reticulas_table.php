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
        Schema::create('reticulas', function (Blueprint $table) {
            $table->id();
            $table->char('idReticula',length:15)->unique();
            $table->char('descripcion',length:200);
            $table->date('fechaEnVigor');
            $table->unsignedBigInteger('idCarrera');
            $table->foreign('idCarrera')->references('id')->on('carreras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reticulas');
    }
};
