@extends('layouts.side')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
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
                            <h3 class="card-title">Orders</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Sl No</th>
                                    <th scope="col"> Order No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">#</th>
                                    <th scope="col">#</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($orders as $order)
                                
                                <tr class="odd">
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$order->order_no}}</td>
                                    <td>{{$order->date}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->discount}}</td>
                                    <td>{{$order->amount}}</td>
                                    <td>  <a  href="{{route('bills.edit',$order->o_id)}}" class="btn btn-success">Bill</a></td>
                                    <td>  <a  href="{{route('orders.show',$order->o_id)}}" class=" "><i class="fa fa-eye"  ></i></a></td>
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
    <!-- /.container-fluid -->
    </section>
</div>
@endsection