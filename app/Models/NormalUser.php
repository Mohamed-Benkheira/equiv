<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NormalUser extends Authenticatable
{
    use HasFactory;

    // Specify the table associated with the model if it's not the default 'normal_users'
    protected $table = 'normal_users';

    // The attributes that are mass assignable
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'password',
        'nationality',
    ];

    // Add any necessary relationships or custom methods here
}
