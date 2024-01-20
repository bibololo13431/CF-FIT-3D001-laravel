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
        Schema::create('seat_detail', function (Blueprint $table) {
            $table->id();
            $table->string('seat_number');
            $table->string('status')->default('available');
            // $table->softDeletes();

            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tour')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_detail');
    }
};
