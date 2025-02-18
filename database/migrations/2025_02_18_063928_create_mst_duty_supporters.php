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
        Schema::create('mst_duty_supporters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('phone_no')->nullable();
            $table->string('alt_phone_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('aadhar_card')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('branches')->nullable();
            $table->string('ref_details')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_duty_supporters');
    }
};
