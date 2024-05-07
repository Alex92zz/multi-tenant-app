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
    Schema::create('meter_verification_tests', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('site_name');
        $table->string('meter_name');
        $table->string('fmv_reference_number');
        $table->string('site_reference');
        $table->string('telemetry_reference');
        $table->string('field_team');
        $table->string('site_manager_name');
        $table->string('site_manager_email');
        $table->string('site_manager_number');
        $table->string('site_contact_name');
        $table->string('site_contact_email');
        $table->string('site_contact_number');
        $table->boolean('confined_spaces');
        $table->text('site_address');
        $table->string('w3w');
        $table->string('gprs');
        $table->boolean('rams_checked');
        $table->boolean('chamber_safety_check_completed');
        $table->boolean('tripod_fall_arrest_safety_check_completed');
        $table->boolean('harness_safety_check_completed');
        $table->boolean('gas_monitor_checks_completed');
        $table->string('gas_oxygen_monitor_reading_1');
        $table->string('h2s_reading_2');
        $table->string('lel_reading_3');
        $table->string('additional_reading_4');
        $table->boolean('safe_to_enter_chamber');
        $table->text('comment_why_not_safe_to_enter')->nullable();
        $table->string('video_of_existing_meter_and_pipe')->nullable();
        $table->string('video_of_mut_transmitter')->nullable();
        $table->timestamps();
        
        $table->foreign('user_id')->references('id')->on('users');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_verification_tests');
    }
};
