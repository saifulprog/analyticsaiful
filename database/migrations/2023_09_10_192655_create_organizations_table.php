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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('org_name', 255);
            $table->string('org_short_name', 99)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('state',69)->nullable();
            $table->string('contact_person',99)->nullable();
            $table->string('mobile',13)->nullable();
            $table->string('email',99)->nullable();
            $table->string('org_type',69)->nullable();
            $table->string('logo',255)->nullable();
            $table->string('google_map',255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
