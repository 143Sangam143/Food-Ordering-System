<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductList;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
        $category = $lists->category;
        $addCarts = Cart::get()->all();
        if(Cart::exists()){
            $name = $request->name;
            if(Cart::where('item_name', $name)->exists()){
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
        $carts = Cart::get()->all();
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

    public function cartlist_update_quantity(Request $request)
    {
        $quantity = $request->get('quantity');
    }
}
