<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoLibrary extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date',
        'image_one',
        'image_two',
        'image_three',
    ];
}
