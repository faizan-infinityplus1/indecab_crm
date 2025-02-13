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
        Schema::create('mst_billing_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->boolean('taxable')->default(false);
            $table->boolean('allow_driver_to_add')->default(false);
            $table->boolean('req_bef_strt_duty')->default(false);
            $table->boolean('n_charged_on_customer_invoice')->default(false);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_billing_items');
    }
};
