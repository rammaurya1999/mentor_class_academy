<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_image',
        'user_name',
        'user_city',
        'user_function',
        'user_summary',
        'Status',
        'hash_key',
        'user_password',
        'user_password_md'
        
    ];
    protected $table = 'tbl_user';
}
