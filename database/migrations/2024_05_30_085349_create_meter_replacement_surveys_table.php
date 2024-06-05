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
        Schema::create('meter_replacement_surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //tab 1
            $table->string('site_name')->nullable();
            $table->string('site_address')->nullable();
            $table->string('meter_name')->nullable();
            $table->string('fmv_reference_number')->nullable();
            $table->string('field_team')->nullable();
            $table->string('site_manager')->nullable();
            $table->string('site_manager_email')->nullable();
            $table->string('site_contact_name')->nullable();
            $table->string('site_contact_number')->nullable();
            $table->string('site_contact_email')->nullable();
            $table->boolean('client_site_or_network')->nullable();
            $table->string('w3w')->nullable();
            $table->string('gps')->nullable();
            $table->string('grid_ref')->nullable();
            $table->boolean('tma')->nullable();
            $table->boolean('confined_spaces')->nullable();
            $table->boolean('2_person_lift_cover')->nullable();
            
            $table->text('abort_reason')->nullable();

            //extra 
            $table->string('site_reference')->nullable();
            $table->string('telemetry_reference')->nullable();
            $table->enum('chamber_flooded', ['Yes', 'No', 'N/A'])->nullable();

            $table->string('chamber_length')->nullable();
            $table->string('chamber_width')->nullable();
            $table->string('chamber_depth')->nullable();
            $table->string('is_client_access_required')->nullable();
            $table->string('keys')->nullable();

            $table->string('image_url')->nullable();
            $table->string('video_of_new_meter_and_pipework')->nullable();
            $table->string('video_of_new_transmitter')->nullable();
            $table->string('site_sketch')->nullable();


            //tab 2
            $table->string('flow_measurment_device_type')->nullable();
            $table->enum('meter_manufacturer', ['Flexim', 'Panametrics', 'Siemens', 'ABB', 'Senapsis', 'Other'])->nullable();
            $table->string('manufacturer_other')->nullable();
            $table->string('manufacturer_other_make_model')->nullable();
            $table->string('manufacturer_other_serial_number')->nullable();
            $table->string('transmitter_serial_number')->nullable();
            $table->string('flow_range')->nullable();
            $table->string('signal_output')->nullable();
            $table->string('supply_voltage')->nullable();
            $table->string('cable_length')->nullable();
            $table->string('meter_chamber_location')->nullable();
            $table->string('barcode')->nullable();
            $table->string('meter_transmitter_model')->nullable();
            $table->string('meter_transmitter_sn')->nullable();
            $table->string('meter_transmitter_location')->nullable();
            $table->string('meter_installed_orientation')->nullable();
            $table->string('meter_size')->nullable();
            $table->string('pipe_diameter')->nullable();
            $table->string('number_of_bolts')->nullable();
            $table->string('bolt_length')->nullable();
            $table->string('output_signal_pulsed_setup')->nullable();
            $table->string('output_signal_ma_range')->nullable();
            $table->string('earthing_cable_present')->nullable();
            $table->string('earthing_bonding_present')->nullable();
            $table->string('calibration_offset_in_meter')->nullable();
            $table->string('barcode_2')->nullable();

            $table->string('image_url_2')->nullable();
            $table->string('image_url_3')->nullable();
            $table->string('image_url_4')->nullable();
            $table->string('image_url_5')->nullable();

            //tab 3
            $table->boolean('application_suitable_for_meter_installation')->nullable();
            $table->enum('new_meter_installation_recommendations', ['ultrasonic', 'emag', 'other'])->nullable();
            $table->enum('flange_adapter_pipe_fittings_requirements', ['ultrasonic', 'emag', 'other'])->nullable();


            $table->string('meter_photo')->nullable();

            $table->boolean('on_site_volumetric_comparison_available')->nullable();

            $table->enum('meter_verification_point_available', ['Yes', 'No', 'N/A'])->nullable();

            $table->string('image_url_6')->nullable();

            $table->enum('new_meter_verification_required', ['Yes', 'No', 'N/A'])->nullable();


            // NEEDS MORE DATA I STOPPED BECAUSE I DIDN't HAD TIME

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_replacement_surveys');
    }
};
