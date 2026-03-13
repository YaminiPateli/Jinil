<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "clientel";

    protected $fillable = [
        'title',
        'image',
    ];
}
