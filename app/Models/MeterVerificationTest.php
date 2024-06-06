<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterVerificationTest extends Model 
{
    use HasFactory;

    protected $fillable = [
        //Meter Verification Test
        'user_id',
        'site_name',
        'meter_name',
        'fmv_reference_number',
        'site_reference',
        'telemetry_reference',
        'field_team',
        'site_manager_name',
        'site_manager_email',
        'site_manager_number',
        'site_contact_name',
        'site_contact_email',
        'site_contact_number',
        'confined_spaces',
        'site_address',
        'w3w',
        'gprs',

        'lat',
        'lng',
        'any_name',

        'rams_checked',
        'chamber_safety_check_completed',
        'tripod_fall_arrest_safety_check_completed',
        'harness_safety_check_completed',
        'gas_monitor_checks_completed',
        'gas_oxygen_monitor_reading_1',
        'h2s_reading_2',
        'lel_reading_3',
        'additional_reading_4',
        'safe_to_enter_chamber',
        'comment_why_not_safe_to_enter',
        'video_of_existing_meter_and_pipe',
        'video_of_mut_transmitter',

        //Recorded Volumetric Comparison T1
        't1_validation_start_date',
        't1_validation_start_time',
        't1_client_mut_flow',
        't1_client_mut_velocity',
        't1_client_mut_total',
        't1_fmv_mm1_flow',
        't1_fmv_mm1_velocity',
        't1_fmv_mm2_flow',
        't1_fmv_mm2_velocity',
        't1_fmv_mm2_total',
        't1_fmv_mm3_flow',
        't1_fmv_mm3_velocity',
        't1_fmv_mm3_total',
        't1_fmv_mm4_flow',
        't1_fmv_mm4_velocity',
        't1_fmv_mm4_total',
        't1_fmv_mm_ave_flow',
        't1_fmv_mm_ave_velocity',
        't1_fmv_mm_ave_total',
        't1_start_test_photo',
        't1_validation_end_date',
        't1_validation_end_time',
        't1_client_mut_flow_2',
        't1_client_mut_velocity_2',
        't1_client_mut_total_2',
        't1_fmv_mm1_flow_2',
        't1_fmv_mm1_velocity_2',
        't1_fmv_mm1_total_2',
        't1_fmv_mm2_flow_2',
        't1_fmv_mm2_velocity_2',
        't1_fmv_mm2_total_2',
        't1_fmv_mm3_flow_2',
        't1_fmv_mm3_velocity_2',
        't1_fmv_mm3_total_2',
        't1_fmv_mm4_flow_2',
        't1_fmv_mm4_velocity_2',
        't1_fmv_mm4_total_2',
        't1_fmv_mm_ave_flow_2',
        't1_fmv_mm_ave_velocity_2',
        't1_fmv_mm_ave_total_2',
        't1_additional_comments',
        't1_end_test_photo_1',
        't1_end_test_photo_2',
        't1_end_test_photo_3',
        't1_end_test_photo_4',

        //FMV - Client Volume Totals T1
        't1_mut_total_volume',
        't1_fmv_mm1_total_volume',
        't1_fmv_mm2_total_volume',
        't1_fmv_mm3_total_volume',
        't1_fmv_mm4_total_volume',
        't1_fmv_mm_average_total_volume',
        't1_mut_minus_mm_average',
        't1_mut_minus_mm_average_percent',

        //Recorded Volumetric Comparison T2
        't2_validation_start_date',
        't2_validation_start_time',
        't2_client_mut_flow',
        't2_client_mut_velocity',
        't2_client_mut_total',
        't2_fmv_mm1_flow',
        't2_fmv_mm1_velocity',
        't2_fmv_mm2_flow',
        't2_fmv_mm2_velocity',
        't2_fmv_mm2_total',
        't2_fmv_mm3_flow',
        't2_fmv_mm3_velocity',
        't2_fmv_mm3_total',
        't2_fmv_mm4_flow',
        't2_fmv_mm4_velocity',
        't2_fmv_mm4_total',
        't2_fmv_mm_ave_flow',
        't2_fmv_mm_ave_velocity',
        't2_fmv_mm_ave_total',
        't2_start_test_photo',
        't2_validation_end_date',
        't2_validation_end_time',
        't2_client_mut_flow_2',
        't2_client_mut_velocity_2',
        't2_client_mut_total_2',
        't2_fmv_mm1_flow_2',
        't2_fmv_mm1_velocity_2',
        't2_fmv_mm1_total_2',
        't2_fmv_mm2_flow_2',
        't2_fmv_mm2_velocity_2',
        't2_fmv_mm2_total_2',
        't2_fmv_mm3_flow_2',
        't2_fmv_mm3_velocity_2',
        't2_fmv_mm3_total_2',
        't2_fmv_mm4_flow_2',
        't2_fmv_mm4_velocity_2',
        't2_fmv_mm4_total_2',
        't2_fmv_mm_ave_flow_2',
        't2_fmv_mm_ave_velocity_2',
        't2_fmv_mm_ave_total_2',
        't2_additional_comments',
        't2_end_test_photo_1',
        't2_end_test_photo_2',
        't2_end_test_photo_3',
        't2_end_test_photo_4',

        //FMV - Client Volume Totals T1
        't2_client_total_volume',
        't2_fmv_mm1_total_volume',
        't2_fmv_mm2_total_volume',
        't2_fmv_mm3_total_volume',
        't2_fmv_mm4_total_volume',
        't2_fmv_mm_average_total_volume',
        't2_mut_minus_mm_average',
        't2_mut_minus_mm_average_percent',
     ];

     public function user()
     {
        return $this->belongsTo(User::class);
     }


     public static function getLatLngAttributes(): array
    {
        return [
            'lat' => 'lat',  // Replace 'latitude' with the actual field name for latitude in your table
            'lng' => 'lng', // Replace 'longitude' with the actual field name for longitude in your table
        ];
    }
     
}
