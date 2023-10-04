<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Illuminate\Http\Request;

class BackendProductListController extends Controller
{
    public function p_list($category)
    {
        $products = $category;
        $lists = ProductList::where('category',$category)->get()->all();
        return view('backend.products', compact('lists', 'products'));
    }

    public function add_list(Request $request)
    {
        $lists = new productlist;
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->price = $request->price;
        $lists->category = $request->category;
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
        $lists->delete();
        return redirect()->back();
    }

    public function update_list($id)
    {
        $lists = productlist::find($id);
        $products = $lists->category;
        return view('backend.products', compact('lists', 'products'));
    }

    public function update_list_confirm(Request $request, $id)
    {
        $lists = productlist::find($id);
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->price = $request->price;
        if($request->hasFile('image'))
        {
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/products/list',$imagename);
            $lists->image=$imagename;
        }
        $lists->save();
        return redirect()->route('backend.products');
    }
}
