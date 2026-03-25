<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychomotor extends Model
{
    use HasFactory;
    protected $table = "psychomotor";
    protected $fillable = [
        'punctuality',
        'neatness',
        'leadership,',
        'demeanor',
        'honesty',
        'friendliness',
        'obedience',
        'selfcontrol',
        'cooperation',
        'attentiveness',
        'initiative',
        'organisation',
        'perseverance',
        'fluency',
        'sports',
        'cultural',
        'technical',
        'labour',
        'attendance'
    ];
}


