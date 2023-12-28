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
        Schema::create('sobres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('missao');
            $table->text('valores');
            $table->text('vissao');
            $table->text('titulo');
            $table->text('subtitulo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobres');
    }
};
