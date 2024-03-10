<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'name',
        'image',
        'biography',
        'phone_no',
        'office_no',
        'status',
        'start_date',
        'end_date'
    ];
}
