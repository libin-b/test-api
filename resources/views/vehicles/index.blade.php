@extends('layouts.side')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
    @if(session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <i class="fas fa-check-circle"></i>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    {{ session('success') }}
                    </div>
                </div>
            @endif
    <div class="row">

        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Vehicles</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col"> Vehicle No</th>
                    <th scope="col"> Unit</th>
                     <th scope="col"> Owner Name</th>
                      <!--<th scope="col"> Renew Date</th>-->
                       <th scope="col"> Remarks</th>
                    <th scope="col"> #</th>
                  
                  </tr>
                </thead>
                <tbody>
                  @php($i=1)
                  @foreach($vehicles as $x)
                  
                  <tr class="odd">
                  <th scope="row">{{$i++}}</th>
                    <td>{{$x->vehicle_no}}</td>
                     <td>{{$x->feet}}</td>
                     <td>{{$x->owner_name}}</td>
                     <!--<td>{{$x->renew_date}}</td>-->
                     <td>{{$x->remarks}}</td>
                     <td>
                            <a  href="{{route('vehicles.edit',$x->v_id)}}" class="btn "><i class="fa fa-pencil" onclick="return confirm('Do you want to update details ?')" ></i></a>
                     </td>
                   
                  </tr>
                  
                  @endforeach
                  
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection