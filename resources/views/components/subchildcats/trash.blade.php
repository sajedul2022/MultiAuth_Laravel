<x-layouts.master>

    @slot('title')
        Sub-Childcategory Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Sub-Child-Category Trash</h2>
            </div>

            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('subchildcat.index') }}"> Index List </a>
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
            <th>Image</th>
            <th>Status</th>
            <th>Child Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($subchildcats as $subchildcat)
            <tr>
                <td>{{ $subchildcat->child_cat_name }}</td>
                <td>
                    @if ($subchildcat->image)

                        <img src="{{ asset('/images/subchildcat/' . $subchildcat->image) }}" alt="{{ $subchildcat->sub_child_cat_name}}"
                            width="100">
                        @else
                            Image Not set
                    @endif
                </td>
                <td>{{ $subchildcat->status }}</td>
                <td>{{ $subchildcat->childcategory->child_cat_name }}</td>
                <td>
                    <form action="{{ route('subchildcat.restore', $subchildcat->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('subchildcat.delete', $subchildcat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('subchildcat-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
