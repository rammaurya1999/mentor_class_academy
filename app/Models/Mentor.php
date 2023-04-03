<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = [
        'mentor_name',
        'mentor_email',
        'mentor_password',
        'mentor_phone_number',
        'mentor_address',
        'mentor_function',
        'mentor_image',
        'Status',
        
        
    ];
    protected $table = 'tbl_mentor';
}
