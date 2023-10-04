<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function p_category()
    {
        $products = Product::get()->all();
        return view('frontend.products', compact('products'));
    }

    public function list($category)
    {
        $lists = ProductList::where('category',$category)->get()->all();
        if(Cart::exists()){
            $addCarts = Cart::get()->all();
        }
        else{
            $addCarts = 0;
        }
        if(!$lists){
            return redirect()->route('frontend.products')->with('message', 'products will be avialable soon');
        }
        return view('frontend.products', compact('lists', 'category', 'addCarts'));
    }

    public function cart(Request $request, $category){
        $lists = ProductList::where('category', $category)->get()->all();
        $addCarts = Cart::get()->all();
        if(Cart::exists()){
            $name = $request->name;
            if(Cart::where('item_name', $name)->exists()){
                return view('frontend.products', compact('lists','category', 'addCarts'));
            }
            else{
                $carts = new Cart;
                $carts->item_name = $request->name;
                $carts->item_image = $request->image;
                $carts->price = $request->price;
                $carts->quantity = $request->quantity;
                $carts->save();
                return view('frontend.products', compact('lists','category', 'addCarts'));
            }
        }
        else{

            $carts = new Cart;
            $carts->item_name = $request->name;
            $carts->item_image = $request->image;
            $carts->price = $request->price;
            $carts->quantity = $request->quantity;
            $carts->save();
            return view('frontend.products', compact('lists','category', 'addCarts'));
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
