<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'url',
        'name',
        'front_image',
        'short_description',
        'meta_title',
        'meta_description',
        'scope_section',
        'whychoose_section',
        'process_section'
    ];

    protected $casts = [
        'scope_section' => 'array',
        'whychoose_section' => 'array',
        'process_section' => 'array',
    ];
    public function category()
    {   
        return $this->belongsTo(ServiceCategory::class,'category_id');
    }
}