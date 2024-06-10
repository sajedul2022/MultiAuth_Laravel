<x-layouts.master>

    @slot('title')
        Child-category List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Child-Category
                    <div class="float-end">
                        {{-- @can('childcat-create') --}}
                        <a class="btn btn-success" href="{{ route('childcat.create') }}"> Create New </a>
                        {{-- @endcan --}}

                        {{-- @can('category-trash')
                            <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
                        @endcan --}}

                        <a class="btn btn-primary" href="{{ route('childcat.trash') }}"> Trash List </a>


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
                <th>Sub Category</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($childcats as $childcat)
                <tr>
                    <td>{{ $childcat->child_cat_name }}</td>
                    <td>
                        @if ($childcat->image)
                            <img src="{{ asset('/images/childcat/' . $childcat->image) }}"
                                alt="{{ $childcat->child_cat_name }}" width="100">
                        @else
                            Image Not set
                        @endif
                    </td>

                    <td>{{ $childcat->status }}</td>

                    <td>
                        {{ $childcat->subcategory->sub_cat_name }}
                    </td>
                    {{-- <td>
                    <form action="{{ route('childcat.destroy', $childcat->id) }}" method="POST">

                        {{-- <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a> --}}

                    {{-- @can('childcat-edit')
                            <a class="btn btn-primary" href="{{ route('childcat.edit', $childcat->id) }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('childcat-delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Do you want to Delete?')"><i class="fa fa-trash"
                                    aria-hidden="true"></i>Delete</button>
                        @endcan
                    </form>
                </td>  --}}
                    <td>
                        <form action="{{ route('childcat.destroy', $childcat->id) }}" method="POST">

                            {{-- <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a> --}}

                            {{-- @can('childcat-edit')
                            <a class="btn btn-primary" href="{{ route('childcat.edit', $childcat->id) }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        @endcan --}}

                            <a class="btn btn-primary" href="{{ route('childcat.edit', $childcat->id) }}"><i
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
