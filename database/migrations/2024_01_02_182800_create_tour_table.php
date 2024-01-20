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
        Schema::create('tour', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();            
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('seatqty')->nullable();
            $table->integer('actualseat')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->float('price', 255)->nullable();
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('schedule_cat_pro_id');
            $table->foreign('schedule_cat_pro_id')->references('id')->on('schedule_cat_pro')->onDelete('cascade');;

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour');
    }
};
