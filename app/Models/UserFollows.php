<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFollows extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'leader_id'
    ];
}
