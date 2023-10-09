<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackendProductListController extends Controller
{
    public function p_list($id)
    {
        // $products = Product::where('id', $id)->get('category');
        // echo $products;
        $productDetails = Product::find($id);
        $category_name = strtolower($productDetails->category);
        $email = $productDetails->restaurant_email;
        $restaurant_id = $productDetails->restaurant_id;
        $lists = ProductList::where('category', $category_name)->where('restaurant_id', $restaurant_id)->where('restaurant_email', $email)->get()->all();
        return view('backend.products', compact('lists', 'category_name', 'email', 'restaurant_id'));
    }

    public function add_list(Request $request)
    {
        $lists = new productlist;
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->price = $request->price;
        $lists->category = strtolower($request->category);
        $lists->restaurant_email = $request->restaurent_email;
        $lists->restaurant_id = $request->restaurant_id;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/products/list',$imagename);
        $lists->image = $imagename;
        $lists->save();
        return redirect()->back()->with('message', 'List created successfully');
    }

    public function delete_list($id)
    {
        $lists = productlist::find($id);
        $list_image = $lists->image;
        $image_path = 'images/backend/products/list/'.$list_image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $lists->delete();
        return redirect()->back();
    }

    public function update_list($id)
    {
        $lists = productlist::find($id);
        $category_name = strtolower($lists->category);
        return view('backend.products', compact('lists', 'category_name'));
    }

    public function update_list_confirm(Request $request, $id)
    {
        $lists = productlist::find($id);
        $list_image = $lists->image;
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->price = $request->price;
        if($request->hasFile('image'))
        {
            $image_path = 'images/backend/products/list/'.$list_image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/products/list',$imagename);
            $lists->image=$imagename;
        }
        $lists->save();
        return redirect()->route('backend.restaurants');
    }
}
