<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class EmailController extends Controller
{
    public function mail()
    {
        $user = Auth::user();
        return view('mail/email', compact('user'));
    }

    public function sendMail(Request $request)
    {
        $user=Auth::user();
        $data = [
            'content' => $request->cont,
            'name' => $request->name,
        ];
        Mail::send('mail/formEmail', $data, function ($message) use ($request) {
            $message->from($request->emailAddress,$request->name);
            $message->to('nguyenmanhtien3091999@gmail.com', 'Nguyễn Mạnh Tiến');
            $message->subject($request->title);
        });
        return redirect()->route('mail')->with('key','Đã gửi Mail');
    }
}
