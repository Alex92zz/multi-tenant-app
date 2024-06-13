<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterVerificationTest extends Model 
{
    use HasFactory;


    protected $casts = [
        'field_team' => 'array',
    ];


    protected $fillable = [
        //Meter Verification Test
        'user_id',
        'site_name',
        'meter_name',
        'fmv_reference_number',
        'site_reference',
        
        'grid_ref', //need to add this

        'telemetry_reference',
        'field_team',
        'site_manager_name',
        'site_manager_email',
        'site_manager_number',
        'site_contact_name',
        'site_contact_email',
        'site_contact_number',

        'client_site_or_network', // need to add this
        'tma', //this as well

        'confined_spaces',

        '2_person_lift_cover', //this as well

        'site_address',
        'w3w',

        'lat',//this as well
        'lng',//this as well

        'gprs',

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
        'validation_start_date',
        'validation_start_time',

        'flow_conversion_value', //this as well

        'client_mut_flow',
        'client_mut_velocity',

        'total_forward_conversion_value',//this as well
        'client_mut_total_forward',//this as well
        'total_return_conversion_value',//this as well
        'client_mut_total_return',//this as well

        'fmv_mm1_flow',
        'fmv_mm1_velocity',
        'fmv_mm1_total',

        'fmv_mm2_flow',
        'fmv_mm2_velocity',
        'fmv_mm2_total',

        'fmv_mm3_flow',
        'fmv_mm3_velocity',
        'fmv_mm3_total',

        'fmv_mm4_flow',
        'fmv_mm4_velocity',
        'fmv_mm4_total',

        'fmv_mm_ave_flow',
        'fmv_mm_ave_velocity',
        'fmv_mm_ave_total',

        'start_test_photo',
        'validation_end_date',
        'validation_end_time',

        'client_mut_flow_2',
        'client_mut_velocity_2',
        'client_mut_total_2',

        'fmv_mm1_flow_2',
        'fmv_mm1_velocity_2',
        'fmv_mm1_total_2',

        'fmv_mm2_flow_2',
        'fmv_mm2_velocity_2',
        'fmv_mm2_total_2',

        'fmv_mm3_flow_2',
        'fmv_mm3_velocity_2',
        'fmv_mm3_total_2',

        'fmv_mm4_flow_2',
        'fmv_mm4_velocity_2',
        'fmv_mm4_total_2',

        'fmv_mm_ave_flow_2',
        'fmv_mm_ave_velocity_2',
        'fmv_mm_ave_total_2',

        'additional_comments',
        'end_test_photo_1',
        'end_test_photo_2',
        'end_test_photo_3',
        'end_test_photo_4',

        //FMV - Client Volume Totals T1
        'client_mut_total_forward_volume',
        'client_mut_total_return_volume',

        'fmv_mm1_total_volume',
        'fmv_mm2_total_volume',
        'fmv_mm3_total_volume',
        'fmv_mm4_total_volume',

        'fmv_mm_average_total_volume',
        'mut_minus_mm_average',
        'mut_minus_mm_average_percent',

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
