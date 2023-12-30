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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->string('eng_title', 120);
            $table->string('bng_title', 120)->nullable();
            $table->string('eng_brief', 255)->nullable();
            $table->string('bng_brief', 255)->nullable();
            $table->text('eng_details')->nullable();
            $table->text('bng_details')->nullable();
            $table->string('big_img_path', 255)->nullable();
            $table->string('small_img_path', 255)->nullable();
            $table->string('video_id', 69)->nullable();
            $table->string('file_path', 255)->nullable();
            $table->integer('total_hits')->default(1);
            $table->string('cat_url',69)->nullable();
            $table->string('en_slug',255)->nullable()->unique();
            $table->string('bn_slug',255)->nullable()->unique();
            $table->string('meta_eng_title', 99)->nullable();
            $table->string('meta_bng_title', 99)->nullable();
            $table->string('meta_eng_keyword', 255)->nullable();
            $table->string('meta_bng_keyword', 255)->nullable();
            $table->string('meta_eng_desc',199)->nullable();
            $table->string('meta_bng_desc',199)->nullable();
            $table->boolean('publish')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
