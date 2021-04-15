<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Users as Authenticatable;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'Users';
    protected $fillable = [
        'userName',
        'password',
    ];
}
