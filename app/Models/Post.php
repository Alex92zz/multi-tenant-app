<?php

namespace App\Models;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['category_id', 'title', 'slug', 'content', 'description', 'keywords', 'is_published', 'thumbnail'];

    public static function boot()
    {
        parent::boot();

        self::created(function() {
            event(new PostCreated());
        });
    }


    // Function to save uploaded thumbnail and return the path
    public function saveThumbnail($file)
    {
        if ($file) {
            $path = Storage::disk('public')->put('thumbnails', $file);
            $this->thumbnail = $path;
            $this->save();
            return $path;
        }
        return null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
