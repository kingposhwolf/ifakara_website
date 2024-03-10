<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sermon extends Model
{
    use HasFactory;
    protected $fillable = [
        'sermons_title',
        'video',
        'utube_link',
        'name'
    ];
}
