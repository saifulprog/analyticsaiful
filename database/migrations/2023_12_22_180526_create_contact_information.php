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
        Schema::create('contact_information', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name',99);
            $table->string('contact_email', 99);
            $table->string('contact_subject', 255);
            $table->string('contact_message',255);
            $table->string('service_type',33)->nullable();
            $table->string('country_name',33)->nullable();
            $table->boolean('view')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};
