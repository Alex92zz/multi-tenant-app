<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_description',
        'hero',
        'about_us',
        'gallery',
        'testimonials',
        'logos',
        'tenant_id', // Include tenant_id in fillable array
    ];

    protected $casts = [
        'hero' => 'array',
        'about_us' => 'array',
        'gallery' => 'array',
        'testimonials' => 'array',
        'logos' => 'array',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
