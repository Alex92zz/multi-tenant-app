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
        Schema::create('meter_abort_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //tab 1
            $table->string('site_name')->nullable();
            $table->string('site_address')->nullable();
            $table->string('meter_name')->nullable();
            $table->string('reference_number')->nullable();
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
            $table->string('image_url')->nullable();
            $table->text('abort_reason')->nullable();

            //tab 2
            $table->text('comment')->nullable();
            $table->string('site_photo')->nullable();
            $table->string('mut_photo')->nullable();
            $table->string('transmitter_photo')->nullable();
            $table->string('mm1_mm2_photo')->nullable();
            $table->string('chamber_photo')->nullable();
            $table->string('additional_photo')->nullable();
            $table->mediumText('signature')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_abort_reports');
    }
};
