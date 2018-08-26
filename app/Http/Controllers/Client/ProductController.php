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
use App\Collection;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index()
    {
        $list_1 = Product::where('categoryId', 1)->paginate(8);
        $list_2 = Product::where('categoryId', 2)->paginate(8);
        $list_3 = Product::where('categoryId', 3)->paginate(8);
        $list_4 = Product::where('categoryId', 4)->paginate(8);
        $list_5 = Product::where('categoryId', 5)->paginate(8);
        $collection_obj = Collection::paginate(3);
        return view('client.home', compact('list_1', 'list_2', 'list_3', 'list_4', 'list_5', 'collection_obj'));
    }

    public function getListProduct()
    {
        $categories = Category::where('status', 1)->get();
        $selected_categoryId = 0;
        $product_filter = Product::where('status', 1);
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $selected_categoryId = Input::get('categoryId');
            $product_filter = $product_filter->where('categoryId', $selected_categoryId);
        }
        $selected_category = Category::find($selected_categoryId);
        $list_product = $product_filter->orderBy('created_at', 'DESC')->paginate(100);
        return view('client.product-list')
            ->with('categories', $categories)
            ->with('list_product', $list_product)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('selected_category', $selected_category);
    }
}