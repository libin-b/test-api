<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::id();
        $items = Item::where('company_id',$id)->orderBy('description', 'ASC')->get();
        
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $item = new Item;
        $item->company_id = $id;
         $item->item_name = $request->item_name;
        $item->current_stock = $request->current_stock;
        $item->unit_price = $request->unit_price;
        $item->hsn_code = $request->hsn_code;
        $item->gst = $request->GST;
        $item->description = $request->description;
        $item->unit = $request->unit;
        $item->save();
        
        return redirect('/items')->with('success','Item Added !');
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
        $item = Item::find($id);
        
        return view('items.edit')->with('item',$item);
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
         $Cid = Auth::id();
        $item = Item::find($id);
        $item->company_id = $Cid;
         $item->item_name = $request->item_name;
        $item->current_stock = $request->current_stock;
        $item->unit_price = $request->unit_price;
        $item->hsn_code = $request->hsn_code;
        $item->description = $request->description;
        $item->unit = $request->unit;
        $item->save();
        
        return redirect('/items')->with('success','Item Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        
        return redirect('/items')->with('success','Item Deleted !');
    }
    
    
    public function get_item(Request $request){
        $item = Item::find($request->item_id);
        
        return $item;
    }
}
