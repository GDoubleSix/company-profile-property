<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'profil',
        'instam_account',
        'twitter_account',
        'facebook_account',
        'linkedin_account'
    ];
}
