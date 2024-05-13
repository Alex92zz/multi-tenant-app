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
        Schema::create('meter_verification_tests', function (Blueprint $table) {
            $table->id();

            //4-Meter Verification Test
            $table->unsignedBigInteger('user_id');
            $table->string('site_name', 50)->nullable();
            $table->string('meter_name', 50)->nullable();
            $table->string('fmv_reference_number', 50)->nullable();
            $table->string('site_reference', 50)->nullable();
            $table->string('telemetry_reference', 50)->nullable();
            $table->string('field_team', 50)->nullable();
            $table->text('site_manager_name')->nullable();
            $table->text('site_manager_email')->nullable();
            $table->text('site_manager_number')->nullable();
            $table->text('site_contact_name')->nullable();
            $table->text('site_contact_email')->nullable();
            $table->text('site_contact_number')->nullable();
            $table->boolean('confined_spaces')->nullable();
            $table->text('site_address')->nullable();
            $table->text('w3w')->nullable();
            $table->text('gprs')->nullable();
            $table->boolean('rams_checked')->nullable();
            $table->boolean('chamber_safety_check_completed')->nullable();
            $table->boolean('tripod_fall_arrest_safety_check_completed')->nullable();
            $table->boolean('harness_safety_check_completed')->nullable();
            $table->boolean('gas_monitor_checks_completed')->nullable();
            $table->text('gas_oxygen_monitor_reading_1')->nullable();
            $table->text('h2s_reading_2')->nullable();
            $table->text('lel_reading_3')->nullable();
            $table->text('additional_reading_4')->nullable();
            $table->boolean('safe_to_enter_chamber')->nullable();
            $table->text('comment_why_not_safe_to_enter')->nullable();
            $table->text('video_of_existing_meter_and_pipe')->nullable();
            $table->text('video_of_mut_transmitter')->nullable();

            //Recorded Volumetric Comparison T1
            $table->date('t1_validation_start_date')->nullable();
            $table->time('t1_validation_start_time')->nullable();
            // Client's MUT
            $table->text('t1_client_mut_flow_2')->nullable();
            $table->text('t1_client_mut_velocity_2')->nullable();
            $table->text('t1_client_mut_total_2')->nullable();
            // FMV MM1
            $table->text('t1_fmv_mm1_flow_2')->nullable();
            $table->text('t1_fmv_mm1_velocity_2')->nullable();
            $table->text('t1_fmv_mm1_total_2')->nullable();
            // FMV MM2
            $table->text('t1_fmv_mm2_flow_2')->nullable();
            $table->text('t1_fmv_mm2_velocity_2')->nullable();
            $table->text('t1_fmv_mm2_total_2')->nullable();
            //FMV MM3
            $table->text('t1_fmv_mm3_flow_2')->nullable();
            $table->text('t1_fmv_mm3_velocity_2')->nullable();
            $table->text('t1_fmv_mm3_total_2')->nullable();
            //FMV MM4
            $table->text('t1_fmv_mm4_flow_2')->nullable();
            $table->text('t1_fmv_mm4_velocity_2')->nullable();
            $table->text('t1_fmv_mm4_total_2')->nullable();
            //FMV MM AVE
            $table->text('t1_fmv_mm_ave_flow_2')->nullable();
            $table->text('t1_fmv_mm_ave_velocity_2')->nullable();
            $table->text('t1_fmv_mm_ave_total_2')->nullable();
            
            $table->text('t1_additional_comments')->nullable();
            $table->text('t1_end_test_photo_1')->nullable();
            $table->text('t1_end_test_photo_2')->nullable();
            $table->text('t1_end_test_photo_3')->nullable();
            $table->text('t1_end_test_photo_4')->nullable();

            //FMV-Client Volume Totals T1
            $table->text('t1_mut_total_volume')->nullable();
            $table->text('t1_fmv_mm1_total_volume')->nullable();
            $table->text('t1_fmv_mm2_total_volume')->nullable();
            $table->text('t1_fmv_mm3_total_volume')->nullable();
            $table->text('t1_fmv_mm4_total_volume')->nullable();
            $table->text('t1_fmv_mm_average_total_volume')->nullable();
            $table->text('t1_mut_minus_mm_average')->nullable();
            $table->text('t1_mut_minus_mm_average_percent')->nullable();

            //Recorded Volumetric Comparison T2
            $table->date('t2_validation_start_date')->nullable();
            $table->time('t2_validation_start_time')->nullable();
            $table->text('t2_client_mut_flow')->nullable();
            $table->text('t2_client_mut_velocity')->nullable();
            $table->text('t2_client_mut_total')->nullable();
            $table->text('t2_fmv_mm1_flow')->nullable();
            $table->text('t2_fmv_mm1_velocity')->nullable();
            $table->text('t2_fmv_mm2_flow')->nullable();
            $table->text('t2_fmv_mm2_velocity')->nullable();
            $table->text('t2_fmv_mm2_total')->nullable();
            $table->text('t2_fmv_mm3_flow')->nullable();
            $table->text('t2_fmv_mm3_velocity')->nullable();
            $table->text('t2_fmv_mm3_total')->nullable();
            $table->text('t2_fmv_mm4_flow')->nullable();
            $table->text('t2_fmv_mm4_velocity')->nullable();
            $table->text('t2_fmv_mm4_total')->nullable();
            $table->text('t2_fmv_mm_ave_flow')->nullable();
            $table->text('t2_fmv_mm_ave_velocity')->nullable();
            $table->text('t2_fmv_mm_ave_total')->nullable();
            $table->text('t2_start_test_photo')->nullable();
            $table->date('t2_validation_end_date')->nullable();
            $table->time('t2_validation_end_time')->nullable();
            $table->text('t2_client_mut_flow_2')->nullable();
            $table->text('t2_client_mut_velocity_2')->nullable();
            $table->text('t2_client_mut_total_2')->nullable();
            $table->text('t2_fmv_mm1_flow_2')->nullable();
            $table->text('t2_fmv_mm1_velocity_2')->nullable();
            $table->text('t2_fmv_mm1_total_2')->nullable();
            $table->text('t2_fmv_mm2_flow_2')->nullable();
            $table->text('t2_fmv_mm2_velocity_2')->nullable();
            $table->text('t2_fmv_mm2_total_2')->nullable();
            $table->text('t2_fmv_mm3_flow_2')->nullable();
            $table->text('t2_fmv_mm3_velocity_2')->nullable();
            $table->text('t2_fmv_mm3_total_2')->nullable();
            $table->text('t2_fmv_mm4_flow_2')->nullable();
            $table->text('t2_fmv_mm4_velocity_2')->nullable();
            $table->text('t2_fmv_mm4_total_2')->nullable();
            $table->text('t2_fmv_mm_ave_flow_2')->nullable();
            $table->text('t2_fmv_mm_ave_velocity_2')->nullable();
            $table->text('t2_fmv_mm_ave_total_2')->nullable();
            $table->text('t2_additional_comments')->nullable();
            $table->text('t2_end_test_photo_1')->nullable();
            $table->text('t2_end_test_photo_2')->nullable();
            $table->text('t2_end_test_photo_3')->nullable();
            $table->text('t2_end_test_photo_4')->nullable();

            //FMV - Client Volume Totals T2
            $table->text('t2_mut_total_volume')->nullable();
            $table->text('t2_fmv_mm1_total_volume')->nullable();
            $table->text('t2_fmv_mm2_total_volume')->nullable();
            $table->text('t2_fmv_mm3_total_volume')->nullable();
            $table->text('t2_fmv_mm4_total_volume')->nullable();
            $table->text('t2_fmv_mm_average_total_volume')->nullable();
            $table->text('t2_mut_minus_mm_average')->nullable();
            $table->text('t2_mut_minus_mm_average_percent')->nullable();

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
