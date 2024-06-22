<x-layouts.master>

    @slot('title')
        User Trash
    @endslot

    @push('styles')
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}

        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    @endpush

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Trash List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive ">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
                {{-- <th width="">Active/Deactive</th> --}}
            </tr>
            @foreach ($user as $key => $data)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        @if (!empty($data->getRoleNames()))
                            @foreach ($data->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                            @endforeach
                        @endif
                    </td>
                    <td>
                    <form action="{{ route('users.restore', $data->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('users.delete', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('user-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
                </tr>
            @endforeach
        </table>
    </div>

</x-layouts.master>
