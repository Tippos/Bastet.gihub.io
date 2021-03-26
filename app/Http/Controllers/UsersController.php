<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Users;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function getUser($id)
    {
        $user = Users::find($id);
        return view('user/userDetail', compact('user'));
    }

    public function getUserAdmin()
    {
        $list_user = Users::all();
        return view('admin/user/adminUser', compact('list_user'));
    }

    public function getUserStandard()
    {
        $list_user = Users::all();
        return view('admin/user/adminStandard', compact('list_user'));
    }

    public function findId($id)
    {
        try {
            $user = Users::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin/user/upUser', compact('user'));
    }

    public function addUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
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
            // Xu ly anh
            $avatar = $request->avatar;
            $avatar->move('img/image-user', $avatar->getClientOriginalName());

            $add_us = new Users();
            $add_us->fullName = $request->fullName;
            $add_us->birthday = $request->birthday;
            $add_us->email = $request->email;
            $add_us->phoneNumber = $request->phoneNumber;
            $add_us->job = $request->job;
            $add_us->avatar = '/img/image-user/' . $avatar->getClientOriginalName();
            $add_us->facebook = $request->facebook;
            $add_us->gender = $request->gender;
            $add_us->country = $request->country;
            $add_us->role = $request->role;
            $add_us->status = $request->status;
            $add_us->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
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

    public function upUser(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
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
            $avatar->move('img/image-user', $avatar->getClientOriginalName());

            $up_us = Users::find($id);
            $up_us->fullName = $request->fullName;
            $up_us->birthday = $request->birthday;
            $up_us->email = $request->email;
            $up_us->phoneNumber = $request->phoneNumber;
            $up_us->job = $request->job;
            $up_us->avatar = '/img/image-user/' . $avatar->getClientOriginalName();
            $up_us->facebook = $request->facebook;
            $up_us->gender = $request->gender;
            $up_us->country = $request->country;
            $up_us->role = $request->role;
            $up_us->status = $request->status;
            $up_us->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
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

    public function delUser($id)
    {
        try {

            $del_us = Users::find($id);
            $check = $del_us->role;
            $del_us->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
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
        return view('admin/user/findUser', compact('list_user'), compact('key'));
    }

}

