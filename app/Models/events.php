<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'events_title',
        'events_description',
        'location',
        'start_date',
        'end_date',
        'guest_of_honor',
        'initial_description',
        'created_at',
        'updated_at',
    ];
}
