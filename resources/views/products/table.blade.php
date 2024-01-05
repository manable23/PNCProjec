@extends('layouts.master')

@section('title', 'Create Product')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
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
        </div>
        </div>
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Products Name</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Discount</th>
            <th width="280px">Action</th>
        </tr>

        @php
    $count = 1;
    @endphp


        @foreach ($products as $p)
        <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->discount_percentage }}</td>
            <td>
                <form action="{{ route('products.destroy',$p->id) }}" method="POST">
   
                    <a class="btn btn-info rounded-pill px-4 py-2" href="{{ route('products.show',$p->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$p->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
            </div>
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
