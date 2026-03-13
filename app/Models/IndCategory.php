<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "indcategory";

    protected $fillable = [
        'indcategory',
        'cat_description',
        'url',
    ];
}
