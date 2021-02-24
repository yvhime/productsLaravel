@extends('layouts.template')
{{-- @extends('layouts.app') --}}

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Products</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

{{-- <div>
    @if (count($product) > 0)
        @foreach ($product as $products)
            <div class="card p-3">
                <h3><a href="/products/{{ $products->id }}"> {{ $products->name_details }} </a></h3> --}}
                {{-- db column name --}}
                {{-- <small>Category: {{ $products->category }}</small>
                <small>Quantity: {{ $products->quantity }}</small>
                <small>Price: {{ $products->price }}</small>
            </div>
        @endforeach
    @else
        <p>no products</p>
    @endif
</div> --}}
<!-- /.content-header -->

<div class="card">
    {{-- <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div> --}}
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name/Details</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>4</td>
                <td>X</td>
            </tr> --}}
        @if (count($product) > 0)
            @foreach ($product as $products)
        <tr>
            <td>{{ $products->id }}</td>
            <td>{{ $products->category }}</td>
            <td>{{ $products->name_details }}</td>
            <td>{{ $products->quantity }}</td>
            <td>{{ $products->price }}</td>
            <td>
                <a href="{{ route('products.show', $products->id) }}"><button type="button" class="btn btn-block btn-outline-danger">Info</button></a>
                <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <input type="submit" class="btn btn-block btn-outline-danger" name="delete" id="" value="Delete">
                </form>
            </td>
            
        </tr>
            @endforeach
        @else
        {{-- <tr>
            <td>No Info</td>
            <td>No Info</td>
            <td>No Info</td>
            <td>No Info</td>
            <td>No Info</td>
        </tr> --}}
        @endif
            
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name/Details</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection
