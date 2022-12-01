
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
                <h3 class="card-title">Add Head</h3>
              </div>
              

                <form action="{{route('expense_heads.store')}}" method="post" >

@csrf

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="exampleInputEmail1">Head</label>
                    <input type="text" class="form-control" name="head" id="exampleInputEmail1"  required>
                  </div>                                           
                  </div>
              
                <div class="card-footer">
                  <button type="submit" id='reload' class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

</div>
</div>
</div>


  
@endsection
