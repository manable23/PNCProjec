@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{ $products->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $products-> category->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                {{ $products->stock }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        
    <div class="form-group">
    <strong>Product Image:</strong><br>
    <div class="card-body">
        @if (file_exists(public_path('uploads/products/' . basename($products->image))))
    <img src="{{ asset('/uploads/products/' . $products->image) }}" width="150" height="150" alt="image">
@else
    <p>No image available</p>
    <p>Debugging Info:</p>
    <ul>
        <li>Image Path: {{ 'uploads/products/' . basename($products->image) }}</li>
        <li>Asset URL: {{ asset('/uploads/products/' . $products->image) }}</li>
        <li>Storage URL: {{ Storage::disk('public')->url('uploads/products/' . basename($products->image)) }}</li>
    </ul>
@endif

    </div>
</div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $products->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Discount:</strong>
                {{ $products->discount_percentage }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Price After Discount:</strong>
                {{ $products->price_after_discount }}
            </div>
        </div>
</br>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
@endsection