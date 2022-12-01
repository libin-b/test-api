<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Item;
use App\Order;
use App\OrderItem;
use Auth;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::join('customers','orders.customer_id','=','customers.c_id')->get();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customers::all();
        $items = Item::all();
        $order_no = DB::table('numbers')->find(1);
        return view('orders.create',compact('customers','items','order_no'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $order = new Order;
        $order->order_no = $request->order_no;
        $order->date = $request->date;
        $order->customer_id = $request->customer_id;
        $order->discount = $request->discount;
        $order->amount = $request->amount;
        $order->user_id = $user_id;
        $order->save();
        if(count($request->item_id) > 0){
            for($i=0 ; $i < count($request->item_id) ; $i++){
                $item = new OrderItem;
                $item->item_id = $request->item_id[$i];
                $item->qty = $request->qty[$i];
                $item->item_amount = $request->item_amount[$i];
                $item->order_id = $order->o_id;
                $item->user_id = $user_id;
                $item->save();
            }
        }

        
        $order_no = DB::table('numbers')->limit(1)->update([
            'order_no' => $request->order_no + 1
        ]);
        
        return redirect()->back()->with('success','Order added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::join('customers','orders.customer_id','=','customers.c_id')->find($id);
        $order_items = OrderItem::join('items','order_items.item_id','=','items.id')->where('order_id',$id)->get();

        $customers = Customers::all();
        $items = Item::all();
        return view('orders.show',compact('order','order_items','customers','items'));
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
        //
    }
}
