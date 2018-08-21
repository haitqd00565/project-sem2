<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 6:56 PM
 */

namespace App\Http\Controllers\Client;


use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $selected_categoryId = 0;
        $product_filter = Product::where('status', 1);
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $selected_categoryId = Input::get('categoryId');
            $product_filter = $product_filter->where('categoryId', $selected_categoryId);
        }
        $selected_category = Category::find($selected_categoryId);
        $list_product = $product_filter->orderBy('created_at', 'DESC')->get();
        return view('customer.listProduct')
            ->with('categories', $categories)
            ->with('list_product', $list_product)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('selected_category', $selected_category);
    }
}