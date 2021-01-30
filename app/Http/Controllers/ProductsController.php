<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getListProduct(){
        $list_pr = Products::all();
        return view('listProduct',compact('list_pr'));
    }
}
