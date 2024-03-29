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
        Schema::create('vendors_business_details', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->string('service');
            $table->string('garage_name');
            $table->string('garage_address');
            $table->string('garage_county');
            $table->string('garage_mobile');
            $table->string('garage_email');
            $table->string('address_proof');
            $table->string('address_proof_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors_business_details');
    }
};
