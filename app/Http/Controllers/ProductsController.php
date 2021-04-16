<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use voku\helper\ASCII;
use function Composer\Autoload\includeFile;


class ProductsController extends Controller
{
    public function getListProduct()
    {
        $user=Auth::user();
        $list_pr = Products::paginate(9);
        return view('admin-page/page/listProduct', compact('list_pr'),compact('user'));
    }

    public function getFoodStore()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 1)->get();
        return view('admin-page/page/store/storeFood', compact('list_pr'),compact('user'));
    }

    public function getToyStore()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 2)->get();
        return view('admin-page/page/store/storeToy', compact('list_pr'),compact('user'));
    }

    public function getMedicineStore()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 3)->get();
        return view('admin-page/page/store/storeMedicine', compact('list_pr'),compact('user'));
    }
    //Standard page
    public function getListProductStandard()
    {
        $user=Auth::user();
        $list_pr = Products::paginate(9);
        return view('standard/listProduct', compact('list_pr'),compact('user'));
    }

    public function getFoodStoreStandard()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 1)->get();
        return view('standard/store/storeFood', compact('list_pr'),compact('user'));
    }

    public function getToyStoreStandard()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 2)->get();
        return view('standard/store/storeToy', compact('list_pr'),compact('user'));
    }

    public function getMedicineStoreStandard()
    {
        $user=Auth::user();
        $list_pr = Products::where("class", "=", 3)->get();
        return view('standard/store/storeMedicine', compact('list_pr'),compact('user'));
    }

    public function getFood(Request $request)
    {
        $key=$request->key;
        if ($key == 1)
            $list_pr_food = Products::where("class", "=", 1)->orderBy('name','asc')->paginate(5);
        else if ($key == 2)
            $list_pr_food = Products::where("class", "=", 1)->orderBy('name','desc')->paginate(5);
        else if ($key == 3)
            $list_pr_food = Products::where("class", "=", 1)->orderBy('cost','asc')->paginate(5);

        else if ($key == 4)
            $list_pr_food = Products::where("class", "=", 1)->orderBy('cost','desc')->paginate(5);
        else
            $list_pr_food = Products::where("class", "=", 1)->orderBy('created_at','asc')->paginate(5);
        return response()->json($list_pr_food);
    }

    public function getToy(Request $request)
    {

        $key=$request->key;
        if ($key == 1)
            $list_pr_toy = Products::where("class", "=", 2)->orderBy('name','asc')->paginate(5);
        else if ($key == 2)
            $list_pr_toy = Products::where("class", "=", 2)->orderBy('name','desc')->paginate(5);
        else if ($key == 3)
            $list_pr_toy = Products::where("class", "=", 2)->orderBy('cost','asc')->paginate(5);

        else if ($key == 4)
            $list_pr_toy = Products::where("class", "=", 2)->orderBy('cost','desc')->paginate(5);
        else
            $list_pr_toy = Products::where("class", "=", 2)->orderBy('created_at','asc')->paginate(5);
        return response()->json($list_pr_toy);
    }

    public function getMedicine(Request $request)
    {
        $key=$request->key;
        if ($key == 1)
            $list_pr_m = Products::where("class", "=", 3)->orderBy('name','asc')->paginate(5);
        else if ($key == 2)
            $list_pr_m = Products::where("class", "=", 3)->orderBy('name','desc')->paginate(5);
        else if ($key == 3)
            $list_pr_m = Products::where("class", "=", 3)->orderBy('cost','asc')->paginate(5);

        else if ($key == 4)
            $list_pr_m = Products::where("class", "=", 3)->orderBy('cost','desc')->paginate(5);
        else
            $list_pr_m = Products::where("class", "=", 3)->orderBy('created_at','asc')->paginate(5);
        return response()->json($list_pr_m);
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
            $image = $request->image;
            $image->move('img/image-product', $image->getClientOriginalName());
            $add_pr = new Products();
            $add_pr->name = $request->name;
            $add_pr->description = $request->description;
            $add_pr->image = '/img/image-product/' . $image->getClientOriginalName();
            $add_pr->cost = $request->cost;
            $add_pr->class = $request->class;
            $add_pr->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
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

// tim ID de sua doi
    public function findId($id)
    {
        try {
            $p = Products::find($id);;
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        return view('admin-page/admin/product/upProduct', compact('p'));
    }

    public function upProduct(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:20",
            "description" => "required",
            "image" => "required",
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
            $image = $request->image;
            $image->move('img/image-product', $image->getClientOriginalName());

            $up_pr->name = $request->name;
            $up_pr->description = $request->description;
            $up_pr->image = '/img/image-product/' . $image->getClientOriginalName();
            $up_pr->cost = $request->cost;
            $up_pr->class = $request->class;
            $up_pr->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //page not found
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
            return response()->json([], SC_QUERRY_ERROR); //page not found
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
        return view('admin-page/admin/product/finder', compact('arr'), compact('key'));
    }
}
