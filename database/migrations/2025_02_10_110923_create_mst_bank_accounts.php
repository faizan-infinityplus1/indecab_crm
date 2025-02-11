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
        Schema::create('mst_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            // account_name
            $table->string('account_name');
            // account_number
            $table->string('account_number');
            // ifsc_code
            $table->string('ifsc_code');
            // bank_name
            $table->string('bank_name');
            // bank_branch
            $table->string('bank_branch');
            // cheques_in_name
            $table->string('cheques_in_name');
            // upi_address
            $table->string('upi_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_bank_accounts');
    }
};
