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
        Schema::create('kids', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('nickname');
            $table->string('avatar');

            $table->unsignedBigInteger('father_id')->unique();
            $table->foreign('father_id')
            ->references('id')
            ->on('fathers')
            ->onDelete('cascade')//el otro estado es SET_NULL
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kids');
    }
};
