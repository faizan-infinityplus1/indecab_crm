<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mst_vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('vehicle_group_id')->nullable();
            $table->string('model_name');
            $table->string('vehicle_no')->nullable();
            $table->string('image')->nullable();
            $table->integer('seat_capacity');
            $table->string('color');
            $table->string('fuel_type');
            $table->string('vehicle_code')->nullable();
            $table->string('branches')->nullable();
            $table->string('loan_emi_amt')->nullable();
            $table->date('loan_srt_date')->nullable();
            $table->date('loan_end_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->integer('emi_day')->nullable();
            $table->string('reg_owner_name')->nullable();
            $table->date('reg_data')->nullable();
            $table->string('parts_chasis_no')->nullable();
            $table->string('parts_engine_no')->nullable();
            $table->string('insaurance_company_name')->nullable();
            $table->string('insaurance_policy_no')->nullable();
            $table->string('insaurance_issue_date')->nullable();
            $table->string('insaurance_due_date')->nullable();
            $table->string('insaurance_prem_amt')->nullable();
            $table->string('insaurance_cover_amt')->nullable();
            $table->string('rto_address')->nullable();
            $table->string('rto_tax_efficiency')->nullable();
            $table->date('rto_exp_date')->nullable();
            $table->string('fitness_no')->nullable();
            $table->date('fitness_expiry_date')->nullable();
            $table->string('auth_no')->nullable();
            $table->date('auth_expiry_date')->nullable();
            $table->string('speed_details')->nullable();
            $table->date('speed_expiry_date')->nullable();
            $table->string('puc_no')->nullable();
            $table->string('puc_expiry_date')->nullable();
            $table->boolean('unavail_for_duty')->default(false);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_vehicles');
    }
};
