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
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->string('title', 99)->nullable();
            $table->string('external_link', 255)->nullable();
            $table->string('brief', 255)->nullable();
            $table->string('img_path')->nullable();
            $table->boolean('publish')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('gallery_categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
