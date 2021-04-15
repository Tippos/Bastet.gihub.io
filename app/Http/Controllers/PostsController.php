<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function getListPost()
    {
        $list_post = Posts::all()->sortByDesc('created_at');
        return view('admin-page/page/listPost', compact('list_post'));
    }
    // tra ve view standard
    public function getPost()
    {
        $list_post = Posts::all()->sortByDesc('created_at');
        return view('standard/listPostDetail', compact('list_post'));
    }

    public function addPostStandard(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required",
            "description" => "required",
            "rate" => "required|integer",
            "userId" => "required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $image = $request->image;
            $image->move('img/img-post', $image->getClientOriginalName());
            $add_post = new Posts();
            $add_post->name = $request->name;
            $add_post->image = '/img/img-post/' . $image->getClientOriginalName();
            $add_post->description = $request->description;
            $add_post->rate = $request->rate;
            $add_post->userId = $request->userId;
            $add_post->save();

        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return redirect()->route('homeStandard');
    }

    public function addPost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required",
            "description" => "required",
            "rate" => "required|integer",
            "userId" => "required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $image = $request->image;
            $image->move('img/img-post', $image->getClientOriginalName());
            $add_post = new Posts();
            $add_post->name = $request->name;
            $add_post->image = '/img/img-post/' . $image->getClientOriginalName();
            $add_post->description = $request->description;
            $add_post->rate = $request->rate;
            $add_post->userId = $request->userId;
            $add_post->save();

        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return redirect()->route('home');
    }

    public function upPost(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required|url",
            "description" => "required",
            "rate" => "required|integer",
            "userId" => "required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_post = Posts::find($id);
            $up_post->name = $request->name;
            $up_post->image = $request->image;
            $up_post->description = $request->description;
            $up_post->rate = $request->rate;
            $up_post->userId = $request->userId;
            $up_post->save();

        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Update Completed');
    }

    public function delPost($id)
    {
        try {
            $del_post = Posts::find($id);
            $del_post->delete();

        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Delete Completed');
    }
}
