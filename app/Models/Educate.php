<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educate extends Model
{
    use HasFactory;
    protected $fillable = [
        'degree',
        'university',
        'start_date',
        'end_date',
        'description'
    ];
}
