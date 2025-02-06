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
        Schema::create('mst_supplier_driver_cum_owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')->references('id')->on('mst_suppliers')->onDelete('cascade');
            $table->string('driver_image')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('vehicle_fuel_type')->nullable();
            $table->string('vehicle_image')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_phone_no')->nullable();
            $table->string('regis_owner_name')->nullable();
            $table->date('regis_date')->nullable();
            $table->string('parts_chasis_no')->nullable();
            $table->string('parts_engine_no')->nullable();
            $table->string('insaurance_company_name')->nullable();
            $table->string('insurance_policy_no')->nullable();
            $table->date('insurance_issue_date')->nullable();
            $table->date('insurance_due_date')->nullable();
            $table->string('insurance_premium_account')->nullable();
            $table->string('insurance_cover_account')->nullable();
            $table->string('rto_address')->nullable();
            $table->string('rto_tax_efficiency')->nullable();
            $table->date('rto_expiry_date')->nullable();
            $table->string('fitness_no')->nullable();
            $table->date('fitness_expiry_date')->nullable();
            $table->string('auth_number')->nullable();
            $table->date('auth_expiry_date')->nullable();
            $table->string('speed_details')->nullable();
            $table->date('speed_expiry_date')->nullable();
            $table->string('puc_number')->nullable();
            $table->date('puc_expiry_date')->nullable();
            $table->string('license_no')->nullable();
            $table->date('license_expiry_date')->nullable();
            $table->string('police_card_no')->nullable();
            $table->date('police_expiry_date')->nullable();
            $table->string('police_veri_number')->nullable();
            $table->date('police_veri_expiry_date')->nullable();
            $table->boolean('is_covid_vaccinated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_supplier_driver_cum_owners');
    }
};
