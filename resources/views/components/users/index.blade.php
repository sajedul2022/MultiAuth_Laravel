<x-layouts.master>

    @slot('title')
        All User
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
                <h2>Users Management</h2>
            </div>
            <div class="float-end">
                @can('user-create')
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                @endcan

                <a class="btn btn-primary" href="{{ route('users.trash') }}"> Trash List </a>


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
                <th width="">Active/Deactive</th>
            </tr>
            @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>

                        @can('user-edit')
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                        @endcan

                        @can('user-delete')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endcan

                    </td>

                    <td>

                        <form action="{{ route('changeStatus', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- <input data-id="{{ $user->id }}" class="toggle-class" type="checkbox"
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                data-off="InActive" {{ $user->status ? 'checked' : '' }}> --}}

                                <div class="form-group">
                                    <input type="checkbox" name="status"  id="remember_me" value="1"
                                    {{ $user->status ? 'checked' : '' }} >
                                    <label for="remember_me">Active/Deactive</label>
                                </div>


                            <button type="submit" class="btn btn-primary"> Set </button>

                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
        {!! $data->render() !!}
    </div>

    @push('scripts')
        {{-- <script>
            $(document).ready(function() {
                $('.toggle-class').change(function() {
                    let status = $(this).prop('checked') === true ? 1 : 0;
                    let userId = $(this).data('id');
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('/changeStatus') }}",
                        data: {
                            'status': status,
                            'user_id': userId
                        },
                        success: function(data) {
                            console.log(data.message);
                        }
                    });
                });
            });
        </script> --}}
    @endpush

</x-layouts.master>
