<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getListPost()
    {
        $list_post = Posts::all();
        return view('listPost', compact('list_post'));
    }

}
