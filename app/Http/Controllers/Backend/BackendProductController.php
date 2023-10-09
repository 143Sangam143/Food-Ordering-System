<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackendProductController extends Controller
{
    public function p_category($id)
    {
        $restaurants = User::find($id);
        $emails = $restaurants->email;
        $restaurant_id = $restaurants->id;
        $products = Product::where('restaurant_email', $emails)->get()->all();
        return view('backend.products', compact('products', 'emails', 'restaurant_id'));
    }

    public function add_category(Request $request)
    {
        $products = new product;
        $products->category = strtolower($request->category);
        $products->description = $request->description;
        $products->restaurant_email = $request->restaurant_email;
        $products->restaurant_id =$request->restaurant_id;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/products/category',$imagename);
        $products->image = $imagename;
    
        $products->save();
        return redirect()->back()->with('message', 'Category created');

    }

    public function delete_category($id)
    {
        $products = product::find($id);
        $category_image = $products->image;
        $email = $products->restaurant_email;
        $restaurant_id = $products->restaurant_id;
        $category = strtolower($products->category);
        $products->delete();
        $image_path = 'images/backend/products/category/'.$category_image; 
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $productlists = ProductList::where('category', $category)->where('restaurant_id', $restaurant_id)->where('restaurant_email', $email)->get()->all();
        foreach($productlists as $productlist){
            $list_image = $productlist->image;
            $productlist->delete();
            $image_path = 'images/backend/products/list/'.$list_image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        return redirect()->back();
    }

    public function update_category($id)
    {
        $products = product::find($id);
        return view('backend.products', compact('products'));
    }

    public function update_category_confirm(Request $request, $id)
    {
        $products = product::find($id);
        $category_image = $products->image;
        $email=$products->restaurant_email;
        $restaurant_id = $products->restaurant_id;
        $product_category=strtolower($products->category);
        $products->category = strtolower($request->category);
        $products->restaurant_email = $request->restaurant_email;
        $products->restaurant_id = $request->restaurant_id;
        
        $products->description = $request->description;
        if($request->hasFile('image'))
        {
            $image_path = 'images/backend/products/category/'.$category_image; 
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/products/category',$imagename);
            $products->image=$imagename;
        }
        $products->save();
        $lists = ProductList::where('category',$product_category)->where('restaurant_id', $restaurant_id)->where('restaurant_email', $email)->get()->all();
        foreach($lists as $list){
            $list->category = strtolower($request->category);
            $list->save();
        }
        return redirect()->route('backend.restaurants');
    }
}
