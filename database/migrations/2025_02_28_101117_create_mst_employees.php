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
        Schema::create('mst_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_no')->nullable();
            $table->string('alt_phone_no')->nullable();
            $table->string('email');
            $table->integer('created_employee_id')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->string('employee_photo')->nullable();
            $table->string('designation')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('pf_no')->nullable();
            $table->string('uan_no')->nullable();
            $table->string('dl_no')->nullable();
            $table->date('dl_exp_date')->nullable();
            $table->string('badge_no')->nullable();
            $table->date('badge_exp_date')->nullable();
            $table->string('address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('father_name')->nullable();
            $table->date('fathers_dob')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('mothers_dob')->nullable();
            $table->date('marriage_date')->nullable();
            $table->string('license_issued_by')->nullable();
            $table->string('license_city')->nullable();
            $table->string('license_state')->nullable();
            $table->date('license_exp_date')->nullable();
            $table->string('police_dis_card_no')->nullable();
            $table->date('police_dis_card_exp_date')->nullable();
            $table->string('police_verifi_no')->nullable();
            $table->date('police_verifi_exp_date')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->bigInteger('bank_ifsc_code')->nullable();
            $table->string('branches')->nullable();
            $table->string('associate_to_sister_company')->nullable();
            $table->string('visible_customers')->nullable();
            // $table->boolean('is_api_user')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_employees');
    }
};
