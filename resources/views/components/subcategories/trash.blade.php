<x-layouts.master>

    @slot('title')
        Subcategory Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Subcategory Trash</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('subcategory.index') }}"> Index List </a>
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
        @foreach ($subcats as $subcat)
            <tr>
                <td>{{ $subcat->sub_cat_name }}</td>
                <td>
                    @if ($subcat->image)

                        <img src="{{ asset('/images/subcat/' . $subcat->image) }}" alt="subcat_image"
                            width="100">
                        @else
                            Image Not set
                    @endif
                </td>
                <td>{{ $subcat->status }}</td>
                <td>{{ $subcat->category->cat_name }}</td>
                <td>
                    <form action="{{ route('subcategory.restore', $subcat->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('subcategory.delete', $subcat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('subcategory-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
