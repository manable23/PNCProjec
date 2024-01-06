@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Users</h2>
            </div>
            <div class="position-relative">
                <div class="modal-button mt-2">
                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                            data-bs-toggle="modal" data-bs-target=".add-new-user"
                            onclick="window.location.href='{{ route('user.create') }}'">
                        <i class="mdi mdi-plus me-1"></i> Add New User
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
        @foreach ($user as $u)
            @if ($u->user_type === 'user')
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->user_type }}</td>
                    <td>
                        <form action="{{ route('user.destroy', $u->id) }}" method="POST">
                            <a class="btn btn-primary btn-rounded" href="{{ route('user.edit', $u->id) }}">Edit</a>
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