@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('update', $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="row">
            <input type="hidden" name="id" value="{{ $products->id }}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="name" value="{{ $products->name }}" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <strong>Category:</strong>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <select class="form-control" name="category_id">
                        <option value="">-- Choose Category --</option>
                        @foreach ($category as $id => $name)
                            <option
                                value="{{$id}}" {{ (isset($timetable['category_id']) && $timetable['category_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="text" name="stock" value="{{ $products->stock }}" class="form-control" placeholder="Stock">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="input-group">
                    <div class="custom_file">
                        <strong>Product Image:</strong>
                        <input type="file" name="image" class="custom-file-input" value="{{ $products->image}}" >
                    </div>
                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" value="{{ $products->price }}" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount:</strong>
                    <input type="text" name="discount_percentage" value="{{ $products->discount_percentage }}" class="form-control" placeholder="Discount">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection
