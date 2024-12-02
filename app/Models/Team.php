<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Add the fields you want to allow mass assignment for
    protected $fillable = [
        'name', 
        'title', 
        'image_url', 
        'facebook_url', 
        'instagram_url', 
        'twitter_url', 
        'linkedin_url',
    ];

    // Other model methods and relationships can go here
}