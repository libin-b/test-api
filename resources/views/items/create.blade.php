@extends('layouts.side')

@section('content')
<div class="content-wrapper">
<div class="container-fluid">
      <div class="register-box-body">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add item</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('items.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Item') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="item_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="description"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group row">
                                 <div class="col-md-3">
                                     <label for="unit_price" class=" col-form-label text-md-right">{{ __('Purchase Price') }}</label>
                                    <input id="purchase_price" type="text" class="form-control"   name="purchase_price"  placeholder="Purchase Price" >
                                 </div>
                                 <div class="col-md-3">
                                     <label for="unit_price" class=" col-form-label text-md-right">{{ __('Profit %') }}</label>
                                    <input id="purchase_percentage" type="text"  class="form-control" name="purchase_percentage" placeholder="Purchase %" onchange="funPercentage(this.value)" >
                                </div>
                                
                           

                            <div class="col-md-6">
                                <label for="unit_price" class=" col-form-label text-md-right">{{ __('Unit_price') }}</label>
                                <input id="unit_price" type="text" step="any" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" name="unit_price" required autofocus>

                                @if ($errors->has('unit_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unit_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <script>
                            function funPercentage(percentage){
                              var price  = $("#purchase_price").val();
                              if(price){
                                  var per = parseFloat(percentage*price/100);
                                  
                                  var total  =parseFloat( per) + parseFloat( price);
                                  $("#unit_price").val( total);
                                  
                              }
                              
                            }
                        </script>

                        <div class="form-group row">
                            <label for="hsn_code" class="col-md-4 col-form-label text-md-right">{{ __('Hsn_code') }}</label>

                            <div class="col-md-6">
                                <input id="hsn_code" type="text" class="form-control{{ $errors->has('hsn_code') ? ' is-invalid' : '' }}" name="hsn_code" value="{{ old('hsn_code') }}" required>

                                @if ($errors->has('hsn_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsn_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="hsn_code" class="col-md-4 col-form-label text-md-right">{{ __('GST%') }}</label>

                            <div class="col-md-6">
                                <input id="hsn_code" type="text" class="form-control{{ $errors->has('hsn_code') ? ' is-invalid' : '' }}" name="GST" value="{{ old('hsn_code') }}" required>

                                @if ($errors->has('hsn_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsn_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unit" class="col-md-4 col-form-label text-md-right">{{ __('Unit') }}</label>

                            <div class="col-md-6">
                                 <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="unit" required="">
                                <option ></option>
                                <option >M</option>
                                <option >KG</option>
                                <option >C</option>
                                 <option >R</option>
								 <option >NOS</option>     
            </select>
                              <!--//  <input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" required>-->

                                @if ($errors->has('unit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Current Stock') }}</label>

                            <div class="col-md-6">
                                <input id="current_stock" type="text" class="form-control" name="current_stock" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
    </div>
</div>
</div>
@endsection
