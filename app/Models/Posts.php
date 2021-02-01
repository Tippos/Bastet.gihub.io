<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function getUser()
    {
        return $this->hasOne(Users::class, 'id', 'userId');
    }

    public function getComment()
    {
        return $this->hasOne(Comments::class, 'postId', 'id');
    }

    public function getUserFromComment()
    {
        return $this->hasManyThrough(Users::class, Comments::class, 'postId', 'id','id','userId');
    }

}
