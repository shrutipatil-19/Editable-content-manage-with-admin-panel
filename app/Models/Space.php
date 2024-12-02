<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $fillable = ['space_title', 'space_description', 'space_image', 'space_price', 'space_amenities', 'space_btn_text', 'space_btn_link'];
}
