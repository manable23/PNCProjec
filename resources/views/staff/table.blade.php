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
        <th width="5%">No</th>
        <th width="35%">Name</th>
        <th width="35%">Email</th>
        <th width="10%">Role</th>
        <th width="15%">>Action</th>
        </tr>

        @php
            $count = 1;
        @endphp
        @foreach ($staff as $s)
            @if ($s->user_type === 'admin')
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->user_type }}</td>
                    <td>
                        <form action="{{ route('staff.destroy', $s->id) }}" method="POST">
                            <a class="btn btn-primary btn-rounded" href="{{ route('staff.edit', $s->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach

    </table>
@endsection