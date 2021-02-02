<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    public function addCmt(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "comment" => "required|string",
            "userId" => "required|integer",
            "postId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $add_cmt = new Comments();
            $add_cmt->comment = $request->comment;
            $add_cmt->userId = $request->userId;
            $add_cmt->postId = $request->postId;
            $add_cmt->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd("add completed");
    }

    public function upCmt(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "comment" => "required|string",
            "userId" => "required|integer",
            "postId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_cmt = Comments::find($id);
            $up_cmt->comment = $request->comment;
            $up_cmt->userId = $request->userId;
            $up_cmt->postId = $request->postId;
            $up_cmt->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd("update completed");
    }

    public function delCmt($id)
    {
        try {
            $del_cmt = Comments::find($id);
            $del_cmt->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd("Delete completed");
    }
}
