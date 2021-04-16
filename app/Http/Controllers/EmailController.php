<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\SendMailable;
use Mail;

class EmailController extends Controller
{
    public function index()
    {
        return response()->json(['success'=>1]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $email = $request->email;
        $bodycontent = $request->bodycontent;
        $objDemo = new \stdClass();
        $objDemo->email =  $email;
        $objDemo->bodycontent =  $bodycontent;
        Mail::to("thanhhoacth2013@gmail.com")->send(new SendMailable($objDemo));

        return response()->json(['success'=>true,'email'=>$email,'bodycontent'=>$bodycontent]);
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

}
