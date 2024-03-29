<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['id',
        'first_name',
        'last_name',
        'age',
        'dob',
        'email',
        'created_at',
        'updated_at',
    ];

}
