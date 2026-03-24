<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
    'studentid',
    'surname',
    'othername',
    'parent',
    'clas',
    'gender',
    'division',
    'house',
    'dob',
    'states',
    'lga',
    'place_of_birth',
    'passport',
    'parent_address',
    'parent_phone',
];
}
