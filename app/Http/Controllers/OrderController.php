<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.order.list')->with('list_obj', $list_obj);
    }

    public function getChartDataApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date .' 00:00:00', $end_date . ' 23:59:59'))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        return $chart_data;
    }


    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/admin/order');
    }

//    public function destroy($id)
//    {
//        $obj = Order::find($id);
//        if ($obj == null) {
//            return response()->json(['message' => 'Bộ sưu tập không tồn tại hoặc đã bị xóa'], 404);
//        }
//        $obj->status = -1;
//        $obj->save();
//        return response()->json(['message' => 'Xóa bộ sưu tập thành công']);
//    }

}
