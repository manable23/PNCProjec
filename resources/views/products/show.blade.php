@extends('layouts.template')
@section('content')

<style>
    .product-details {
        max-width: 600px;
        margin: 0 auto;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .image-container {
        text-align: center;
    }

    .product-image {
        max-width: 100%;
        max-height: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn-back {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-back:hover {
        background-color: #0056b3;
    }
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product Details</h2>
            </div>
        </div>
    </div>
   
    <div class="product-details">
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
        <div class="col-xs-12 col-sm-12 col-md-12 image-container">
            <div class="form-group">
                <strong>Image:</strong><br>
                <div class="card-body">
                    <p>Product Image:</p>
                    @if (file_exists(public_path('uploads/products/' . basename($products->image))))
                        <img src="{{ asset('/uploads/products/' . $products->image) }}" class="product-image" alt="image">
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
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                RM {{ $products->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Discount:</strong>
                {{ $products->discount_percentage }}%
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price After Discount:</strong>
                RM {{ $products->price_after_discount }}
            </div>
        </div>
    </div>
</div>
</br>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
@endsection