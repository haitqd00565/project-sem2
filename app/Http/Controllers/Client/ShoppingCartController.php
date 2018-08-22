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
        if ($product == null || $product->status!=1) {
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
        return view('customer.cart')->with('shopping_cart', $shopping_cart);
    }

    public function updateCart()
    {

    }

    public function destroyCart()
    {
        Session::flush();
    }

    public function checkoutCart()
    {

    }
}