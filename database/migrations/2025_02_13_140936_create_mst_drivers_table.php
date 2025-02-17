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
        Schema::create('mst_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('mobile_no');
            $table->string('alternate_mobile_no');
            $table->string('pan_no');
            $table->string('aadhar_no');
            $table->date('birth_date');
            $table->date('joining_date');
            $table->bigInteger('salary_per_month');
            $table->string('daily_wages');
            $table->string('branches');
            $table->string('daily_working_hours', 5); 
            $table->string('working_hours_start', 5); 
            $table->string('working_hours_end', 5); 
            $table->integer('daily_allowance'); 
            $table->integer('allowance_over_time'); 
            $table->integer('allowance_outstation_per_day'); 
            $table->integer('allowance_outstation_overnight'); 
            $table->integer('sunday_allowance'); 
            $table->integer('early_start_allowance'); 
            $table->integer('night_allowance'); 
            $table->integer('extra_duty_second'); 
            $table->integer('extra_duty_third'); 
            $table->integer('extra_duty_fourth'); 
            $table->integer('extra_duty_fifth'); 
            $table->string('license_no'); 
            $table->date('license_valid_upto'); 
            $table->string('police_card_number'); 
            $table->date('police_card_expiry_date'); 
            $table->string('police_veri_no'); 
            $table->date('police_veri_expiry_date'); 
            $table->string('badge_number'); 
            $table->date('badge_expiry_date'); 
            $table->string('additional_info'); 
            $table->string('driver_code'); 
            $table->boolean('is_contract'); 
            $table->boolean('is_covid_vacinated'); 
            $table->boolean('is_active'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_drivers');
    }
};
