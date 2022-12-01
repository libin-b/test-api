@extends('layouts.side')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Expenses</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sales</li>
            </ol>
          </div> -->
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
            <h3 class="card-title">Expenses</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
                <form action="{{url('/expenses/search')}}" method="post" enctype="multipart/form-data">

              @csrf

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">From</label>
                    <input type="date" class="form-control" name="from"   required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">To</label>
                    <input type="date" class="form-control" name="to"  required>
                  </div>

              

                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Select Heads</label>
                    <select  class="form-control" name="head_id" >
                      <option value="" hidden></option>
                      @if(count($heads) > 0)
                        @foreach($heads as $head)
                        <option value="{{$head->eh_id}}">{{$head->expense_head}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>                             
                 
                  
                           
                <!-- /.card-body -->

                <div class="form-group col-md-3 px-2">
                    <br>
                  <button type="submit" id='reload' class="btn btn-primary">Submit</button>
                </div>
                 </div>
              </form>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col"> Date</th>
                    <th scope="col">Head</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">#</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i=1)
                  @foreach($expenses as $x)
                  
                  <tr class="odd">
                  <th scope="row">{{$i++}}</th>
                    <td>{{$x->date}}</td>
                    <td>{{$x->expense_head}}</td>
                    <td>{{$x->amount}}</td>
                    <td>{{$x->remarks}}</td>
                    <td>  <a  href="{{route('expenses.edit',$x->e_id)}}" class="btn "><i class="fa fa-pencil" onclick="return confirm('Do you want to update details ?')" ></i></a></td>
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
</div>

@endsection