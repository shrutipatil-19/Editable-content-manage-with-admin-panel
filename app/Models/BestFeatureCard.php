<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestFeatureCard extends Model
{
    use HasFactory;
    protected $fillable =  ['title','description','image_url','link'];
}
