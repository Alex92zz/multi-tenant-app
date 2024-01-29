<?php

namespace App\Models;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'priority'] ;

    public static function boot()
    {
        parent::boot();

        self::created(function() {
            event(new PostCreated());
        });
    }

}
