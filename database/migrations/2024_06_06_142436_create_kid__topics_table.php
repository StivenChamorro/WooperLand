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
        Schema::create('kid__topics', function (Blueprint $table) {
            $table->id();

            $table->integer('descripcion');
            
            $table->unsignedBigInteger('kid_id')->nullable();
            $table->unsignedBigInteger('topic_id')->nullable();

            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kid__topics');
    }
};
