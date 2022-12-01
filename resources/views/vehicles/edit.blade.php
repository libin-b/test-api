
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
                <h3 class="card-title">Edit Vehicle</h3>
              </div>
               <form method="POST" action="{{route('vehicles.update',$vehicle->v_id)}}" enctype="multipart/form-data" >
                   @csrf
                   @method("PATCH")
                <div class="card-body">
                    <div class="row">
				   <div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Vehicle No</label>
					<input type="text" name="vehicle_no" class="form-control"  value="{{$vehicle->vehicle_no}}" required> 
					
				   </div>
   
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Unit</label>                                            
                        <input type="number" name="feet"  class="form-control"   value="{{$vehicle->feet}}" required="">  
                    </div>
                    
                    
                      <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Owner Name</label>
                       <input type="text" name="owner_name" class="form-control" value="{{$vehicle->owner_name}}"  required="">
                    </div> 
				
 
                    <!-- <div class="form-group col-md-6">-->
                    <!--    <label for="exampleInputPassword1">Renew Date</label>-->
                    <!--    <input type="date" class="form-control"  name="renew_date"  value="{{$vehicle->renew_date}}"  required="">-->
                    <!--</div> -->
                     <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">Remarks</label>
						<input type="text" class="form-control"  value="{{$vehicle->remarks}}" name="remarks" >
					</div>
                </div>
                 <div class="box-footer pull-left">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div> 
             
            
          </div></form>
            </div>

        </div>
    </div>
</div>


  
@endsection
