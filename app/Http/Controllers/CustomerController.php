<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\User;
use Illuminate\Support\Facades\Http;

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
        return view('customers.index')->with('customers',$customers );
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
    public function store(Request $request)
    {
        // return "hi";
        // $token = Str::random(60);
        // $response = $client->request('POST', 'http://127.0.0.1:8080/api/customers/store', [
        //     'headers' => [
        //         'Authorization' => 'Bearer '.$token,
        //         'Accept' => 'application/json',
        //     ],
        // ]);
        $token = '1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ';
        $response = Http::withToken($token)->asForm()->post('http://127.0.0.1:8080/api/customers/store', [
            'name' => 'test',
        ]);
        return $response;


        // $customer = new Customers;
        // $customer->name = $request->name;
        // $customer->address = $request->address;
        // $customer->contact_no  = $request->contact_number;
        // $customer->gstno = $request->gst;
        // $customer->type = $request->type;
        // $customer->save();
        // $user= User::where('email', 'admin@gmail.com')->first();
        // $token = $user->createToken('my-app-token')->plainTextToken;        
        // $token = '1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ';
        // $request->headers->set('Authorization' , 'Bearer '.$token);
        // return redirect()->away('http://127.0.0.1:8080/api/customers/',302,  [
        //     'Authorization' => 'Bearer '.$token,
        //     'Accept' => 'application/json',
        // ]);

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
