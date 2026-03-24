<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arms extends Model
{
     use HasFactory;
    protected $table = "arm";
    protected $fillable = [
    'name',
];
}
