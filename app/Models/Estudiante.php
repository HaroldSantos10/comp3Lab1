<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    static $rules = [
        'name' => 'required|string|min:3',
        'age' => 'required|integer|min:1',
        'nota' => 'required|numeric|min:0|max:10',

    ];

    protected $perPage = 5;

}
