@extends('layouts.template')
{{-- @extends('layouts.app') --}}

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Products</h1>
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
            <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                        <select class="form-control" name="category">
                          <option value="">Select category</option>
                          <option value="Pens & Pencils">Pens & Pencils</option>
                          <option value="Notebooks & Journals">Notebooks & Journals</option>
                          <option value="Pad Papers">Pad Papers</option>
                          <option value="Coloring Materials">Coloring Materials</option>
                          <option value="Folders & Clearbooks">Folders & Clearbooks</option>
                        </select>
                </div>
                <div class="form-group">
                  <label for="nameAndDetails">Name/Details</label>
                  <input type="text" name="nameAndDetails" class="form-control" id="nameAndDetails" placeholder="Enter name/details">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" min="1" class="form-control" id="quantity" placeholder="Enter quantity">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" min="0.00" step="0.01" class="form-control" id="price" placeholder="Enter price">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div> --}}
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</section>

@endsection
