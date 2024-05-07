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
        Schema::table('meter_verification_tests', function (Blueprint $table) {
            //Recorded Volumetric Comparison T1
            $table->dateTime('t1_validation_start_date')->nullable();
            $table->time('t1_validation_start_time')->nullable();
            $table->decimal('t1_client_mut_flow')->nullable();
            $table->decimal('t1_client_mut_velocity')->nullable();
            $table->decimal('t1_client_mut_total')->nullable();
            $table->decimal('t1_fmv_mm1_flow')->nullable();
            $table->decimal('t1_fmv_mm1_velocity')->nullable();
            $table->decimal('t1_fmv_mm2_flow')->nullable();
            $table->decimal('t1_fmv_mm2_velocity')->nullable();
            $table->decimal('t1_fmv_mm2_total')->nullable();
            $table->decimal('t1_fmv_mm3_flow')->nullable();
            $table->decimal('t1_fmv_mm3_velocity')->nullable();
            $table->decimal('t1_fmv_mm3_total')->nullable();
            $table->decimal('t1_fmv_mm4_flow')->nullable();
            $table->decimal('t1_fmv_mm4_velocity')->nullable();
            $table->decimal('t1_fmv_mm4_total')->nullable();
            $table->decimal('t1_fmv_mm_ave_flow')->nullable();
            $table->decimal('t1_fmv_mm_ave_velocity')->nullable();
            $table->decimal('t1_fmv_mm_ave_total')->nullable();
            $table->string('t1_start_test_photo')->nullable();
            $table->dateTime('t1_validation_end_date')->nullable();
            $table->time('t1_validation_end_time')->nullable();
            $table->decimal('t1_client_mut_flow_2')->nullable();
            $table->decimal('t1_client_mut_velocity_2')->nullable();
            $table->decimal('t1_client_mut_total_2')->nullable();
            $table->decimal('t1_fmv_mm1_flow_2')->nullable();
            $table->decimal('t1_fmv_mm1_velocity_2')->nullable();
            $table->decimal('t1_fmv_mm1_total_2')->nullable();
            $table->decimal('t1_fmv_mm2_flow_2')->nullable();
            $table->decimal('t1_fmv_mm2_velocity_2')->nullable();
            $table->decimal('t1_fmv_mm2_total_2')->nullable();
            $table->decimal('t1_fmv_mm3_flow_2')->nullable();
            $table->decimal('t1_fmv_mm3_velocity_2')->nullable();
            $table->decimal('t1_fmv_mm3_total_2')->nullable();
            $table->decimal('t1_fmv_mm4_flow_2')->nullable();
            $table->decimal('t1_fmv_mm4_velocity_2')->nullable();
            $table->decimal('t1_fmv_mm4_total_2')->nullable();
            $table->decimal('t1_fmv_mm_ave_flow_2')->nullable();
            $table->decimal('t1_fmv_mm_ave_velocity_2')->nullable();
            $table->decimal('t1_fmv_mm_ave_total_2')->nullable();
            $table->text('t1_additional_comments')->nullable();
            $table->string('t1_end_test_photo_1')->nullable();
            $table->string('t1_end_test_photo_2')->nullable();
            $table->string('t1_end_test_photo_3')->nullable();
            $table->string('t1_end_test_photo_4')->nullable();

            //FMV - Client Volume Totals T1
            $table->decimal('t1_mut_total_volume')->nullable();
            $table->decimal('t1_fmv_mm1_total_volume')->nullable();
            $table->decimal('t1_fmv_mm2_total_volume')->nullable();
            $table->decimal('t1_fmv_mm3_total_volume')->nullable();
            $table->decimal('t1_fmv_mm4_total_volume')->nullable();
            $table->decimal('t1_fmv_mm_average_total_volume')->nullable();
            $table->decimal('t1_mut_minus_mm_average')->nullable();
            $table->decimal('t1_mut_minus_mm_average_percent')->nullable();


            //Recorded Volumetric Comparison T2
            $table->dateTime('t2_validation_start_date')->nullable();
            $table->time('t2_validation_start_time')->nullable();
            $table->decimal('t2_client_mut_flow')->nullable();
            $table->decimal('t2_client_mut_velocity')->nullable();
            $table->decimal('t2_client_mut_total')->nullable();
            $table->decimal('t2_fmv_mm1_flow')->nullable();
            $table->decimal('t2_fmv_mm1_velocity')->nullable();
            $table->decimal('t2_fmv_mm2_flow')->nullable();
            $table->decimal('t2_fmv_mm2_velocity')->nullable();
            $table->decimal('t2_fmv_mm2_total')->nullable();
            $table->decimal('t2_fmv_mm3_flow')->nullable();
            $table->decimal('t2_fmv_mm3_velocity')->nullable();
            $table->decimal('t2_fmv_mm3_total')->nullable();
            $table->decimal('t2_fmv_mm4_flow')->nullable();
            $table->decimal('t2_fmv_mm4_velocity')->nullable();
            $table->decimal('t2_fmv_mm4_total')->nullable();
            $table->decimal('t2_fmv_mm_ave_flow')->nullable();
            $table->decimal('t2_fmv_mm_ave_velocity')->nullable();
            $table->decimal('t2_fmv_mm_ave_total')->nullable();
            $table->string('t2_start_test_photo')->nullable();
            $table->dateTime('t2_validation_end_date')->nullable();
            $table->time('t2_validation_end_time')->nullable();
            $table->decimal('t2_client_mut_flow_2')->nullable();
            $table->decimal('t2_client_mut_velocity_2')->nullable();
            $table->decimal('t2_client_mut_total_2')->nullable();
            $table->decimal('t2_fmv_mm1_flow_2')->nullable();
            $table->decimal('t2_fmv_mm1_velocity_2')->nullable();
            $table->decimal('t2_fmv_mm1_total_2')->nullable();
            $table->decimal('t2_fmv_mm2_flow_2')->nullable();
            $table->decimal('t2_fmv_mm2_velocity_2')->nullable();
            $table->decimal('t2_fmv_mm2_total_2')->nullable();
            $table->decimal('t2_fmv_mm3_flow_2')->nullable();
            $table->decimal('t2_fmv_mm3_velocity_2')->nullable();
            $table->decimal('t2_fmv_mm3_total_2')->nullable();
            $table->decimal('t2_fmv_mm4_flow_2')->nullable();
            $table->decimal('t2_fmv_mm4_velocity_2')->nullable();
            $table->decimal('t2_fmv_mm4_total_2')->nullable();
            $table->decimal('t2_fmv_mm_ave_flow_2')->nullable();
            $table->decimal('t2_fmv_mm_ave_velocity_2')->nullable();
            $table->decimal('t2_fmv_mm_ave_total_2')->nullable();
            $table->text('t2_additional_comments')->nullable();
            $table->string('t2_end_test_photo_1')->nullable();
            $table->string('t2_end_test_photo_2')->nullable();
            $table->string('t2_end_test_photo_3')->nullable();
            $table->string('t2_end_test_photo_4')->nullable();

            //FMV - Client Volume Totals T1
            $table->decimal('t2_mut_total_volume')->nullable();
            $table->decimal('t2_fmv_mm1_total_volume')->nullable();
            $table->decimal('t2_fmv_mm2_total_volume')->nullable();
            $table->decimal('t2_fmv_mm3_total_volume')->nullable();
            $table->decimal('t2_fmv_mm4_total_volume')->nullable();
            $table->decimal('t2_fmv_mm_average_total_volume')->nullable();
            $table->decimal('t2_mut_minus_mm_average')->nullable();
            $table->decimal('t2_mut_minus_mm_average_percent')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meter_verification_tests', function (Blueprint $table) {
             //Recorded Volumetric Comparison T1
             $table->dateTime('t1_validation_start_date')->nullable();
             $table->time('t1_validation_start_time')->nullable();
             $table->decimal('t1_client_mut_flow')->nullable();
             $table->decimal('t1_client_mut_velocity')->nullable();
             $table->decimal('t1_client_mut_total')->nullable();
             $table->decimal('t1_fmv_mm1_flow')->nullable();
             $table->decimal('t1_fmv_mm1_velocity')->nullable();
             $table->decimal('t1_fmv_mm2_flow')->nullable();
             $table->decimal('t1_fmv_mm2_velocity')->nullable();
             $table->decimal('t1_fmv_mm2_total')->nullable();
             $table->decimal('t1_fmv_mm3_flow')->nullable();
             $table->decimal('t1_fmv_mm3_velocity')->nullable();
             $table->decimal('t1_fmv_mm3_total')->nullable();
             $table->decimal('t1_fmv_mm4_flow')->nullable();
             $table->decimal('t1_fmv_mm4_velocity')->nullable();
             $table->decimal('t1_fmv_mm4_total')->nullable();
             $table->decimal('t1_fmv_mm_ave_flow')->nullable();
             $table->decimal('t1_fmv_mm_ave_velocity')->nullable();
             $table->decimal('t1_fmv_mm_ave_total')->nullable();
             $table->string('t1_start_test_photo')->nullable();
             $table->dateTime('t1_validation_end_date')->nullable();
             $table->time('t1_validation_end_time')->nullable();
             $table->decimal('t1_client_mut_flow_2')->nullable();
             $table->decimal('t1_client_mut_velocity_2')->nullable();
             $table->decimal('t1_client_mut_total_2')->nullable();
             $table->decimal('t1_fmv_mm1_flow_2')->nullable();
             $table->decimal('t1_fmv_mm1_velocity_2')->nullable();
             $table->decimal('t1_fmv_mm1_total_2')->nullable();
             $table->decimal('t1_fmv_mm2_flow_2')->nullable();
             $table->decimal('t1_fmv_mm2_velocity_2')->nullable();
             $table->decimal('t1_fmv_mm2_total_2')->nullable();
             $table->decimal('t1_fmv_mm3_flow_2')->nullable();
             $table->decimal('t1_fmv_mm3_velocity_2')->nullable();
             $table->decimal('t1_fmv_mm3_total_2')->nullable();
             $table->decimal('t1_fmv_mm4_flow_2')->nullable();
             $table->decimal('t1_fmv_mm4_velocity_2')->nullable();
             $table->decimal('t1_fmv_mm4_total_2')->nullable();
             $table->decimal('t1_fmv_mm_ave_flow_2')->nullable();
             $table->decimal('t1_fmv_mm_ave_velocity_2')->nullable();
             $table->decimal('t1_fmv_mm_ave_total_2')->nullable();
             $table->text('t1_additional_comments')->nullable();
             $table->string('t1_end_test_photo_1')->nullable();
             $table->string('t1_end_test_photo_2')->nullable();
             $table->string('t1_end_test_photo_3')->nullable();
             $table->string('t1_end_test_photo_4')->nullable();
 
             //FMV - Client Volume Totals T1
             $table->decimal('t1_mut_total_volume')->nullable();
             $table->decimal('t1_fmv_mm1_total_volume')->nullable();
             $table->decimal('t1_fmv_mm2_total_volume')->nullable();
             $table->decimal('t1_fmv_mm3_total_volume')->nullable();
             $table->decimal('t1_fmv_mm4_total_volume')->nullable();
             $table->decimal('t1_fmv_mm_average_total_volume')->nullable();
             $table->decimal('t1_mut_minus_mm_average')->nullable();
             $table->decimal('t1_mut_minus_mm_average_percent')->nullable();
 
 
             //Recorded Volumetric Comparison T2
             $table->dateTime('t2_validation_start_date')->nullable();
             $table->time('t2_validation_start_time')->nullable();
             $table->decimal('t2_client_mut_flow')->nullable();
             $table->decimal('t2_client_mut_velocity')->nullable();
             $table->decimal('t2_client_mut_total')->nullable();
             $table->decimal('t2_fmv_mm1_flow')->nullable();
             $table->decimal('t2_fmv_mm1_velocity')->nullable();
             $table->decimal('t2_fmv_mm2_flow')->nullable();
             $table->decimal('t2_fmv_mm2_velocity')->nullable();
             $table->decimal('t2_fmv_mm2_total')->nullable();
             $table->decimal('t2_fmv_mm3_flow')->nullable();
             $table->decimal('t2_fmv_mm3_velocity')->nullable();
             $table->decimal('t2_fmv_mm3_total')->nullable();
             $table->decimal('t2_fmv_mm4_flow')->nullable();
             $table->decimal('t2_fmv_mm4_velocity')->nullable();
             $table->decimal('t2_fmv_mm4_total')->nullable();
             $table->decimal('t2_fmv_mm_ave_flow')->nullable();
             $table->decimal('t2_fmv_mm_ave_velocity')->nullable();
             $table->decimal('t2_fmv_mm_ave_total')->nullable();
             $table->string('t2_start_test_photo')->nullable();
             $table->dateTime('t2_validation_end_date')->nullable();
             $table->time('t2_validation_end_time')->nullable();
             $table->decimal('t2_client_mut_flow_2')->nullable();
             $table->decimal('t2_client_mut_velocity_2')->nullable();
             $table->decimal('t2_client_mut_total_2')->nullable();
             $table->decimal('t2_fmv_mm1_flow_2')->nullable();
             $table->decimal('t2_fmv_mm1_velocity_2')->nullable();
             $table->decimal('t2_fmv_mm1_total_2')->nullable();
             $table->decimal('t2_fmv_mm2_flow_2')->nullable();
             $table->decimal('t2_fmv_mm2_velocity_2')->nullable();
             $table->decimal('t2_fmv_mm2_total_2')->nullable();
             $table->decimal('t2_fmv_mm3_flow_2')->nullable();
             $table->decimal('t2_fmv_mm3_velocity_2')->nullable();
             $table->decimal('t2_fmv_mm3_total_2')->nullable();
             $table->decimal('t2_fmv_mm4_flow_2')->nullable();
             $table->decimal('t2_fmv_mm4_velocity_2')->nullable();
             $table->decimal('t2_fmv_mm4_total_2')->nullable();
             $table->decimal('t2_fmv_mm_ave_flow_2')->nullable();
             $table->decimal('t2_fmv_mm_ave_velocity_2')->nullable();
             $table->decimal('t2_fmv_mm_ave_total_2')->nullable();
             $table->text('t2_additional_comments')->nullable();
             $table->string('t2_end_test_photo_1')->nullable();
             $table->string('t2_end_test_photo_2')->nullable();
             $table->string('t2_end_test_photo_3')->nullable();
             $table->string('t2_end_test_photo_4')->nullable();
 
             //FMV - Client Volume Totals T1
             $table->decimal('t2_mut_total_volume')->nullable();
             $table->decimal('t2_fmv_mm1_total_volume')->nullable();
             $table->decimal('t2_fmv_mm2_total_volume')->nullable();
             $table->decimal('t2_fmv_mm3_total_volume')->nullable();
             $table->decimal('t2_fmv_mm4_total_volume')->nullable();
             $table->decimal('t2_fmv_mm_average_total_volume')->nullable();
             $table->decimal('t2_mut_minus_mm_average')->nullable();
             $table->decimal('t2_mut_minus_mm_average_percent')->nullable();
        });
    }
};
