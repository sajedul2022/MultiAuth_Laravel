<x-layouts.master>

    @slot('title')
        Sub-Child-category List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Sub-Child-Category
                    <div class="float-end">
                        @can('childcat-create')
                        <a class="btn btn-success" href="{{ route('subchildcat.create') }}"> Create New </a>
                        @endcan

                        {{-- @can('category-trash')
                            <a class="btn btn-primary" href="{{ route('category.trash') }}"> Trash List </a>
                        @endcan --}}

                        <a class="btn btn-primary" href="{{ route('subchildcat.trash') }}"> Trash List </a>


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
                <th>Child Category</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($subchildcats as $subchildcat)
                <tr>
                    <td>{{ $subchildcat->sub_child_cat_name }}</td>
                    <td>
                        @if ($subchildcat->image)
                            <img src="{{ asset('/images/subchildcat/' . $subchildcat->image) }}"
                                alt="{{ $subchildcat->sub_child_cat_name }}" width="100">
                        @else
                            Image Not set
                        @endif
                    </td>

                    <td>{{ $subchildcat->status }}</td>

                    <td>
                        {{ $subchildcat->childcategory->child_cat_name }}
                    </td>
                    <td>
                        <form action="{{ route('subchildcat.destroy', $subchildcat->id) }}" method="POST">

                            {{-- <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a> --}}

                            {{-- @can('childcat-edit')
                            <a class="btn btn-primary" href="{{ route('childcat.edit', $childcat->id) }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        @endcan --}}

                            <a class="btn btn-primary" href="{{ route('subchildcat.edit', $subchildcat->id) }}"><i
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
