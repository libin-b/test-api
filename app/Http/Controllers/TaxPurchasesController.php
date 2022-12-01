<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\tax_purchases;
use App\Vendor;
class TaxPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $purchases = tax_purchases::join('vendors','tax_purchases.vendor_id','=','vendors.v_id');
        if($request->from && $request->to) {
            $purchases = ($purchases)->whereBetween('date',array($request->from , $request->to)); 
        }
        $purchases = ($purchases)->get();
         return view('tax_purchases.index')->with('purchases',$purchases);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Vendor = Vendor::All();
       return view('tax_purchases.create')->with('vendors',$Vendor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tax_purchases =  new tax_purchases;
        $tax_purchases->date = $request->date;
        $tax_purchases->bill_no = $request->bill_no;
        $tax_purchases->vendor_id = $request->vendor_id;
        $tax_purchases->taxable = $request->taxable;
        $tax_purchases->sgst = $request->sgst;
        $tax_purchases->cgst = $request->cgst;
        $tax_purchases->igst = $request->igst;
         $tax_purchases->total_amount = $request->total_amount;
        $tax_purchases->save();
        return redirect('/tax_purchases');
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
        $tax_purchases =  tax_purchases::join('vendors','tax_purchases.vendor_id','=','vendors.v_id')->find($id);
        $Vendor = Vendor::All();
       return view('tax_purchases.edit')->with('vendors',$Vendor)->with('pur',$tax_purchases);
        
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
         $tax_purchases =  tax_purchases::find($id);
         $tax_purchases->date = $request->date;
        $tax_purchases->bill_no = $request->bill_no;
        $tax_purchases->vendor_id = $request->vendor_id;
        $tax_purchases->taxable = $request->taxable;
        $tax_purchases->sgst = $request->sgst;
        $tax_purchases->cgst = $request->cgst;
        $tax_purchases->igst = $request->igst;
         $tax_purchases->total_amount = $request->total_amount;
        $tax_purchases->save();
        return redirect('/tax_purchases');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
