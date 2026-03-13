<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'url',                      // important for SEO / friendly URL
        'name',
        'front_image',
        'short_description',
        'meta_title',
        'meta_description',
        'commissioning_description',   // long rich text description
        'scope_section',               // array → numbered scope steps
        'process_section',             // array → why professional installation cards (with svg)
        'stats_section',               // array → dynamic counters (500+, 30+, etc.)
    ];

    protected $casts = [
        'scope_section'     => 'array',
        'process_section'   => 'array',
        'stats_section'     => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}