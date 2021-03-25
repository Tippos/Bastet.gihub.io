<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Posts;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatsController extends Controller
{
    public function getListCat()
    {
        $list_cat = Cats::all();
        return view('user/listCat', compact('list_cat'));
    }
    public function adminGetList()
    {
        $list_cat = Cats::all();
        return view('admin/adminCat', compact('list_cat'));
    }

    public function addCat(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required|url",
            "description" => "required"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $add_cat = new Cats();
            $add_cat->name = $request->name;
            $add_cat->form = $request->form;
            $add_cat->image = $request->image;
            $add_cat->description = $request->description;
            $add_cat->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd("add completed");
    }

    public function upCat(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required|url",
            "description" => "required"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_cat = Cats::find($id);
            $up_cat->name = $request->name;
            $up_cat->form = $request->form;
            $up_cat->image = $request->image;
            $up_cat->description = $request->description;
            $up_cat->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd("Update completed");
    }

    public function delCat($id)
    {
        try {
            $del_cat = Cats::find($id);
            $del_cat->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Delete Completed');
    }
}
