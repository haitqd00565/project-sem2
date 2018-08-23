<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 8:43 PM
 */

namespace App\Http\Controllers\Client;


use App\CartItem;
use App\Http\Controllers\Controller;
use App\Product;
use App\ShoppingCart;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function addToCart()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return view('error.404');// làm trang lỗi 400, bad request.
        }
        $product = Product::find($id);
        if ($product == null || $product->status != 1) {
            return view('error.404');
        }

        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
            if (array_key_exists($id, $shopping_cart->items)) {
                $quantity += $shopping_cart->items[$id]->quantity;
            }
        }
        $item = new CartItem();
        $item->product = $product;
        $item->quantity = $quantity;
        $shopping_cart->items[$id] = $item;
        Session::put('cart', $shopping_cart);
        return redirect('/xem-gio-hang');
    }

    public function removeFromCart()
    {

    }

    public function showCart()
    {
        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
        }
        return view('client.shopping-cart')->with('shopping_cart', $shopping_cart);
    }

    public function updateCart()
    {
        $shopping_cart = new ShoppingCart();
        $products = Input::get('products');
        if (is_array($products)) {
            foreach (array_keys($products) as $key) {
                $product = Product::find($key);
                if ($product == null || $product->status != 1) {
                    return view('error.404');
                }
                $item = new CartItem();
                $item->product = $product;
                $item->quantity = $products[$key];
                $shopping_cart->items[$key] = $item;
            }
        }
        Session::put('cart', $shopping_cart);
        return redirect('/xem-gio-hang');
    }

    public function destroyCart()
    {
        Session::flush();
    }

    public function checkoutCart()
    {
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
            foreach ($shopping_cart->items as $item){

            }
        }else{
            return redirect('/xem-gio-hang');
        }
    }
}