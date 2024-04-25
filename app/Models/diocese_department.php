<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diocese_department extends Model
{
    protected $table = 'diocese_department';
    
    use HasFactory;

    protected $fillable = [
        'name',
        'head',
        'location',
        'description',
        'staffs'
    ];
}
