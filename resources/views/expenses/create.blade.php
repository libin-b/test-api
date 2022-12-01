
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
                <h3 class="card-title">Add Expenses</h3>
              </div>

                <form action="{{route('expenses.store')}}" method="post" enctype="multipart/form-data">

              @csrf

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control" name="date" id="exampleInputEmail1"  required>
                  </div>

              

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Select Heads</label>
                    <select  class="form-control" name="head" required>
                      <option value="" hidden></option>
                      @if(count($heads) > 0)
                        @foreach($heads as $head)
                        <option value="{{$head->eh_id}}">{{$head->expense_head}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                  
                    <div class="form-group col-md-4">
                        <label for="check">GST
                        <input type="checkbox" class="form-control" id="check" name="gst_bill"   value="1">
                        </label>
                    </div>
                    
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputEmail1"  required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Remarks</label>
                    <input type="text" class="form-control" name="remarks" id="exampleInputEmail1"  >
                  </div>                 
                  </div>
                  
                           
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id='reload' class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

</div>
</div>
</div>


  
@endsection
