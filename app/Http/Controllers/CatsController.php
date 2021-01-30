<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function getListCat(){
        $list_cat = Cats::all();
        return view('listCat',compact('list_cat'));
    }
}
