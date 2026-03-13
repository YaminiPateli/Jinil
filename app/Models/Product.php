<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "product";

    protected $fillable = [
        'title',
        'url',
        'name',
        'front_image',
        'short_description',
        'meta_title',
        'meta_description',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}