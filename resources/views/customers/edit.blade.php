
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
                <h3 class="card-title">Edit Customer</h3>
              </div>
              


                <form action="{{route('customers.update',$customer->c_id)}}" method="post" >

@csrf
@method("PATCH")

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$customer->name}}" required>
                  </div>

              

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address"  placeholder="Enter Address" value="{{$customer->address}}" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="number" class="form-control" name="contact_number"  placeholder="Enter Contact Number" value="{{$customer->contact_no}}" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">GSTIN</label>
                    <input type="text" class="form-control" name="gstno" id="exampleInputEmail1" placeholder="" value="{{$customer->gstno}}" >
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Type</label>
                   <select name="type" class="form-control" required>
                       <option value="{{$customer->type}}">
                           @if($customer->type == "0" )
                                GST
                           @elseif($customer->type == "1" )
                                IGST
                           @endif
                       </option>
                       <option value="0">GST</option>
                        <option value="1">IGST</option>
                   </select>
                  </div> 
                  
                  
                  </div>
                  
                           
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id='reload' class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

</div>
</div>
</div>


  
@endsection
