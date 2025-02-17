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
        Schema::create('mst_suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('supli_groups_id')->nullable();
            $table->foreign('supli_groups_id')->references('id')->on('mst_supplier_groups')->onDelete('cascade');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('type')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email_id')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('revrse_chrg')->nullable(); 
            $table->string('revenue_share_per')->nullable(); 
            $table->integer('pincode')->nullable();
            $table->integer('tds_perc')->nullable();
            $table->string('head_office_city')->nullable(); 
            $table->string('def_tax_classif')->nullable(); 
            $table->string('cities')->nullable(); 
            $table->string('tds_ledger_type')->nullable(); 
            $table->longText('limit_allot_booking')->nullable(); 
            $table->longText('limit_duty_type')->nullable(); 
            $table->longText('vehi_group_limit')->nullable(); 
            $table->string('branch')->nullable(); 
            $table->string('cities_cost')->nullable(); 
            $table->string('cities_ext_hig_cost')->nullable(); 
            $table->string('supplier_code')->nullable();
            $table->string('gst_name')->nullable();
            $table->string('gst_addr')->nullable();
            $table->string('gst_state')->nullable();
            $table->string('altern_phone_no')->nullable();
            $table->string('altern_email_id')->nullable();
            $table->string('serv_tax_no')->nullable();
            $table->string('gst_type')->nullable();
            $table->string('start', 5)->nullable(); 
            $table->string('end', 5)->nullable(); 
            $table->boolean('is_gst_tally')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_suppliers');
    }
};
