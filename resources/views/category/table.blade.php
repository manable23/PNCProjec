@extends('layouts.master')

@section('title', 'Create Category')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
    <!-- Add your custom CSS styles here -->
    <style>
        /* Customize your styles as needed */
        .add-new-order {
            /* Add your styles for the modal button */
        }

        

        .btn-action {
            margin-right: 5px;
        }
    </style>
@endsection

@section('page-title', 'List of Categories')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="position-relative">
                <div class="modal-button mt-2">
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                            data-bs-toggle="modal" data-bs-target=".add-new-order"
                            onclick="window.location.href='{{ route('category.create') }}'">
                        <i class="mdi mdi-plus me-1"></i> Add New Category
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
                        <th width="70%">Category Name</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp

                    @foreach ($category as $c)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $c->name }}</td>

                            <td>
                                <form action="{{ route('category.destroy', $c->id) }}" method="POST">
                                    <a class="btn btn-info btn-action btn-rounded px-4 py-2"
                                        href="{{ route('category.show', $c->id) }}">Show</a>

                                    <a class="btn btn-primary btn-action btn-rounded" href="{{ route('category.edit', $c->id) }}">Edit</a>

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
