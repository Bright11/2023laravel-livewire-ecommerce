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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('price');
            $table->integer('views')->default(0);
            $table->integer('qty')->default(1);
            $table->longText('description')->nullable();
            $table->string('discount')->default(0);
            $table->string('image');
            $table->foreign('cat_id')->references('id')
            ->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
