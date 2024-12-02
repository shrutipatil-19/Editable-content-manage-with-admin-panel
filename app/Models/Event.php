<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow the Laravel convention
    protected $table = 'events';

    // If you have columns that aren't mass assignable, specify the ones that are
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    // You can also define other relationships or methods as needed
}
