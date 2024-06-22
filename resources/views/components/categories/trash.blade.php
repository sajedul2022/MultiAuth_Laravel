<x-layouts.master>

    @slot('title')
        Category Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Category Trash</h2>
            </div>

            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Index List </a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($category as $cat)
            <tr>
                <td>{{ $cat->cat_name }}</td>
                <td>
                    @if ($cat->image)
                        <img src="{{asset('/images/cat/' . $cat->image)}}" alt="cat-image"
                            width="100">
                        @else
                            Image Not set
                    @endif
                </td>
                <td>{{ $cat->status }}</td>
                <td>
                    <form action="{{ route('category.restore', $cat->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('category.delete', $cat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('category-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
