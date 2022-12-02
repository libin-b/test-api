@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    
                        <form action="http://127.0.0.1:8000/api/expense_heads/test" method="post" >
                        @csrf()
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
</div>
@endsection
