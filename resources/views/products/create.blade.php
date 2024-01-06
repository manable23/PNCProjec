@extends('layouts.template')

@section('title', 'Create Product')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-title', 'Create New Product')

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

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Product Name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select class="form-control" name="category_id">
                        <option value="">-- Choose Category --</option>
                        @foreach ($category as $id => $name)
                            <option value="{{ $id }}" {{ (isset($timetable['category_id']) && $timetable['category_id'] == $id) ? ' selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="text" name="stock" class="form-control" placeholder="Stock">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Product Image:</strong>
                    <input type="file" name="image" class="form-control-file">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Discount:</strong>
                    <input type="text" name="discount_percentage" class="form-control" placeholder="Discount">
                </div>
            </div>
            </br>
</br>
</br>
</br>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
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
    <script src="{{ URL::asset('build/js/pages/ecommerce-Product.init.js') }}"></script>
    <!-- App js -->
@endsection
