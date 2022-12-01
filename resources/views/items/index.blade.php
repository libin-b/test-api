@extends('layouts.side')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Items</h1>
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
                  <h3 class="card-title">Customers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Item Name</th>
                          <th>Description</th>
                          <th>Unit price</th>
                          <th>HSN code</th>
                          <th>GST%</th>
                          <th>unit </th>
                          <th>Current Stock</th>
                          <th >#</th>
                          <th >#</th>
                        </tr>
                      </thead>
                            
                      @if(count($items) >0)
                          @foreach($items as $item)
                          <tbody>
                            <tr>
                              <td>{{ $item->item_name }}</td>
                              <td>{{ $item->description }}</td>
                              <td>{{ $item->unit_price }} </td>
                              <td>{{ $item->hsn_code }}</td>
                              <td>{{ $item->gst }}</td>
                              <td> {{ $item->unit }}</td>
                              <td>{{ $item->current_stock }}</td>
                              <td><a href="{{ route('items.edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
                              <td>
                                  <form action="{{ route('items.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                  </form>
                              </td>
                            </tr>
                          </tbody>
                          @endforeach
                      @endif
                                
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


<script>

  
 $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@endsection