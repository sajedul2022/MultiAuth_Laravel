<x-layouts.master>

    @slot('title')
    Permission Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Permission Trash</h2>
            </div>

            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('permission.index') }}"> Index List </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
                <td>
                    <form action="{{ route('permission.restore', $permission->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('permission.delete', $permission->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('permission-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
