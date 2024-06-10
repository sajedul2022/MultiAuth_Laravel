<x-layouts.master>

    @slot('title')
        Category List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Category
                    <div class="float-end">
                        @can('category-create')
                            <a class="btn btn-success" href="{{ route('category.create') }}"> Create New </a>
                        @endcan

                        {{-- @can('category-trash')
                            <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
                        @endcan --}}

                        <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
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
                <th>Image</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->cat_name }}</td>
                    <td>
                        @if ($category->image)
                            <img src="{{ asset('/images/cat/' . $category->image) }}" alt="{{ $category->cat_name }}"
                                width="100">
                        @else
                            Image Not set
                        @endif
                    </td>

                    <td>{{ $category->status }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">

                            {{-- <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a> --}}

                            @can('category-edit')
                                <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('category-delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Do you want to Delete?')"><i class="fa fa-trash"
                                        aria-hidden="true"></i>Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layouts.master>
