<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctaSections extends Model
{
    use HasFactory;
    protected $fillable = ['cta_title', 'cta_description', 'cta_button_text', 'cta_button_link'];
}
