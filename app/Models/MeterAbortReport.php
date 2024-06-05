<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterAbortReport extends Model
{
    use HasFactory;



    protected $fillable = [
        //tab 1
        'user_id',
        'site_name',
        'site_address',
        'meter_name',
        'reference_number',
        'field_team',
        'site_manager',
        'site_manager_email',
        'site_contact_name',
        'site_contact_number',
        'site_contact_email',
        'client_site_or_network',
        'w3w',
        'gps',
        'grid_ref',
        'tma',
        'confined_spaces',
        '2_person_lift_cover',
        'image_url',
        'abort_reason',

        //tab 2
        'comment',
        'site_photo',
        'mut_photo',
        'transmitter_photo',
        'mm1_mm2_photo',
        'chamber_photo',
        'additional_photo',
        'signature',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
