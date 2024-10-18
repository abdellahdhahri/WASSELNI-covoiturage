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
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nom');
            $table->String('prenom');
            $table->integer('age');
            $table->String('profession');
            $table->bigInteger('telephone');
            $table->string('vehicule');
            $table->string('matricule');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conducteurs');
    }
};
