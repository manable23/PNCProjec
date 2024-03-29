@extends('layouts.master')

@section('title', 'Create Product')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
    <!-- Add your custom CSS styles here -->
    <style>
        /* Customize your styles as needed */
        .add-new-product {
            /* Add your styles for the modal button */
        }

        .table th, .table td {
            text-align: center;
        }

        .btn-action {
            margin-right: 5px;
        }
    </style>
@endsection

@section('page-title', 'List of Products')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="position-relative">
                <div class="modal-button mt-2">
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                            data-bs-toggle="modal" data-bs-target=".add-new-product"
                            onclick="window.location.href='{{ route('products.create') }}'">
                        <i class="mdi mdi-plus me-1"></i> Add New Product
                    </button>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Products Name</th>
                        <th width="10%">Category</th>
                        <th width="5%">Stock</th>
                        <th width="15%">Price (RM)</th>
                        <th width="10%">Discount (%)</th>
                        <th width="15%">Price After Discount (RM)</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp

                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ optional($p->category)->name }}</td>
                            <td>{{ $p->stock }}</td>
                            <td>RM{{ $p->price }}</td>
                            <td>{{ $p->discount_percentage }}%</td>
                            <td>RM{{ $p->price_after_discount }}</td>

                            <td>
                                <form action="{{ route('products.destroy', $p->id) }}" method="POST">
                                    <a class="btn btn-info btn-action btn-rounded px-4 py-2"
                                        href="{{ route('products.show', $p->id) }}">Show</a>

                                    <a class="btn btn-primary btn-action btn-rounded" href="{{ route('edit', $p->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-action btn-rounded">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- gridjs js -->
    <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>
    <!-- datepicker js -->
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('build/js/pages/ecommerce-orders.init.js') }}"></script> -->
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
