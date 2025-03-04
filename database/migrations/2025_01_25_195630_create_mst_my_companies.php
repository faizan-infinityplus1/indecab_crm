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
        Schema::create('mst_my_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('company_profile_id')->nullable();
            $table->foreign('company_profile_id')->references('id')->on('mst_my_company_profiles')->onDelete('cascade');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('digital_sign')->nullable();
            $table->string('code');
            $table->string('business_type')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address')->nullable();
            $table->string('alternate_phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('vat')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('service_tax_no')->nullable();
            $table->string('cst_tin_no')->nullable();
            $table->string('cin_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('sac_hsn_code')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('term_condition')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_inv_company')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_my_companies');
    }
};
