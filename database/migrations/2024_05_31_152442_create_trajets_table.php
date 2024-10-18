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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->string('lieu_depart');
            $table->unsignedBigInteger('userId');
            $table->string('lieu_arrive');
            $table->date('temps_depart');
            $table->date('temps_arrive');
            $table->integer('nbplace');
            $table->integer('prix');
            $table->string('vehicule');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
