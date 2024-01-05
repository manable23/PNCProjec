@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Staff</h2>
            </div>
            <div class="position-relative">
                <div class="modal-button mt-2">
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                            data-bs-toggle="modal" data-bs-target=".add-new-staff"
                            onclick="window.location.href='{{ route('staff.create') }}'">
                        <i class="mdi mdi-plus me-1"></i> Add New Staff
                    </button>
                </div>
            </div>
            </br>
            </br>
            </br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Joined On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($staff as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->created_at }}</td>
            <td>
                <form action="{{ route('staff.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('staff.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('staff.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection