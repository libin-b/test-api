
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
                <h3 class="card-title">Add Supplier</h3>
              </div>
              
<!-- 
              <h3 class="box-title"></h3>  <atarget="_blank">  <button  type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#modal-default" >
                Add Customer
              </button></a> -->
              <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Add Customer
                </button> -->

                <form action="{{route('vendors.store')}}" method="post" enctype="multipart/form-data">

@csrf

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div>

              

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter Address" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="number" class="form-control" name="contact_number" id="exampleInputEmail1" placeholder="Enter Contact Number" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">GSTIN</label>
                    <input type="text" class="form-control" name="gst" id="exampleInputEmail1" placeholder="" >
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
