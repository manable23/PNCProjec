@extends('layouts.master')

@section('title', 'Create Order')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-title', 'List of Order')

@section('content')
   
    <div class="row">
        <div class="col-12">
                    <div class="position-relative">
                        <div class="modal-button mt-2">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                                    data-bs-toggle="modal" data-bs-target=".add-new-order"
                                    onclick="window.location.href='{{ route('order.create') }}'">
                                <i class="mdi mdi-plus me-1"></i> Add New Order
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
            <th>Status</th>
            <th>Customer Detail</th>
            <th>Product</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{ $o->id }}</td>
            <td>{{ $o->status }}</td>
            <td>{{ $o->customer_detail }}</td>
            <td>{{ $o->product_id}}</td>
            <td>{{ $o->category_id}}</td>
            <td>
                <form action="{{ route('order.destroy',$o->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('order.show',$o->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('order.edit',$o->id) }}">Edit</a>
   
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
