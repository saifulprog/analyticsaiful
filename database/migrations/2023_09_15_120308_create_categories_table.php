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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->tinyInteger('cat_serial')->nullable();
            $table->string('cat_name', 99);
            $table->string('cat_slug', 255)->unique();
            $table->string('cat_meta_title',60)->nullable();
            $table->string('cat_meta_keyword',255)->nullable();
            $table->string('cat_meta_description',160)->nullable();
            $table->integer('big_img_width')->nullable();
            $table->integer('big_img_height')->nullable();
            $table->integer('small_img_width')->nullable();
            $table->integer('small_img_height')->nullable();
            $table->boolean('is_parent')->default(0);
            $table->boolean('multiple_items')->default(0);
            $table->boolean('publish')->default(1);
            $table->tinyInteger('content_type')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
