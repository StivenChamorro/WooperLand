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
        //tabla de logros
        Schema::create('achiviements', function (Blueprint $table) {
            $table->id();
            $table->string('name');//nombre
            $table->string('description');// descripcion
            $table->string('prize');// premio
        
            $table->unsignedBigInteger('topic_id')->nullable();// tema

            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achiviements');
    }
};
