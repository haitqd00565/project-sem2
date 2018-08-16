<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Category::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('admin.category.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $obj = new Category();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->save();
        Session::flash('message', 'Thêm mới thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Category::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('404');
        }
        return view('admin.category.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $obj = Category::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('404');
        }
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->save();
        Session::flash('message', 'Sửa thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Category không tồn tại hoặc đã bị xoá!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin danh mục'], 200);
    }
}