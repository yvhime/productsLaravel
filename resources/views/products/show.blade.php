@extends('layouts.template')
{{-- @extends('layouts.app') --}}

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Details/show</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">###</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{-- <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf --}}
              <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                        <select class="form-control" name="category" disabled>
                          {{-- <option value="">Select category</option> --}}
                          <option value="{{ $product->category }}">{{ $product->category }}</option>
                          <option value="Pens & Pencils">Pens & Pencils</option>
                          <option value="Notebooks & Journals">Notebooks & Journals</option>
                          <option value="Pad Papers">Pad Papers</option>
                          <option value="Coloring Materials">Coloring Materials</option>
                          <option value="Folders & Clearbooks">Folders & Clearbooks</option>
                        </select>
                </div>
                <div class="form-group">
                  <label for="nameAndDetails">Name/Details</label>
                  <input type="text" name="nameAndDetails" class="form-control" id="nameAndDetails" value="{{ $product->name_details }}" placeholder="Enter name/details" disabled>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" min="1" class="form-control" id="quantity" value="{{ $product->quantity }}" placeholder="Enter quantity" disabled>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" min="0.00" step="0.01" class="form-control" id="price" value="{{ $product->price }}" placeholder="Enter price" disabled>
                </div>
                <div class="form-group">
                    <label for="createdAt">Created at</label>
                    <input type="text" name="createdAt" class="form-control" id="createdAt" value="{{ $product->created_at }}" placeholder="Enter price" disabled>
                </div>
                <div class="form-group">
                    <label for="updatedAt">Updated at</label>
                    <input type="text" name="updatedAt" class="form-control" id="updatedAt" value="{{ $product->updated_at }}" placeholder="Enter price" disabled>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="update" class="btn btn-primary">Update</button>
              </div>
            {{-- </form> --}}
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</section>

@endsection
