<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    
    protected $fillable = [
     'phone varchar',
     'likedin',
     'github_profile',
    'stackoverflow',     
     'whatsapp',
     'twitter',
     'facebook',
     'twitch'
    ];
}
