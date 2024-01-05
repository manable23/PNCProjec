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

    <form action="{{ route('order.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Customer Detail:</strong>
                    <input type="text" class="form-control" name="customer_detail" placeholder="Customer Detail">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Product ID:</strong>
                    <input type="text" class="form-control" name="product_id" placeholder="Product ID">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Category ID:</strong>
                    <input type="text" class="form-control" name="category_id" placeholder="Category ID">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('order.table') }}"> Back</a>
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
