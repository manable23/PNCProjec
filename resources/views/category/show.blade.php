@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Category Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Created at:</strong>
                {{ $category->created_at }}
            </div>
        </div>
</br>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
        </div>
    </div>
@endsection