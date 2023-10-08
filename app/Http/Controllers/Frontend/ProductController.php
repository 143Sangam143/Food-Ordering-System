<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function restaurant_list()
    {
        $restaurants = User::where('usertype', '2')->get()->all();
        return view('frontend.products', compact('restaurants'));
    }
    public function p_category($id)
    {
        $restaurants = User::find($id);
        $restaurant_id = $restaurants->id;
        $restaurant_email = $restaurants->email;
        $products = Product::where('restaurant_id', $restaurant_id)->where('restaurant_email', $restaurant_email)->get()->all();
        return view('frontend.products', compact('products'));
    }

    public function list($id)
    {
        $products = Product::find($id);
        $restaurant_id = $products->restaurant_id;
        $restaurant_email = $products->restaurant_email;
        $category = $products->category;
        $lists = ProductList::where('category',$category)->where('restaurant_id', $restaurant_id)->where('restaurant_email', $restaurant_email)->get()->all();
        if(Cart::exists()){
            $addCarts = Cart::get()->all();
        }
        else{
            $addCarts = 0;
        }
        if(!$lists){
            return redirect()->route('restaurants')->with('message', 'products will be avialable soon');
        }
        return view('frontend.products', compact('lists', 'category', 'addCarts'));
    }

    public function cart(Request $request, $id){
        $lists = ProductList::find($id);
        $restaurant_email = $lists->restaurant_email;
        $category = $lists->category;
        $addCarts = Cart::get()->all();
        if(Cart::exists()){
            $name = $request->name;
            $user_email = Auth::user()->email;
            if(Cart::where('item_name', $name)->where('user_email', $user_email)->where('restaurant_email', $restaurant_email)->exists()){
                return redirect()->back();
            }
            else{
                $carts = new Cart;
                $carts->item_name = $request->name;
                $carts->item_image = $request->image;
                $carts->price = $request->price;
                $carts->quantity = $request->quantity;
                $carts->restaurant_email = $request->restaurant_email;
                $carts->user_email = $request->user_email;
                $carts->save();
                return redirect()->back();
            }
        }
        else{

            $carts = new Cart;
            $carts->item_name = $request->name;
            $carts->item_image = $request->image;
            $carts->price = $request->price;
            $carts->quantity = $request->quantity;
            $carts->restaurant_email = $request->restaurant_email;
            $carts->user_email = $request->user_email;
            $carts->save();
            return redirect()->back();
        }
        
    }

    public function cartlist(){
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        return view('frontend.products', compact('carts'));
    }

    public function cartlist_delete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function cartlist_delete_name($name)
    {
        $cart = Cart::where('item_name',$name);
        $cart->delete();
        return redirect()->back();
    }

    public function cartlist_delete_all()
    {
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        foreach($carts as $cart){
            $cart->delete();
        }
        
        return redirect()->back()->with('message', 'removed all item from cart successfully');
    }

    public function cartlist_update_quantity(Request $request, $id)
    {
        $quantity = Cart::find($id);
        $quantity->quantity = $request->quantity;
        $quantity->save();
        return redirect()->back();
    }

    public function order()
    {
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        $orders = Order::get()->all();
        foreach($carts as $cart){
            if($orders){
                foreach($orders as $order){
                    $orderlists = Order::where('item_name', $cart->item_name)->where('restaurant_email', $cart->restaurant_email)->where('user_email', $cart->user_email)->get()->all();
                    if($orderlists){
                        foreach($orderlists as $orderlist){
                            $orderlist->quantity = $cart->quantity;
                            $orderlist->save();
                        }
                    }
                    else{
                        $order = new Order;
                        $order->item_name = $cart->item_name;
                        $order->item_image = $cart->item_image;
                        $order->price = $cart->price;
                        $order->quantity = $cart->quantity;
                        $order->restaurant_email = $cart->restaurant_email;
                        $order->user_email = $cart->user_email;
                        $order->delivery_status = 'accepted';
                        $order->save();
                    }
                }
            }
            else{
                $order = new Order;
                $order->item_name = $cart->item_name;
                $order->item_image = $cart->item_image;
                $order->price = $cart->price;
                $order->quantity = $cart->quantity;
                $order->restaurant_email = $cart->restaurant_email;
                $order->user_email = $cart->user_email;
                $order->delivery_status = 'accepted';
                $order->save();
            }
        }
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect()->back();

    }
}
