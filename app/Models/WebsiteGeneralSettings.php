<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteGeneralSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_url',
        'icon_url',
        'company_name',
        'phone_number',
        'email',
        'address',
        'facebook',
        'instagram',
        'tenant_id',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
