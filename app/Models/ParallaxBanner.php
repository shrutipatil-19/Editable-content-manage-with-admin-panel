<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParallaxBanner extends Model
{
    use HasFactory;
    protected $fillable = ['parallax_image', 'parallax_heading', 'parallax_btn_text', 'parallax_btn_link'];
}
