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
        Schema::create('mst_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('cust_groups_id')->nullable();
            $table->foreign('cust_groups_id')->references('id')->on('mst_customer_groups')->onDelete('restrict');
            $table->unsignedBigInteger('feedback_id')->nullable();
            $table->foreign('feedback_id')->references('id')->on('mst_feedback_forms')->onDelete('restrict');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('mst_my_companies')->onDelete('restrict');
            $table->string('name');
            $table->string('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('state')->nullable();
            $table->integer('phone_no')->nullable();
            $table->string('email_id')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->integer('tds_perc')->nullable();
            $table->integer('inv_def')->nullable();
            $table->integer('def_disc')->nullable();
            $table->string('base_city_fuel')->nullable();
            $table->integer('sales_comis_perc')->nullable();
            $table->string('country')->nullable(); 
            $table->string('def_tax_classif')->nullable(); 
            $table->integer('altern_phone_no')->nullable();
            $table->string('altern_email_id')->nullable();
            $table->string('serv_tax_no')->nullable();
            $table->string('gst_type')->nullable();
            $table->string('revrse_chrg')->nullable(); 
            $table->integer('surcharg_perc')->nullable();
            $table->integer('def_car_chrg_disc')->nullable();
            $table->string('force_fuel_type')->nullable();
            $table->string('branch')->nullable(); 
            $table->string('notes')->nullable();
            $table->string('inv_term_cond')->nullable();
            $table->string('cust_code')->nullable();
            $table->string('inv_og_hide')->nullable();
            $table->boolean('in_active')->default(false);
            // Gst Details Start Here
            $table->string('gst_name')->nullable();
            $table->string('gst_addr')->nullable();
            $table->string('gst_state')->nullable();
            $table->string('is_gst_primary')->nullable();
            $table->string('is_gst_tally')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_customers');
    }
};
