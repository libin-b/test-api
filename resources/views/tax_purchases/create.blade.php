
@extends('layouts.side')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Add Purchase</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tax_purchases.store') }}">
                        @csrf
                        <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-md-4 col-form-label text-md">{{ __('Date') }}</label>
                                    <input type="date" class="form-control" name="date" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-md-4 col-form-label text-md">{{ __('Bill No') }}</label>
                                        <input id="name" type="text" class="form-control" name="bill_no"  required autofocus>
                                </div>
                                    <div class="form-group col-md-6">
                                    <label for="unit_price" class="col-md-4 col-form-label text-md">{{ __('Select Vendor') }}</label>
                                        <select class="form-control" name="vendor_id" required>
                                            <option hidden value="">--Select Vendor --</option>
                                            @if(count($vendors)>0)
                                                    @foreach($vendors as $vendor)
                                                    <option value="{{$vendor->v_id}}">{{$vendor->name}}</option>
                                                    @endforeach
                                            @endif
                                        </select>
                                </div>
        
                                <div class="form-group col-md-6 ">
                                    <label for="hsn_code" class="col-md-4 col-form-label text-md">{{ __('Taxable') }}</label>
                                        <input  type="text" class="form-control" name="taxable"  required>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label for="hsn_code" class="col-md-4 col-form-label text-md">{{ __('CGST') }}</label>
                                        <input  type="text" class="form-control" name="cgst" >
                                </div>
        
                                <div class="form-group col-md-6">
                                    <label for="unit" class="col-md-4 col-form-label text-md">{{ __('SGST') }}</label>
                                   <input type="text" class="form-control" name="sgst" >
                                </div>
        
                                <div class="form-group col-md-6">
                                    <label for="description" class="col-md-4 col-form-label text-md">{{ __(' IGST') }}</label>
                                        <input  type="text" class="form-control" name="igst" >
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description" class="col-md-4 col-form-label text-md">{{ __(' Total Amount') }}</label>
                                        <input  type="text" class="form-control" name="total_amount"  required>
                                </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary" onclick="this.hide()">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
