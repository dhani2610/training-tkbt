<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'province',
        'province_slug',
        'city',
        'city_slug',
        'district',
        'district_slug',
        'program_id',
        'excerpt',
        'content',
        'author',
        'read_time',
        'views_count',
        'featured_image',
        'is_featured',
        'is_published',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'read_time' => 'integer',
        'views_count' => 'integer',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
