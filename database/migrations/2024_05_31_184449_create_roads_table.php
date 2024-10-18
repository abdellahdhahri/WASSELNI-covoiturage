<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trajetId');
            $table->foreign('trajetId')
            ->references('id')
            ->on('trajets')
            ->onDelete('restrict')
            ->onUpdate('restrict'); 
           /* $table->unsignedBigInteger('iduser');
            $table->foreign('userId')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');  */    
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roads');
    }
};
