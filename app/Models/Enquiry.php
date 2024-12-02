<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'enquiries';  // This is optional as Laravel will assume 'contacts' by default

    // Define which fields are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'event_type', // Ensure this field matches the form input 'event-type'
    ];
}
