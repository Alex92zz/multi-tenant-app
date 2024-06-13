<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'tenant_id', // Include tenant_id in fillable array
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
