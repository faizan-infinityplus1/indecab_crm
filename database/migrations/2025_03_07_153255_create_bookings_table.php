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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('mst_customers')->onDelete('cascade');
            $table->string('from_service');
            $table->string('to_service');
            $table->string('vehicle_group');
            $table->string('duty_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reporting_time');
            $table->string('drop_time');
            $table->integer('garage_time');
            $table->string('reporting_address')->nullable();
            $table->string('drop_address')->nullable();
            $table->string('short_reporting_address')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('bill_to')->nullable();
            $table->integer('price');
            $table->integer('per_extra_km_rate')->nullable();
            $table->integer('per_extra_hr_rate')->nullable();
            $table->string('remarks')->nullable();
            $table->string('driver_remark')->nullable();
            $table->string('operator_notes')->nullable();
            $table->string('labels')->nullable();
            $table->boolean('is_confirmed_booking')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
