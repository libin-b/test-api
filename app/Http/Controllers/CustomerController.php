<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers  = Customers::all();
        return json_encode($customers);
        // return view('customers.index')->with('customers',$customers );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_customer(Request $request)
    {

        try {

            $customers  = Customers::all();
            return json_encode($customers);
          
          } catch (\Exception $e) {
          
              return $e->getMessage();
          }

        
        // $customer = new Customers;
        // $customer->name = $request->name;
        // $customer->address = $request->address;
        // $customer->contact_no  = $request->contact_number;
        // $customer->gstno = $request->gst;
        // $customer->type = $request->type;
        // $customer->save();
        // return redirect()->back()->with('success','Customer Added successfully');

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
        $customer = Customers::find($id);
        return $customer;
        return view('customers.edit')->with('customer',$customer );
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
        $customer = Customers::find($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->contact_no  = $request->contact_number;
        $customer->gstno = $request->gstno;
        $customer->type = $request->type;
        $customer->save();
        return redirect("/customers");
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
