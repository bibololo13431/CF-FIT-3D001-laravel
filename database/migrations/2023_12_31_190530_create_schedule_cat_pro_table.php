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
        Schema::create('schedule_cat_pro', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('schedule', 255)->nullable();

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_cat_pro');
    }
};
