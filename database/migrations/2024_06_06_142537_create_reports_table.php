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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->string('graphic');// grafico
            // $table->integer('qualification');// calificacion
            // $table->string('detaillevelmostplayed');// detalle nivel mas jugado
            // $table->string('mostplayedlevellist');// lista nivel mas jugado

            // $table->unsignedBigInteger('father_id')->nullable();
            // $table->unsignedBigInteger('level_id')->nullable();
            // $table->unsignedBigInteger('kid_topic_id')->nullable();

            // $table->foreign('father_id')->references('id')->on('fathers')->onDelete('cascade');
            // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            // $table->foreign('kid_topic_id')->references('id')->on('kid_topics')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
