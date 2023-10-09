<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackendRestaurantController extends Controller
{
    public function r_list()
    {
        $restaurants = User::where('usertype', '2')->get()->all();
        return view('backend.products', compact('restaurants'));
    }

    public function delete_restaurant($id)
    {
        $restaurants = User::find($id);
        $restaurant_image = $restaurants->image;
        $email = $restaurants->email;
        $restaurant_id = $restaurants->id;
        $restaurants->delete();
        $products = Product::where('email',$email)->where('restaurant_id', $restaurant_id)->get()->all();
        foreach($products as $product){
            $image_path = 'storage/'.$restaurant_image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $product->delete();
        }
        $productlists = ProductList::where('email',$email)->where('restaurant_id', $restaurant_id)->get()->all();
        foreach($productlists as $productlist){
            $productlist->delete();
        }
        return redirect()->back();
    }

    public function update_restaurant($id)
    {
        $restaurants = User::find($id);
        return view('backend.products', compact('restaurants'));
    }

    public function update_restaurant_confirm(Request $request, $id)
    {
        $restaurants = User::find($id);
        $restaurant_image = $restaurants->image;
        $email=$restaurants->email;
        $restaurant_id = $restaurants->id;
        $restaurants->name = $request->name;
        $restaurants->phone = $request->phone;
        $restaurants->email = $request->email;
        if($request->hasFile('image'))
        {
            $image_path = 'storage/'.$restaurant_image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/profile',$imagename);
            $restaurants->profile_pic=$imagename;
        }
        
        $restaurants->save();
        $products = Product::where('restaurant_id', $restaurant_id)->where('restaurant_email', $email)->get()->all();
        foreach($products as $product){
            $product->restaurant_email = $request->email;
            $product->save();
        }
        $lists = ProductList::where('restaurant_id', $restaurant_id)->where('restaurant_email', $email)->get()->all();
        foreach($lists as $list){
            $list->restaurant_email = $request->email;
            $list->save();
        }
        return redirect()->route('backend.restaurants');
    }
}
