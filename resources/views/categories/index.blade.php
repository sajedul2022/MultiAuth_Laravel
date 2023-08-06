@extends('layouts.app')
@section('content')

    {{-- @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Success!</h4>
            <p>{{ Session::get('success') }}</p>

            <button type="button" class="close" data-dismiss="alert aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (Session::has('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </div>
    @endif

    @if (\Session::has('error'))
        <div>
            <li class="alert alert-danger">{!! \Session::get('error') !!}</li>
        </div>
    @endif

    @if (\Session::has('success'))
        <div>
            <li class="alert alert-success">{!! \Session::get('success') !!}</li>
        </div>
    @endif

    <div class="container py-3">

        {{-- Edit --}}

        <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit ICT Control</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value=""
                                    placeholder="Category Name" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

        <div class="row">

            {{-- Show index --}}

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h3>ICT Control</h3>
                    </div>
                    {{--
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        {{ $category->name }}

                                        <div class="button-group d-flex">
                                            <button type="button" class="btn btn-sm btn-primary mr-1 edit-category"
                                                data-toggle="modal" data-target="#editCategoryModal"
                                                data-id="{{ $category->id }}"
                                                data-name="{{ $category->name }}">Edit
                                            </button>

                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>

                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>

                                        </div>
                                    </div>

                                    @if ($category->children)
                                        <ul class="list-group mt-2">
                                            @foreach ($category->children as $child)
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        {{ $child->name }}

                                                        <div class="button-group d-flex">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary mr-1 edit-category"
                                                                data-toggle="modal" data-target="#editCategoryModal"
                                                                data-id="{{ $child->id }}"
                                                                data-name="{{ $child->name }}">Edit
                                                            </button>

                                                            <form action="{{ route('category.destroy', $child->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">Delete</button>
                                                            </form>

                                                            <form action="{{ route('category.destroy', $child->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">Delete</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </li>
                            @endforeach

                            @foreach ($subCategories as $subCategory)
                                @if ($subCategory->parent)
                                    <ul class="list-group mt-2">
                                        @foreach ($subCategory->parent as $par)
                                            <li class="list-group-item">
                                                <div class="d-flex justify-content-between">
                                                    {{ $par->name }}

                                                    <div class="button-group d-flex">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary mr-1 edit-category"
                                                            data-toggle="modal" data-target="#editCategoryModal"
                                                            data-id="{{ $child->id }}"
                                                            data-name="{{ $child->name }}">Edit
                                                        </button>

                                                        <form action="{{ route('category.destroy', $child->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </form>

                                                        <form action="{{ route('category.destroy', $par->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endforeach


                        </ul>
                    </div> --}}


                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Control Name</th>
                                    <th>Parent Control</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($categories))
                                    <?php $_SESSION['i'] = 0; ?>
                                    @foreach ($categories as $category)
                                        <?php $_SESSION['i'] = $_SESSION['i'] + 1; ?>
                                        <tr>
                                            <?php $dash = ''; ?>
                                            <td>{{ $_SESSION['i'] }}</td>
                                            <td>{{ $category->name }}</td>

                                            <td>
                                                @if (isset($category->parent_id))
                                                    {{ $category->subcategory->name }}
                                                @else
                                                    None
                                                @endif
                                            </td>

                                            {{-- <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('category.edit', $category->id) }}">Edit</a>

                                                <form action="{{ route('category.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </a>
                                                </form>
                                            </td> --}}

                                        </tr>
                                        @if (count($category->subcategory))
                                            @include('categories/sub-category-list', [
                                                'subcategories' => $category->subcategory,
                                            ])
                                        @endif
                                    @endforeach
                                    <?php unset($_SESSION['i']); ?>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Create --}}

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Create ICT Control</h3>
                    </div>

                    <div class="card-body">

                        <form role="form" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Category name*</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Category name" value="{{ old('name') }}" required />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Select parent category*</label>
                                            <select type="text" name="parent_id" class="form-control">
                                                <option value="" disabled selected>Select</option>
                                                @if ($categories)
                                                    @foreach ($categories as $category)
                                                        <?php $dash = ''; ?>
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                        @if (count($category->subcategory))
                                                            @include('categories/subCategoryList-option', [
                                                                'subcategories' => $category->subcategory,
                                                            ])
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Create</button>

                            </div>
                        </form>


                        {{-- <form action="{{ route('category.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <select class="form-control" name="parent_id">
                                    <option value="">Select Parent ICT Control</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Category Name" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



    <script type="text/javascript">
        $('.edit-category').on('click', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var url = "{{ url('category') }}/" + id;

            $('#editCategoryModal form').attr('action', url);
            $('#editCategoryModal form input[name="name"]').val(name);
        });
    </script>


    <p class="text-center text-primary"><small></small></p>

@endsection
