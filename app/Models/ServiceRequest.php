<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'service_requests';
    protected $fillable = [
        'name',
        'company_name',
        'contact',
        'email',
        'state',
        'city',
        'message',
    ];
}