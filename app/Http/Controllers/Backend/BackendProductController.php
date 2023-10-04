<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductList;
use Illuminate\Http\Request;

class BackendProductController extends Controller
{
    public function p_category()
    {
        $products = Product::get()->all();
        return view('backend.products', compact('products'));
    }

    public function add_category(Request $request)
    {
        $products = new product;
        $products->category = $request->category;
        $products->description = $request->description;

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
        $products->delete();
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
        $category_update=$products->category;
        $products->category = $request->category;
        $products->description = $request->description;
        if($request->hasFile('image'))
        {
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/products/category',$imagename);
            $products->image=$imagename;
        }
        $products->save();
        $lists = ProductList::where('category',$category_update)->get()->all();
        
        foreach($lists as $list){
            echo $list;
            $list->category = $products->category;
            $id=$list->id;
            
            $list->save();
            echo $list;
        }
             
        return redirect()->route('backend.products');
    }
}
