<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'categry_id', 'first_name', 'last_name', 'gender', 'email',
        'tell', 'address', 'building', 'detail', 'created_at', 'updated_at'
    ];
}
