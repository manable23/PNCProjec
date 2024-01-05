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
                <strong>Stock:</strong>
                {{ $products->stock }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        
        <div class="form-group">
            <strong>Image:</strong><br>
            <div class="card-body">
                        <p>Product Image:</p>
                        @if (Storage::disk('public')->exists('images/' . basename($products->image)))
                            <img src="{{ asset('/images/' . $products->image) }}" width="300" height="350" alt="image">
                        @else
                        
                            <p>No image available</p>
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
        </div>
</br>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
@endsection