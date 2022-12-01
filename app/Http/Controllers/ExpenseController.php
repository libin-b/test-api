<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseHeads;
use App\Expenses ; 
use Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
     public function searchExpense(Request $request){
         
         
         
         if(Auth::user()->role == 'ACCOUNT'){
             
            $expenses  =  Expenses::join('expense_heads','expenses.head_id','=','expense_heads.eh_id');
        }else{
            $expenses  =  Expenses::join('expense_heads','expenses.head_id','=','expense_heads.eh_id');//->where('gst_bill','1');
        }
        
        if($request->from &&  $request->to){
              $expenses = ($expenses)->whereBetween('expenses.date',array($request->from,$request->to));
         }
         if($request->head_id){
              $expenses = ($expenses)->where('expenses.head_id','=',$request->head_id);
         }
        
         $expenses = ($expenses)->get();
         
        // return $expenses;
         $heads  =  ExpenseHeads::all();
        return view('expenses.index')->with('expenses',$expenses)->with('heads',$heads);
         
     }
    public function index()
    {
        if(Auth::user()->role == 'ACCOUNT'){
            $expenses  =  Expenses::join('expense_heads','expenses.head_id','=','expense_heads.eh_id')->where('expenses.date',date('Y-m-d'))->get();
        }else{
            $expenses  =  Expenses::join('expense_heads','expenses.head_id','=','expense_heads.eh_id')->where('expenses.date',date('Y-m-d'))->get();//->where('gst_bill','1')->get();
        }
        
         $heads  =  ExpenseHeads::all();
        return view('expenses.index')->with('expenses',$expenses)->with('heads',$heads);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $heads  =  ExpenseHeads::all();
        return view('expenses.create')->with('heads',$heads);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction   = new Expenses ; 
         $transaction->date   = $request->date;
         $transaction->head_id = $request->head;
         $transaction->amount =  $request->amount;
         $transaction->remarks =   $request->remarks;
         $transaction->gst_bill = $request->gst_bill;
         $transaction->save();
         return redirect('/expenses')->with('success','Expense added successfully');
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
         $heads  =  ExpenseHeads::all();
         $expense  =  Expenses::join('expense_heads','expenses.head_id','=','expense_heads.eh_id')->find($id);
        return view('expenses.edit')->with('heads',$heads)->with('expense',$expense);
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
        $transaction   = Expenses::find($id) ; 
         $transaction->date   = $request->date;
         $transaction->head_id = $request->head;
         $transaction->amount =  $request->amount;
         $transaction->remarks =   $request->remarks;
         $transaction->save();
         return redirect('/expenses');
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
