<?php

// app/Models/AboutUs.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Make the fields fillable
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'features',
    ];

    // Cast the features field to an array (since it's stored as JSON)
    protected $casts = [
        'features' => 'array',
    ];
}

