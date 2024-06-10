<x-layouts.master>

    @slot('title')
        Permission List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>All Permissions
                    <div class="float-end">
                        {{-- @can('childcat-create') --}}
                        <a class="btn btn-success" href="{{ route('permission.create') }}"> Create New </a>
                        {{-- @endcan --}}

                        {{-- @can('category-trash')
                            <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
                        @endcan --}}

                        <a class="btn btn-primary" href="{{ route('permission.trash') }}"> Trash List </a>
                    </div>
                </h2>
            </div>



        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive ">
        <table class="table table-striped table-hover">
            <tr>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <form action="{{ route('permission.destroy', $permission->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('permission.edit', $permission->id) }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

                            @csrf
                            @method('DELETE')
                            {{-- @can('childcat-delete') --}}
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Do you want to Delete?')"><i class="fa fa-trash"
                                    aria-hidden="true"></i>Delete</button>
                            {{-- @endcan --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layouts.master>
