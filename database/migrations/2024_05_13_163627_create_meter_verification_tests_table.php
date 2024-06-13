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
            $table->string('grid_ref', 50)->nullable();
            
            $table->string('telemetry_reference', 50)->nullable();
            //date
            $table->json('field_team')->nullable();
            $table->text('site_manager_name')->nullable();
            $table->text('site_manager_email')->nullable();
            $table->text('site_manager_number')->nullable();
            $table->text('site_contact_name')->nullable();
            $table->text('site_contact_email')->nullable();
            $table->text('site_contact_number')->nullable();

            $table->enum('client_site_or_network', ['client_site', 'network'])->nullable();
            $table->boolean('tma')->nullable();
            $table->boolean('confined_spaces')->nullable();
            $table->boolean('2_person_lift_cover')->nullable();

            $table->text('site_address')->nullable();
            $table->text('w3w')->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
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
            $table->date('validation_start_date')->nullable();
            $table->time('validation_start_time')->nullable();
            // Client's MUT
            $table->text('flow_conversion_value')->nullable();
            $table->text('client_mut_flow')->nullable();
            $table->text('client_mut_velocity')->nullable();


            $table->text('total_forward_conversion_value')->nullable();
            $table->text('client_mut_total_forward')->nullable();
            $table->text('total_return_conversion_value')->nullable();
            $table->text('client_mut_total_return')->nullable();

            // FMV MM1
            $table->text('fmv_mm1_flow')->nullable();
            $table->text('fmv_mm1_velocity')->nullable();
            $table->text('fmv_mm1_total')->nullable();
            // FMV MM2
            $table->text('fmv_mm2_flow')->nullable();
            $table->text('fmv_mm2_velocity')->nullable();
            $table->text('fmv_mm2_total')->nullable();
            //FMV MM3
            $table->text('fmv_mm3_flow')->nullable();
            $table->text('fmv_mm3_velocity')->nullable();
            $table->text('fmv_mm3_total')->nullable();
            //FMV MM4
            $table->text('fmv_mm4_flow')->nullable();
            $table->text('fmv_mm4_velocity')->nullable();
            $table->text('fmv_mm4_total')->nullable();
            //FMV MM AVE
            $table->text('fmv_mm_ave_flow')->nullable();
            $table->text('fmv_mm_ave_velocity')->nullable();
            $table->text('fmv_mm_ave_total')->nullable();

            $table->text('start_test_photo')->nullable();
            $table->date('validation_end_date')->nullable();
            $table->time('validation_end_time')->nullable();


             // Client's MUT
             $table->text('client_mut_flow_2')->nullable();
             $table->text('client_mut_velocity_2')->nullable();
             $table->text('client_mut_total_2')->nullable();
             
            // FMV MM1
            $table->text('fmv_mm1_flow_2')->nullable();
            $table->text('fmv_mm1_velocity_2')->nullable();
            $table->text('fmv_mm1_total_2')->nullable();
            // FMV MM2
            $table->text('fmv_mm2_flow_2')->nullable();
            $table->text('fmv_mm2_velocity_2')->nullable();
            $table->text('fmv_mm2_total_2')->nullable();
            //FMV MM3
            $table->text('fmv_mm3_flow_2')->nullable();
            $table->text('fmv_mm3_velocity_2')->nullable();
            $table->text('fmv_mm3_total_2')->nullable();
            //FMV MM4
            $table->text('fmv_mm4_flow_2')->nullable();
            $table->text('fmv_mm4_velocity_2')->nullable();
            $table->text('fmv_mm4_total_2')->nullable();
            //FMV MM AVE
            $table->text('fmv_mm_ave_flow_2')->nullable();
            $table->text('fmv_mm_ave_velocity_2')->nullable();
            $table->text('fmv_mm_ave_total_2')->nullable();
            
            $table->text('additional_comments')->nullable();
            $table->text('end_test_photo_1')->nullable();
            $table->text('end_test_photo_2')->nullable();
            $table->text('end_test_photo_3')->nullable();
            $table->text('end_test_photo_4')->nullable();

            //FMV-Client Volume Totals T1 - you don't need this because its already saved earlier
            //$table->string('flow_conversion_value')->nullable();
            //$table->string('total_forward_conversion_value')->nullable();


            $table->string('client_mut_total_forward_volume')->nullable();
            $table->string('client_mut_total_return_volume')->nullable();

            $table->text('fmv_mm1_total_volume')->nullable();
            $table->text('fmv_mm2_total_volume')->nullable();
            $table->text('fmv_mm3_total_volume')->nullable();
            $table->text('fmv_mm4_total_volume')->nullable();

            $table->text('fmv_mm_average_total_volume')->nullable();
            $table->text('mut_minus_mm_average')->nullable();
            $table->text('mut_minus_mm_average_percent')->nullable();

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
