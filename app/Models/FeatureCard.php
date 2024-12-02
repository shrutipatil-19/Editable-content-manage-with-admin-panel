<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureCard extends Model
{
    use HasFactory;
    protected $fillable = ['icon', 'FeatureCardHeading', 'FeatureCardDescription'];
}
