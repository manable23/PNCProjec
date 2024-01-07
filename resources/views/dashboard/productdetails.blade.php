@extends('dashboard.index')

@section('content')

<div class="container">
    <div class="row">
        @if ($products->image)
            <div class="col-md-6">
                <img src="{{ asset('uploads/products/' . $products->image) }}" class="card-img-top" alt="Product Image" style="max-width: 80%; height: auto;">
            </div>
        @else
            <div class="col-md-6">
                <p>No image available</p>
            </div>
        @endif
        <div class="col-md-6">
            <div class="card-deck">
                <div class="card bg-light">
                    <div class="card-body d-flex align-items-center">
                        <div class="ml-3">
                            <h5 class="card-title text-primary" style="font-size: 40px;">{{ $products->name }}</h5>
                            <h5 class="card-title text-primary">
                                Price Before Discount:
                                <del style="color: red;">RM {{ $products->price }}</del>
                            </h5>
                            <h5 class="card-title text-primary">Price After Discount: <span style="color: green;">RM{{ $products->price_after_discount }}</span></h5>
                            <a class="btn btn-primary" width = "200px" href="{{ route('order.create', $products->id) }}">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-light mt-3">
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('dashboard.user') }}">Back</a>
        </div>
    </div>
</div>

@endsection
