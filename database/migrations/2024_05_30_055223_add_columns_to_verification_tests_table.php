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
        Schema::table('meter_verification_tests', function (Blueprint $table) {
             // Client's MUT
             $table->text('t1_client_mut_flow')->nullable();
             $table->text('t1_client_mut_velocity')->nullable();
             $table->text('t1_client_mut_total')->nullable();
             // FMV MM1
             $table->text('t1_fmv_mm1_flow')->nullable();
             $table->text('t1_fmv_mm1_velocity')->nullable();
             $table->text('t1_fmv_mm1_total')->nullable();
             // FMV MM2
             $table->text('t1_fmv_mm2_flow')->nullable();
             $table->text('t1_fmv_mm2_velocity')->nullable();
             $table->text('t1_fmv_mm2_total')->nullable();
             //FMV MM3
             $table->text('t1_fmv_mm3_flow')->nullable();
             $table->text('t1_fmv_mm3_velocity')->nullable();
             $table->text('t1_fmv_mm3_total')->nullable();
             //FMV MM4
             $table->text('t1_fmv_mm4_flow')->nullable();
             $table->text('t1_fmv_mm4_velocity')->nullable();
             $table->text('t1_fmv_mm4_total')->nullable();
             //FMV MM AVE
             $table->text('t1_fmv_mm_ave_flow')->nullable();
             $table->text('t1_fmv_mm_ave_velocity')->nullable();
             $table->text('t1_fmv_mm_ave_total')->nullable();

             $table->text('t1_start_test_photo')->nullable();
             $table->date('t1_validation_end_date')->nullable();
             $table->time('t1_validation_end_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meter_verification_tests', function (Blueprint $table) {
            // Client's MUT
            $table->text('t1_client_mut_flow')->nullable();
            $table->text('t1_client_mut_velocity')->nullable();
            $table->text('t1_client_mut_total')->nullable();
            // FMV MM1
            $table->text('t1_fmv_mm1_flow')->nullable();
            $table->text('t1_fmv_mm1_velocity')->nullable();
            $table->text('t1_fmv_mm1_total')->nullable();
            // FMV MM2
            $table->text('t1_fmv_mm2_flow')->nullable();
            $table->text('t1_fmv_mm2_velocity')->nullable();
            $table->text('t1_fmv_mm2_total')->nullable();
            //FMV MM3
            $table->text('t1_fmv_mm3_flow')->nullable();
            $table->text('t1_fmv_mm3_velocity')->nullable();
            $table->text('t1_fmv_mm3_total')->nullable();
            //FMV MM4
            $table->text('t1_fmv_mm4_flow')->nullable();
            $table->text('t1_fmv_mm4_velocity')->nullable();
            $table->text('t1_fmv_mm4_total')->nullable();
            //FMV MM AVE
            $table->text('t1_fmv_mm_ave_flow')->nullable();
            $table->text('t1_fmv_mm_ave_velocity')->nullable();
            $table->text('t1_fmv_mm_ave_total')->nullable();

            $table->text('t1_start_test_photo')->nullable();
            $table->date('t1_validation_end_date')->nullable();
            $table->time('t1_validation_end_time')->nullable();
        });
    }
};
