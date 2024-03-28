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
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendorsbusinessdetail_id');
            $table->foreign('vendorsbusinessdetail_id')->references('id')->on('vendors_business_details');
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('speciality');
            $table->tinyInteger('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanics');
    }
};
