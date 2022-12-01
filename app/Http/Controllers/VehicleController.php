<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicles;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles  =  Vehicles::all();
        return view('vehicles.index')->with('vehicles',$vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicles = new Vehicles;
        $vehicles->vehicle_no = $request->vehicle_no;
        $vehicles->feet = $request->feet;
        $vehicles->owner_name = $request->owner_name;
        $vehicles->renew_date = $request->renew_date;
        $vehicles->remarks = $request->remarks;
        $vehicles->save();
        return Redirect()->back()->with('success','Vehicle Added Successfully');
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
         $vehicles = Vehicles::find($id);
         return view('vehicles.edit')->with('vehicle',$vehicles);
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
        
        $vehicles = Vehicles::find($id);
        $vehicles->vehicle_no = $request->vehicle_no;
        $vehicles->feet = $request->feet;
        $vehicles->owner_name = $request->owner_name;
        $vehicles->renew_date = $request->renew_date;
        $vehicles->remarks = $request->remarks;
        $vehicles->save();
        return redirect("/vehicles")->with('success','Vehicle Update Successfully');
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
    
    
    public function getUnit(Request $request){
        $vehicle =  Vehicles::find($request->id);
        return $vehicle->feet;
        
    }
}
