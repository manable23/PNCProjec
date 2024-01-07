@extends('layouts.template')


@section('title', 'Create Order')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-title', 'Create New Order')

@section('content')

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

    @if (isset( $products))
    <div class="row">
    <div class="col-xs-12">
        <div class="col-md-6">
            <h5 class="card-title text-primary" style="font-size: 40px;">{{ $products->name }}</h5>
            <h5 class="card-title text-primary">Price After Discount: <span style="color: green;">RM{{ $products->price_after_discount }}</span></h5>
            <!-- Display other product details if needed -->
        </div>

        @if ($products->image)
            <div class="col-md-6">
                <img src="{{ asset('uploads/products/' . $products->image) }}" class="card-img-top" alt="Product Image" style="max-width: 50%; height: auto;">
            </div>
        @else
            <div class="col-md-6">
                <p>No image available</p>
            </div>
        @endif
    </div>
</div>


    @endif

    @csrf


        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Customer Name:</strong>
                    <input type="text" name="customer_name" class="form-control" placeholder="Your Name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <select class="form-control" name="product_name">
                        <option value="">-- Choose Product --</option>
                        @foreach ($products as $id => $name)
                            <option value="{{ $id }}" {{ (isset($timetable['products_id']) && $timetable['products_id'] == $id) ? ' selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('dashboard.user') }}"> Back</a>
            </div>
        </div>
    </form>
    
@endsection

@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- gridjs js -->
    <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>
    <!-- datepicker js -->
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/ecommerce-orders.init.js') }}"></script>
    <!-- App js -->
@endsection