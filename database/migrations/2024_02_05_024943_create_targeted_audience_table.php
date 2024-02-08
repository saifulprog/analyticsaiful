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
        Schema::create('targeted_audience', function (Blueprint $table) {
            $table->id();
            $table->integer('business_type_id');
            $table->integer('country_id');
            $table->integer('provinces_id')->nullable();
            $table->string('organization', 255)->unique()->nullable();
            $table->string('concern_person', 99)->nullable();
            $table->string('website', 255)->unique()->nullable();
            $table->string('email', 99)->unique()->nullable();
            $table->string('linkedin', 255)->unique()->nullable();
            $table->string('whats_app', 19)->unique()->nullable();
            $table->string('facebook', 255)->unique()->nullable();
            $table->string('instagram', 255)->unique()->nullable();
            $table->string('twiter', 255)->unique()->nullable();
            $table->string('youtube', 255)->unique()->nullable();
            $table->string('tiktok', 255)->unique()->nullable();
            $table->string('other_social_media', 255)->nullable();
            $table->tinyInteger('email_send')->default(0)->nullable();
            $table->tinyInteger('whats_app_send')->default(0)->nullable();
            $table->boolean('linkedin_connect')->default(0)->nullable();
            $table->boolean('facebook_connect')->default(0)->nullable();
            $table->boolean('instagram_connect')->default(0)->nullable();
            $table->boolean('web_development')->default(0)->nullable();
            $table->boolean('email_marketing')->default(0)->nullable();
            $table->boolean('google_ads')->default(0)->nullable();
            $table->boolean('web_analytic')->default(0)->nullable();
            $table->boolean('social_media')->default(0)->nullable();
            $table->boolean('seo')->default(0)->nullable();
            $table->tinyInteger('status')->default(0)->nullable();
            $table->string('note',500)->nullable()->nullable();
            $table->boolean('active')->default(1)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targeted_audience');
    }
};
