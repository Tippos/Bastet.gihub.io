<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Products;
use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //admin
    public function game()
    {
        $user = Auth::user();
        return view('flappy', compact('user'));
    }

    public function getAdmin()
    {

        return view('admin-page/admin/admin');

    }

    public function inforAdmin()
    {
        $user = Auth::user();
        return view('admin-page/admin/infor/inforAdmin', compact('user'));
    }

    public function getUser($id)
    {
        $user = Users::find($id);
        return view('standard/userDetail', compact('user'));
    }
    public function getUserAdmin($id)
    {
        $user = Users::find($id);
        return view('admin-page/page/userDetail', compact('user'));
    }
    public function getAdminUser(Request $request)
    {
        $key = $request->key;
        if ($key == 1)
            $list_user = Users::where("role", "=", ROLE_USER_ADMIN)->orderBy('fullName', 'asc')->paginate(5);
        else if ($key == 2)
            $list_user = Users::where("role", "=", ROLE_USER_ADMIN)->orderBy('fullName', 'desc')->paginate(5);
        else if ($key == 3)
            $list_user = Users::where("role", "=", ROLE_USER_ADMIN)->orderBy('birthday', 'asc')->paginate(5);

        else if ($key == 4)
            $list_user = Users::where("role", "=", ROLE_USER_ADMIN)->orderBy('birthday', 'desc')->paginate(5);
        else
            $list_user = Users::where("role", "=", ROLE_USER_ADMIN)->orderBy('created_at', 'asc')->paginate(5);
        return response()->json($list_user);
    }

    public function getStandardUser(Request $request)
    {
        $key = $request->key;
        if ($key == 1)
            $list_user = Users::where("role", "=", ROLE_USER_STANDARD)->orderBy('fullName', 'asc')->paginate(5);
        else if ($key == 2)
            $list_user = Users::where("role", "=", ROLE_USER_STANDARD)->orderBy('fullName', 'desc')->paginate(5);
        else if ($key == 3)
            $list_user = Users::where("role", "=", ROLE_USER_STANDARD)->orderBy('birthday', 'asc')->paginate(5);

        else if ($key == 4)
            $list_user = Users::where("role", "=", ROLE_USER_STANDARD)->orderBy('birthday', 'desc')->paginate(5);
        else
            $list_user = Users::where("role", "=", ROLE_USER_STANDARD)->orderBy('created_at', 'asc')->paginate(5);
        return response()->json($list_user);
    }

    public function updateUserPage($id)
    {
        try {
            $user = Users::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('standard/update/upUser', compact('user'));
    }
    public function updateUserPageAdmin($id)
    {
        try {
            $user = Users::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin-page/page/update/upUser', compact('user'));
    }
    public function findId($id)
    {
        try {
            $user = Users::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin-page/admin/user/upUser', compact('user'));
    }

    public function addUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "userName" => "required|min:2|max:10",
            "fullName" => "required|min:2|max:25",
            "birthday" => "integer",
            "email" => "required",
            "phoneNumber" => "required",
            "job" => "required|min:4|max:20",
            "avatar" => "required",
            "facebook" => "required|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:30",
            "role" => "integer",
            "status" => "integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            // Xu ly anh
            $avatar = $request->avatar;
            $avatar->move('img/image-page', $avatar->getClientOriginalName());

            $add_us = new Users();
            $add_us->userName = $request->userName;
            $add_us->password = Hash::make($request->password);
            $add_us->fullName = $request->fullName;
            $add_us->birthday = $request->birthday;
            $add_us->email = $request->email;
            $add_us->phoneNumber = $request->phoneNumber;
            $add_us->job = $request->job;
            $add_us->avatar = '/img/image-page/' . $avatar->getClientOriginalName();
            $add_us->facebook = $request->facebook;
            $add_us->gender = $request->gender;
            $add_us->country = $request->country;
            $add_us->role = $request->role;
            $add_us->status = $request->status;
            $add_us->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($add_us->role == ROLE_USER_ADMIN)
            return redirect()->route('adminUser')->with('key', 'Add Completed');
        if ($add_us->role == ROLE_USER_STANDARD)
            return redirect()->route('standardUser')->with('key', 'Add Completed');
    }

    public function regisUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "userName" => "required|min:2|max:10",
            "fullName" => "required|min:2|max:25",
            "birthday" => "integer",
            "email" => "required",
            "phoneNumber" => "required",
            "job" => "required|min:4|max:20",
            "avatar" => "required",
            "facebook" => "required|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:30",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            // Xu ly anh
            $avatar = $request->avatar;
            $avatar->move('img/image-page', $avatar->getClientOriginalName());

            $add_us = new Users();
            $add_us->userName = $request->userName;
            $add_us->password = Hash::make($request->password);
            $add_us->fullName = $request->fullName;
            $add_us->birthday = $request->birthday;
            $add_us->email = $request->email;
            $add_us->phoneNumber = $request->phoneNumber;
            $add_us->job = $request->job;
            $add_us->avatar = '/img/image-page/' . $avatar->getClientOriginalName();
            $add_us->facebook = $request->facebook;
            $add_us->gender = $request->gender;
            $add_us->country = $request->country;

            $add_us->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return redirect()->route('getAuthLogin')->with('message', 'Tạo tài khoản thành công!!!');
    }

    public function upUser(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "userName" => "required|min:2|max:10",
            "fullName" => "required|min:2|max:25",
            "birthday" => "required|integer",
            "email" => "required",
            "phoneNumber" => "required",
            "job" => "required|min:4|max:20",
            "avatar" => "required",
            "facebook" => "required|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:30",
            "role" => "required|integer",
            "status" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $avatar = $request->avatar;
            $avatar->move('img/image-page', $avatar->getClientOriginalName());

            $up_us = Users::find($id);
            $up_us->userName = $request->userName;
            $up_us->password = Hash::make($request->password);
            $up_us->fullName = $request->fullName;
            $up_us->birthday = $request->birthday;
            $up_us->email = $request->email;
            $up_us->phoneNumber = $request->phoneNumber;
            $up_us->job = $request->job;
            $up_us->avatar = '/img/image-page/' . $avatar->getClientOriginalName();
            $up_us->facebook = $request->facebook;
            $up_us->gender = $request->gender;
            $up_us->country = $request->country;
            $up_us->role = $request->role;
            $up_us->status = $request->status;
            $up_us->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($up_us->role == ROLE_USER_ADMIN)
            return redirect()->route('adminUser')->with('key', 'Updated');
        if ($up_us->role == ROLE_USER_STANDARD)
            return redirect()->route('standardUser')->with('key', 'Updated');
    }

    //Update user standard
    public function upUserPage(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "userName" => "required|min:2|max:10",
            "fullName" => "required|min:2|max:25",
            "password" => "required",
            "avatar" => "required",

        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $us=Auth::user();

            $avatar = $request->avatar;
            $avatar->move('img/image-page', $avatar->getClientOriginalName());
            $user = Users::find($id);
            $user->userName = $request->userName;
            $user->password = Hash::make($request->password);
            $user->fullName = $request->fullName;
            $user->birthday = $us->birthday;
            $user->email = $us->email;
            $user->phoneNumber = $us->phoneNumber;
            $user->job = $us->job;
            $user->avatar = '/img/image-page/' . $avatar->getClientOriginalName();
            $user->facebook = $us->facebook;
            $user->gender = $us->gender;
            $user->country = $us->country;
            $user->role = $us->role;
            $user->status = $us->status;
            $user->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
       return view('standard/userDetail',compact('user'));
    }
    //update user admin
    public function upUserPageAdmin(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "userName" => "required|min:2|max:10",
            "fullName" => "required|min:2|max:25",
            "password" => "required",
            "avatar" => "required",

        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $us=Auth::user();

            $avatar = $request->avatar;
            $avatar->move('img/image-page', $avatar->getClientOriginalName());
            $user = Users::find($id);
            $user->userName = $request->userName;
            $user->password = Hash::make($request->password);
            $user->fullName = $request->fullName;
            $user->birthday = $us->birthday;
            $user->email = $us->email;
            $user->phoneNumber = $us->phoneNumber;
            $user->job = $us->job;
            $user->avatar = '/img/image-page/' . $avatar->getClientOriginalName();
            $user->facebook = $us->facebook;
            $user->gender = $us->gender;
            $user->country = $us->country;
            $user->role = $us->role;
            $user->status = $us->status;
            $user->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin-page/page/userDetail',compact('user'));
    }
    public function delUser($id)
    {
        try {

            $del_us = Users::find($id);
            $check = $del_us->role;
            $del_us->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($check == ROLE_USER_ADMIN)
            return redirect()->route('adminUser')->with('key', 'Deleted');
        if ($check == ROLE_USER_STANDARD)
            return redirect()->route('standardUser')->with('key', 'Deleted');
    }

    public function find(Request $request)
    {
        $key = $request->key;
        $list_user = Users::where("fullName", "like", "%" . $key . "%")->get();
        return view('admin-page/admin/user/findUser', compact('list_user'), compact('key'));
    }


    public function getAuthLogin()
    {
        return view('log/login');
    }

    public function postAuthLogin(Request $request)
    {
        $arr = [
            'userName' => $request->userName,
            'password' => $request->password,
        ];
        $userName = $request->userName;

        $user = Users::where("userName", "=", $userName)->first();

        if (Auth::attempt($arr)) {
            if ($user->role == ROLE_USER_ADMIN) {
                return redirect()->route('home')->with('key', 'Đăng nhập thành công');
            }
            if ($user->role == ROLE_USER_STANDARD) {
                return redirect()->route('homeStandard')->with('key', 'Đăng nhập thành công');
            }
        } else {
            return redirect()->route('getAuthLogin')->with('key', 'Đăng nhập thất bại. Kiểm tra lại Tên Đăng Nhập hoặc Mật Khẩu');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('getAuthLogin');
    }

}

