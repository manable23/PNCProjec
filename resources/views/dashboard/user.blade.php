@extends('dashboard.index')

@section('content')

<div class="col-md-12 grid-margin">
    <div class="card">
        <div class="p-4 border-bottom bg-light">
            <h4 class="card-title mb-0">Shop</h4>
        </div>
        <div class="card-body">
            <!-- User-specific content goes here -->

            <h5 class="mb-3">Welcome</h5>
            <p>Total Available Product: {{ $totalProduct }}</p>

            @if ($products->count() > 0)
                <div class="row mt-4">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 d-flex flex-column">
                            <a class="btn btn-primary" width = "200px" href="{{ route('product.details',$product->id) }}">@if ($product->image)
                                    <img src="{{ asset('uploads/products/' . $product->image) }}" class="card, -img-top mx-auto my-auto" alt="Product Image" style="max-width: 45%; height: auto;"></a>
                                @else
                                    <p>No image available</p>
                                @endif
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text mb-3">Before discount: RM{{ $product->price }}</p>
                                    <p class="card-text mb-3">Discount{{ $product->discount_percentage }}%</p>
                                    <p class="card-text">After discount: RM{{ $product->price_after_discount }}</p>
                                    <p class="card-text mb-3">Category: {{ $product->category->name }}</p>

                                    <a href="{{ route('product.details', $product->id) }}" class="btn btn-primary mt-2">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No products available.</p>
            @endif
        </div>
    </div>
</div>
@endsection
