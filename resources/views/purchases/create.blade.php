 
@extends('layouts.side')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card card-primary">
            @if(session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="fas fa-check-circle"></i>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Add Purchase</h3>
            </div>
            <form action="{{route('purchases.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Bill</label>
                            <input type="number" class="form-control" name="order_no" value="{{$order_no->order_no}}" id="exampleInputEmail1" readonly="" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" name="date" id="exampleInputEmail1"  required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Customer</label>
                            <select name="customer_id" class="form-control" required>
                                <option value="" hidden></option>
                                @foreach($customers as $customer)
                                    <option value="{{$customer->c_id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="container col-md-12">
                            <div class="table-responsive">
                                <!-- <h4></h4> -->
                                <table class="table table-bordered" id="item_table">
                                    <thead>
                                    <tr>
                                        <th class="col-md-3">Item</th>
                                        <!-- <th >Rate</th> -->
                                        <th >Qty</th>
                                        <th >Amount</th>
                                        <th >#</th>
                                    </tr>
                                    </thead>
                                    <tbody id="items">
                            
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-md btn-success"
                            id="addBtn2" type="button">
                                +
                            </button>
                            <br>
                        </div>
                        <!-- <div class="col-md-2" style="padding-top:30px; ">
                            <h4> :</h4><h4 id="">0</h4>
                        </div> -->
                    
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Discount</label>
                            <input type="text" class="form-control" name="discount" id="exampleInputEmail1"  >
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Total Amount</label>
                            <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="" >
                        </div>        
                    </div> 
                    
                </div>      
                    <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id='reload' class="btn btn-primary">Submit</button>
                </div>
                
                </div>
            </form>
        </div>
    </div>
</div>


  

<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>

<script>
	$(document).ready(function () {
	    
	    
	    var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = yyyy+"-"+mm+"-"+dd;
        $('#txtDate').val(today);
	    
    	// Denotes total number of rows
    	var rowIdx = 0;
    	$('#addBtn2').on('click', function () {
	        $('#items').append(`<tr id="R${++rowIdx}">
    			<td class="row-index text-center">
                    <select class="form-control select2" name="item_id[]" placeholder=""  required id="item`+rowIdx+`" >
                      <option hidden value=""></option>
                       @if(count($items) > 0) 
                         @foreach($items as $item)
                            <option value="{{$item->id}}">{{$item->item_name}}</option>
                         @endforeach
                    @endif
                  </select>
    			</td>
    			<td class="text-center">
    			    <input type="text" class="form-control" name="qty[]" placeholder="" id="qty`+rowIdx+`"  required  >
    			</td>
    			
    			<td class="text-center">
                    <input type="text" class="form-control" name="item_amount[]" id="amount`+rowIdx+`"  required  >
    			</td>
    			
    			<td class="text-center">
    				<button class="btn btn-danger remove"
    				type="button" >-</button>
    				</td>
    			</tr>`);
    			 $('.select2').select2()
    	});
    
    	// jQuery button click event to remove a row.
    	$('#items').on('click', '.remove', function () {
    		var child = $(this).closest('tr').nextAll();
    	
    		child.each(function () {
    		var id = $(this).attr('id');
    		var idx = $(this).children('p');
    		var dig = parseInt(id.substring(1));
    		idx.html(`Row ${dig - 1}`);
    		$(this).attr('id', `R${dig - 1}`);
    		});
    
    		$(this).closest('tr').remove();
    
    		rowIdx--;
            otherTotal(1);
    	});
    
    });
</script>
@endsection
