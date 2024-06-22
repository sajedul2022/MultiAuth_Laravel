<x-layouts.master>

    @slot('title')
        Childcategory Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Child-Category Trash</h2>
            </div>

            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('childcat.index') }}"> Index List </a>
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
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($childcats as $childcat)
            <tr>
                <td>{{ $childcat->child_cat_name }}</td>
                <td>
                    @if ($childcat->image)

                        <img src="{{ asset('/images/childcat/' . $childcat->image) }}" alt="{{ $childcat->child_cat_name}}"
                            width="100">
                        @else
                            Image Not set
                    @endif
                </td>
                <td>{{ $childcat->status }}</td>
                <td>{{ $childcat->subcategory->sub_cat_name }}</td>
                <td>
                    <form action="{{ route('childcat.restore', $childcat->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('childcat.delete', $childcat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('childcat-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
