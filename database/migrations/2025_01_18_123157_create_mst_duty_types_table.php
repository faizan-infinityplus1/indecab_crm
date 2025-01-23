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
        Schema::create('mst_duty_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('sub_type')->nullable();
            $table->integer('max_hours')->nullable();
            $table->integer('max_km')->nullable();
            $table->integer('max_kmper_day')->nullable();
            $table->integer('max_hours_per_day')->nullable();
            $table->integer('total_km')->nullable();
            $table->integer('max_days')->nullable();
            $table->integer('total_hours')->nullable();
            $table->longText('city_limit')->nullable();
            $table->boolean('outside_allowan')->default(false);
            $table->boolean('p2p')->default(false);
            $table->boolean('g2g')->default(false);
            $table->boolean('g_strkmtim')->default(false);
            $table->boolean('g_endkmtim')->default(false);
            $table->boolean('disdutroute')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_duty_types');
    }
};
