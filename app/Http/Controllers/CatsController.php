<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function Composer\Autoload\includeFile;


class CatsController extends Controller
{
    public function getListCat(Request $request)
    {
        $key = $request->key;
        if ($key == 1)
            $list_cat = Cats::all()->sortBy('name');
        else if ($key == 2)
            $list_cat = Cats::all()->sortByDesc('name');
        else if ($key == 3)
            $list_cat = Cats::all()->sortBy('weightCat');
        else if ($key == 4)
            $list_cat = Cats::all()->sortByDesc('weightCat');
        else
            $list_cat = Cats::all();
        return view('user/listCat', compact('list_cat'));
    }

    public function getCat(Request $request)
    {
        $key = $request->key;
        if ($key == 1)
            $list_cat = Cats::where('class', '=', '1')->orderBy('name', 'asc')->paginate(5);
        else if ($key == 2)
            $list_cat = Cats::where('class', '=', '1')->orderBy('name', 'desc')->paginate(5);
        else if ($key == 3)
            $list_cat = Cats::where('class', '=', '1')->orderBy('weightCat', 'desc')->paginate(5);
        else if ($key == 4)
            $list_cat = Cats::where('class', '=', '1')->orderBy('weightCat', 'desc')->paginate(5);
        else
            $list_cat = Cats::where('class', '=', '1')->orderBy('created_at', 'asc')->paginate(5);
        return response()->json($list_cat);
    }

    public function findId($id)
    {
        try {
            $c = Cats::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin/cat/upCat', compact('c'));
    }

    public function addCat(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required",
            "description" => "required"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $image = $request->image;
            $image->move('img/image-cat', $image->getClientOriginalName());
            $add_cat = new Cats();
            $add_cat->name = $request->name;
            $add_cat->form = $request->form;
            $add_cat->image = '/img/image-cat/' . $image->getClientOriginalName();

            $add_cat->description = $request->description;
            $add_cat->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return redirect()->route('adminCat')->with('key', 'Add Completed');
    }

    public function upCat(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "image" => "required",
            "description" => "required"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $image = $request->image;
            $image->move('img/image-cat', $image->getClientOriginalName());
            $up_cat = Cats::find($id);
            $up_cat->name = $request->name;
            $up_cat->form = $request->form;
            $up_cat->image = '/img/image-cat/' . $image->getClientOriginalName();
            $up_cat->description = $request->description;
            $up_cat->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return redirect()->route('adminCat')->with('key', 'Updated');
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
        return redirect()->route('adminCat')->with('key', 'Deleted');
    }

    //Search
    public function find(Request $request)
    {
        $key = $request->key;
        $list_cat = Cats::where("name", "like", "%" . $key . "%")->get();
        return view('admin/cat/adminCat', compact('list_cat'), compact('key'));
    }
}
