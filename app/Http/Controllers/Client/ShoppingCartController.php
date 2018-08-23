<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 8:43 PM
 */

namespace App\Http\Controllers\Client;


use App\CartItem;
use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ShoppingCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function demoTransaction()
    {
        $cate1 = new Category();
        $cate2 = new Category();
        $cate1->name = 'Cate1';
        $cate1->description = 'Description';
        $cate1->thumbnail = 'Hi';
        $cate2->name = 'Cate2';
        $cate2->description = 'Description';
        $cate2->thumbnail = 'Hi2';
        DB::beginTransaction();
        try {
            $cate1->save();
            $cate2->save();
            DB::rollBack();
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back();
        }
    }

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
        // validate quantity.
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
        Session::remove('cart');
    }

    public function checkoutCart()
    {
        if (Session::has('cart')) {
            try {
                DB::beginTransaction();
                $shopping_cart = Session::get('cart');
                $ship_name = Input::get('ship_name');
                $ship_address = Input::get('ship_address');
                $ship_phone = Input::get('ship_phone');
                $order = new Order();
                $order->customer_id = 1;
                $order->ship_name = $ship_name;
                $order->ship_address = $ship_address;
                $order->ship_phone = $ship_phone;
                $order->total_price = 0;
                $order->save();
                $order_id = $order->id;
                $order_details = array();
                foreach ($shopping_cart->items as $item) {
                    $product = Product::find($item->product->id);
                    if ($product == null || $product->status != 1) {
                        return view('error.404');
                    }
                    $quantity = $item->quantity;
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order_id;
                    $order_detail->product_id = $product->id;
                    $order_detail->quantity = $quantity;
                    $order_detail->unit_price = $product->discountPrice;
                    $order->total_price += $order_detail->unit_price * $order_detail->quantity;
                    $order_detail->save();
                    array_push($order_details, $order_detail);
                }
                $order->save();
                DB::commit();
                // clear session cart.
                Session::remove('cart');
                // send mail or sms.
                return view('client.order-success')->with('order', $order)->with('order_details', $order_details);
            } catch (\Exception $exception) {
                DB::rollBack();
                return 'Có lỗi xảy ra.' . $exception->getMessage();
            }

        } else {
            return redirect('/danh-sach-san-pham')->with('message', 'Hiện tại chưa có sản phẩm nào trong giỏ hàng.');
        }
    }
}