<x-layouts.master>

    @slot('title')
        Subcategory List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Subcategory
                    <div class="float-end">
                        @can('subcategory-create')
                            <a class="btn btn-success" href="{{ route('subcategory.create') }}"> Create New </a>
                        @endcan

                        {{-- @can('category-trash')
                            <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
                        @endcan --}}

                        <a class="btn btn-primary" href="{{ route('subcategory.trash') }}"> Trash List </a>


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
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($subcats as $subcat)
            <tr>
                <td>{{ $subcat->sub_cat_name }}</td>
                <td>
                    @if ($subcat->image)
                        <img src="{{ asset('/images/subcat/' . $subcat->image) }}" alt="{{ $subcat->sub_cat_name}}" width="100">
                    @else
                        Image Not set
                    @endif
                </td>
                <td>{{ $subcat->status }}</td>
                <td>{{ $subcat->category->cat_name }}</td>
                <td>
                    <form action="{{ route('subcategory.destroy', $subcat->id) }}" method="POST">

                        {{-- <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a> --}}

                        @can('subcategory-edit')
                            <a class="btn btn-primary" href="{{ route('subcategory.edit', $subcat->id) }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('subcategory-delete')
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
