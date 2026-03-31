<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classuser extends Model
{
    use HasFactory;
    protected $table = "class_user";
    protected $fillable = [
    'subject',
    'class_id',
    'user_id',
];
}
