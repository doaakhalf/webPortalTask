<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Customer extends  Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasFactory;
    protected $guard = 'customers';
    protected $fillable = [
        'name', 'email', 'password','website','email_verified_at'
    ];

    protected $hidden = [
        'password'
    ];
}
