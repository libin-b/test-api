@extends('layouts.side')

@section('content')
<div class="container">
      <div class="register-box-body">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Edit Item</div>

                <div class="card-body">
                    <form method="post" action="{{ route('items.update',$item->id) }}">
        @method('PATCH')
        @csrf
                     <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Item') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="item_name" value="{{ $item->item_name }}" required autofocus>

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
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="description" value="{{$item->description}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="unit_price" class="col-md-4 col-form-label text-md-right">{{ __('Unit_price') }}</label>

                            <div class="col-md-6">
                                <input id="unit_price" type="textarea" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" name="unit_price" value="{{$item->unit_price }}" required autofocus>

                                @if ($errors->has('unit_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unit_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsn_code" class="col-md-4 col-form-label text-md-right">{{ __('HSN code') }}</label>

                            <div class="col-md-6">
                                <input id="hsn_code" type="text" class="form-control{{ $errors->has('hsn_code') ? ' is-invalid' : '' }}" name="hsn_code" value="{{$item->hsn_code}}" required>

                                @if ($errors->has('hsn_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsn_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="gst" class="col-md-4 col-form-label text-md-right">{{ __('GST%') }}</label>

                            <div class="col-md-6">
                                <input id="gst" type="text" class="form-control{{ $errors->has('gst') ? ' is-invalid' : '' }}" name="GST" value="{{$item->gst}}" required>

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
                                <!--<input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{$item->unit}}" required>-->
                                <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="unit" required="">
                                <option value="{{$item->unit}}" > {{$item->unit}}</option>
                                <option>M</option>
                                <option>KG</option>
                                <option>C</option>
                                 <option >R</option>
								 <option >NOS</option>
              
            </select>
                                @if ($errors->has('unit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('current_stock') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="current_stock" value="{{$item->current_stock}}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection
