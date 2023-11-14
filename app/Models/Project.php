<?php

namespace App\Models;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = ['category_id', 'title', 'slug', 'content', 'description', 'thumbnail', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6',] ;

    public static function boot()
    {
        parent::boot();

        self::created(function() {
            event(new PostCreated());
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}


