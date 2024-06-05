<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterReplacementSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        // Tab 1
        'user_id',
        'site_name',
        'meter_name',
        'fmv_reference_number',
        'telemetry_reference',
        'field_team',
        'site_contact_email',
        'site_contact_number',
        'confined_spaces',
        'chamber_flooded',
        'site_address',
        'w3w',
        'gprs',
        'chamber_length',
        'chamber_width',
        'chamber_debth',
        '2_person_lift_cover',
        'is_client_access_required',
        'keys_required',
        'photo_url',
        'video_of_new_meter_and_pipework',
        'video_of_new_transmitter',
        'site_sketch',

        //Tab 2 New Meter Details
        'flow_measurment_device_type',
        'meter_manufacturer',
        'manufacturer_other',
        'meter_make_model',
        'meter_serial_number',
        'transmitter_serial_number',
        'flow_range',
        'signal_output',
        'supply_voltage',
        'cable_length',
        'meter_chamber_location',
        'barcode_number',
        'meter_transmitter_model',
        'meter_transmitter_sn',
        'meter_transmitter_location',
        'meter_installed_orientation',
        'meter_size',
        'pipe_diameter',
        'number_of_bolts',
        'bolt_length',
        'output_signal_pulsed_setup',
        'output_signal_4_20_ma_range',
        'earthing_cable_present',
        'earth_bonding_present',
        'calibration_offset_in_meter',

        'barcode_number_2',
        'image_1',
        'image_2',
        'image_3',
        'image_4',

        // Tab 3 Verification Check List
        'app_suitable_for_meter_installation',
        'comment',

        'new_meter_installation_recommendations',
        'comment_2',
        
        'flange_adapter_pipe_fittings_requirement',
        'comment_3',

        'meter_photo',
        'comment_4',

        'on_site_volumetric_comparison_available',
        'comment_5',

        'meter_verification_point_available',
        'photo_url_2',
        'comment_6',

        'new_meter_verification_required',
        'photo_url_2',
        'comment_7',

        'as_left_site_setup_file_saved',
        'comment_8',

        'full_pipe',
        'comment_9',

        'confidente_rating_meter_installation',
        'comment_10',

        'confidence_rating_meter_performance',
        'comment_11',

        'confidence_rating_client_telemetry_data_correct',
        'comment_12',
        'additional_comment_1',
        'additional_comment_2',

        'site_photo',
        'meter_photo',
        'meter_transmitter_photo',
        'cable_duct_photo',
        'chamber_photo',
        'additional_photo_1',
        'additional_photo_2',
        'additional_photo_3',
        'additional_photo_4',
        'fmv_sign_off',
        'client_sign_off',
        'file_upload_1',
        'additional_photo_5',
        'file_upload_2',
    ];
}
