<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Authenticable
{
    use HasFactory;
    
    protected $guard = 'admin';
    
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    
    protected $hidden = [
        'password',
    ];


}
