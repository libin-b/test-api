@extends('layouts.side')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchases</h1>
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
      <div class="row">
        <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tax Purchases</h3>
            </div>
            <div class="card-body">
                <form >
                    @csrf
                    <div class="row">
                            <div class="form-group col-md-4">
                                
                                <input type="date" class="form-control" name="from" required autofocus>
                            </div>
                            <div class="form-group col-md-4">
                                
                                    <input type="date" class="form-control" name="to"  required autofocus>
                            </div>
                                <div class="form-group row mb-0">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" onclick="this.hide()">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Purchase Date</th>
                            <th>Bill No</th>
                            <th>Vendor Name</th>
                            <th>Address</th>
                            <th>Contact No</th>
                            <th>Gst No</th>
                            <th>Taxable</th>
                            <th >SGST</th>
                            <th >CGST</th>
                            <th >IGST</th>
                            <th >Total Amount</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($purchases) >0)
                        @foreach($purchases as $pur)
                            <tr>
                                <td>{{$pur->date}}</td>
                                <td>{{$pur->bill_no}}</td>
                                <td>{{$pur->name}}</td>
                                <td>{{$pur->address}}</td>
                                <td>{{$pur->contact_no}}</td>
                                <td>{{$pur->gstno}}</td>
                                <td>{{$pur->taxable}}</td>
                                <td>{{$pur->sgst}}</td>
                                <td>{{$pur->cgst}}</td>
                                <td>{{$pur->igst}}</td>
                                <td>{{$pur->total_amount}}</td>
                                @if(Auth::User()->company !== "3")
                                <td><a href="{{route('tax_purchases.edit',$pur->id)}}" class="btn btn-success">Edit</a></td>
                                @endif
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection