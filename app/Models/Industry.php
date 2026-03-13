<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\IndCategory;

class Industry extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "industry";

    protected $fillable = [
        'title',
        'image',
        'url',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(IndCategory::class, 'category_id');
    }
}