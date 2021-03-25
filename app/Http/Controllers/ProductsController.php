<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Validator;
use voku\helper\ASCII;
use function Composer\Autoload\includeFile;

class ProductsController extends Controller
{
    public function getListProduct()
    {
        $list_pr = Products::all();
        return view('user/listProduct', compact('list_pr'));
    }

    public function getFood()
    {
        $list_pr_food = Products::all();
        return view('admin/menuFood', compact('list_pr_food'));
    }

    public function getToy()
    {
        $list_pr_toy = Products::all();
        return view('admin/menuToy', compact('list_pr_toy'));
    }

    public function getMedicine()
    {
        $list_pr_m = Products::all();
        return view('admin/menuMedicine', compact('list_pr_m'));
    }

    public function addProduct(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "description" => "required",
            "image" => "required",
            "cost" => "required|integer",
            "class" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $add_pr = new Products();
            $add_pr->name = $request->name;
            $add_pr->description = $request->description;
            $add_pr->image = $request->image;
            $add_pr->cost = $request->cost;
            $add_pr->class = $request->class;
            $add_pr->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($add_pr->class == 1)
            return redirect()->route('food')->with('key', 'ADD Completed ');
        else if ($add_pr->class == 2)
            return redirect()->route('toy')->with('key', 'ADD Completed');
        else if ($add_pr->class == 3)
            return redirect()->route('medicine')->with('key', 'ADD Completed');


    }

    public function findId($id)
    {
        try {
            $p = Products::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin/upProduct', compact('p'));
    }

    public function upProduct(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "description" => "required",
            "image" => "required|url",
            "cost" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_pr = Products::find($id);
            $up_pr->name = $request->name;
            $up_pr->description = $request->description;
            $up_pr->image = $request->image;
            $up_pr->cost = $request->cost;
            $up_pr->class = $request->class;
            $up_pr->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($up_pr->class == 1)
            return redirect()->route('food')->with('key', 'Updated ');
        else if ($up_pr->class == 2)
            return redirect()->route('toy')->with('key', 'Updated');
        else if ($up_pr->class == 3)
            return redirect()->route('medicine')->with('key', 'Updated');

    }

    public function delProduct($id)
    {
        try {
            $del_pr = Products::find($id);
            $check = $del_pr->class;
            $del_pr->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        if ($check == 1)
            return redirect()->route('food')->with('key', 'Deleted ');
        else if ($check == 2)
            return redirect()->route('toy')->with('key', 'Deleted');
        else if ($check == 3)
            return redirect()->route('medicine')->with('key', 'Deleted');
    }

    public function find(Request $request)
    {
        $key = $request->key;
        $arr = Products::where("name", "like", "%" . $key . "%")->get();
        return view('admin/finder', compact('arr'), compact('key'));
    }
}
