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
        Schema::create('m_s_t_customer_people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->string('name');
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alternate_phone_no')->nullable();
            $table->string('alternate_email')->nullable();
            $table->string('notes')->nullable();
            $table->string('labels')->nullable();
            $table->boolean('isPassenger')->default(false);
            $table->boolean('isBookedBy')->default(false);
            $table->boolean('isAdditionalContact')->default(false);
            $table->boolean('isEmergencyContact')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_s_t_customer_people');
    }
};
