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
        Schema::create('mst_my_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('mobile_no');
            $table->string('alternate_mobile_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('joining_date')->nullable();
            $table->bigInteger('salary_per_month')->nullable();
            $table->string('daily_wages')->nullable();
            $table->string('branches')->nullable();
            $table->string('daily_working_hours', 5)->nullable();
            $table->string('working_hours_start', 5)->nullable();
            $table->string('working_hours_end', 5)->nullable();
            $table->integer('daily_allowance')->nullable();
            $table->integer('allowance_over_time')->nullable();
            $table->integer('allowance_outstation_per_day')->nullable();
            $table->integer('allowance_outstation_overnight')->nullable();
            $table->integer('sunday_allowance')->nullable();
            $table->integer('early_start_allowance')->nullable();
            $table->integer('night_allowance')->nullable();
            $table->integer('extra_duty_second')->nullable();
            $table->integer('extra_duty_third')->nullable();
            $table->integer('extra_duty_fourth')->nullable();
            $table->integer('extra_duty_fifth')->nullable();
            $table->string('license_no')->nullable();
            $table->date('license_valid_upto')->nullable();
            $table->string('police_card_number')->nullable();
            $table->date('police_card_expiry_date')->nullable();
            $table->string('police_veri_no')->nullable();
            $table->date('police_veri_expiry_date')->nullable();
            $table->string('badge_number')->nullable();
            $table->date('badge_expiry_date')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('driver_code')->nullable();
            $table->boolean('is_contract')->nullable();
            $table->boolean('is_covid_vacinated')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_my_drivers');
    }
};
