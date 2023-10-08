<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendRestaurantDashboardController extends Controller
{
    public function index()
    {
        return view('backend.restaurants');
    }

    public function category()
    {
        $restaurant_email = Auth::user()->email;
        $products = Product::where('restaurant_email', $restaurant_email)->get()->all();
        return view('backend.restaurants', compact('products'));
    }

    public function category_add(Request $request)
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
        return redirect()->back()->with('message', 'Successfully created category.');
    }

    public function category_update(Request $request, $id)
    {
        $products = Product::find($id);
        $email=$products->restaurant_email;
        $restaurant_id = $products->restaurant_id;
        $product_category=strtolower($products->category);
        $products->category = strtolower($request->category);
        $products->restaurant_email = $request->restaurant_email;
        $products->restaurant_id = $request->restaurant_id;
        
        $products->description = $request->description;
        if($request->hasFile('image'))
        {
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

        return redirect()->back()->with('message', 'Successfully updated.');
    }

    public function category_delete($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with('message', 'Successfully deleted.');
    }

    public function item()
    {
        $restaurant_email = Auth::user()->email;
        $lists = ProductList::where('restaurant_email', $restaurant_email)->get()->all();
        $categorylists = Product::get()->all();
        return view('backend.restaurants', compact('lists','categorylists'));
    }

    public function item_add(Request $request)
    {
        $lists = new productlist;
        $lists->name = $request->name;
        $lists->description = $request->description;
        $lists->price = $request->price;
        $lists->category = strtolower($request->category);
        $lists->restaurant_email = $request->restaurant_email;
        $lists->restaurant_id = $request->restaurant_id;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/products/list',$imagename);
        $lists->image = $imagename;
        $lists->save();
        return redirect()->back()->with('message', 'Successfully created item');
    }

    public function item_update(Request $request, $id)
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
        return redirect()->back()->with('message', 'Successfully updated item.');
    }

    public function item_delete($id)
    {
        $lists = ProductList::find($id);
        $lists->delete();
        return redirect()->back()->with('message', 'Successfully deleted item');
    }

    public function new_order()
    {
        $restaurant_email = Auth::user()->email;
        $delivery_status = 'accepted';
        $orders = Order::where('restaurant_email', $restaurant_email)->where('delivery_status', $delivery_status)->get()->all();
        return view('backend.restaurants', compact('orders'));
    }

    public function new_order_update(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->delivery_status = $request->delivery_status;
        $orders->save();
        return redirect()->back();
    }

    public function delivered_order()
    {
        $restaurant_email = Auth::user()->email;
        $delivery_status = 'delivered';
        $orders = Order::where('restaurant_email', $restaurant_email)->where('delivery_status', $delivery_status)->get()->all();
        return view('backend.restaurants', compact('orders'));
    }

    public function cancel_order()
    {
        $restaurant_email = Auth::user()->email;
        $delivery_status = 'cancelled';
        $orders = Order::where('restaurant_email', $restaurant_email)->where('delivery_status', $delivery_status)->get()->all();
        return view('backend.restaurants', compact('orders'));
    }
}
