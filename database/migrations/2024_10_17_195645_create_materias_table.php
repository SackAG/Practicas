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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->char('idMateria',length:10)->unique();
            $table->char('nombreMateria',length:200);
            $table->char('nivel',length:1);
            $table->char('nombreMediano',length:25);
            $table->char('nombreCorto',length:10);
            $table->char('modalidad',length:1);
            $table->unsignedBigInteger('idReticula');
            $table->foreign('idReticula')->references('id')->on('reticulas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
