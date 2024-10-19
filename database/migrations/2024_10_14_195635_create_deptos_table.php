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
        Schema::create('deptos', function (Blueprint $table) {
            $table->id();
            $table->char('idDepto',length:2)->unique();
            $table->char('nombreDepto',length:100);
            $table->char('nombreMediano',length:15);
            $table->char('nombreCorto',length:5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};
