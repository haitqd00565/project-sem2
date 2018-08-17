<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Http\Requests\StoreCollectionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConllectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Collection::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('admin.collection.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collection.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectionRequest $request)
    {
        $request->validated();

        $obj = new Collection();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->save();
        Session::flash('message', 'Thêm mới thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/collection');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Collection::find($id);
        if ($obj == null){
            return response()->json(['message'=>'Category không tồn tịa hoặc đã bị xóa!'],404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message'=>'Đã xóa thông tin danh mục!'],200);
    }
}
