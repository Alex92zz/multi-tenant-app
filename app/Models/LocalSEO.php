<?php

namespace App\Models;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalSEO extends Model
{
    use HasFactory;

    protected $table = 'local_seo'; // Specify the table name

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'category',
        'category_slug',
        'location',
        'created_at',
        'updated_at',
        'page_description',
        'header_text',
        'about_us_green_subtitle',
        'about_us_paragraph',
    ];
    
    public static function boot()
    {
        parent::boot();

        self::created(function() {
            event(new PostCreated());
        });
    }


    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
