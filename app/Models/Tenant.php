<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'theme',
        'membership',
    ];

    public function websiteGeneralSettings()
    {
        return $this->hasOne(WebsiteGeneralSettings::class);
    }

    public function homePageBlock()
    {
        return $this->hasOne(HomePageBlock::class);
    }

    
}
