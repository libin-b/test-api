
@extends('layouts.app')

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
                <h3 class="card-title">Add Customer</h3>
              </div>
              
<!-- 
              <h3 class="box-title"></h3>  <atarget="_blank">  <button  type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#modal-default" >
                Add Customer
              </button></a> -->
              <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Add Customer
                </button> -->

                <!-- <form id="form"  onSubmit="JavaScript:funsubmit()"> -->

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Name</label>
                     <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name" required  > <!--onchange="{ (item)=>{this.setState({name:item.target.value})} }" -->
                  </div>
                  <meta name="csrf-token" content="{{ csrf_token() }}">
              

                  <!-- <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter Address" >
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="number" class="form-control" name="contact_number" id="exampleInputEmail1" placeholder="Enter Contact Number" >
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">GSTIN</label>
                    <input type="text" class="form-control" name="gst" id="exampleInputEmail1" placeholder="" >
                  </div>        
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Type</label>
                   <select name="type" class="form-control" required>
                       <option value="0">GST</option>
                        <option value="1">IGST</option>
                   </select>
                  </div> 
                  </div>
                   -->
                           
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" class="btn btn-primary" onclick="JavaScript:funSubmit()" >Submit</button>
                </div>
              <!-- </form>
            </div> -->
        </div>
    </div>
</div> 


  
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  function funFetch(){
    // alert("adsada");
    // console.log("hi");
    $.ajax({
      url: 'http://127.0.0.1:8080/api/customers',
      headers: {
          'Authorization': `Bearer 1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ`,
          'Accept' : 'application/json',
      },
      method: 'GET',
      // data: $('#name').val(),
      
      success: function(data){
        console.log('succes: '+data);
      }
    }); 
  }  



  function funEdit(){
    // alert("adsada");
    // console.log("hi");
    $.ajax({
      url: 'http://127.0.0.1:8080/api/customers/edit/6',
      headers: {
          'Authorization': `Bearer 1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ`,
          'Accept' : 'application/json',
      },
      method: 'GET',
      // data: $('#name').val(),
      
      success: function(data){
        console.log('succes: '+data['name']);
      }
    });
  }



  function funSubmit(){

    // var formData = {
    //             'name': $('input[name=name]').val() ,
    //             '_token': '{{csrf_token()}}' 
    //             // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         };
    //         console.log(formData);

    // $.ajaxSetup({
    //   headers: {
    //       'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
    //       'Authorization': `Bearer 1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ`,
    //       'Accept' : 'application/json',
    //   }
    // });
    $.ajax({
      // dataType: 'json',
      url: 'http://order.test/api/customers/store',
      // headers: {
      //     'Authorization': `Bearer 1|gdGK0EH57FWO3MoXiujDvqKnf4oJrPi0TmLH31bQ`,
      //     'Accept' : 'application/json',
      // },
      method: 'POST',
      data: {
                // 'name': $('input[name=name]').val() ,
                // '_token': '{{csrf_token()}}' 
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
      
      success: function(data){
        console.log('succes: '+data);
      },
      // error: function(XMLHttpRequest, textStatus, errorThrown) { 
      //   alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      // }  
    });
  }
</script>