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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->required();
            $table->unsignedBigInteger('soluation_id')->required();


            $table->integer('rate')->required();

            $table->longText('notes')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('soluation_id')
                ->references('id')
                ->on('soluations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
