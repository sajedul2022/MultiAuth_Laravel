<x-layouts.master>

    @slot('title')
        Edit Category
    @endslot

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8  pb-2">
                        <div class="pull-left">
                            <h2>Edit category</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('category.update', $category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-center">
                            <div class="form-group col-8 pb-2">
                                    <strong>Name:</strong>
                                    <input type="text" name="cat_name" value="{{ $category->cat_name }}"
                                        class="form-control" placeholder="Name">
                                    <span class="text-danger">
                                        @error('cat_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group col-8">
                                    <strong>Image:</strong>
                                    <input type="file" class="form-control" name="image">
                                    @isset($category->image)
                                        <img src="{{ asset('/images/cat/' . $category->image) }}" alt="cat_image"
                                            width="100">
                                    @endisset
                            </div>

                            <div class="col-xs-12 pt-2 pb-2">
                                <div class="float-end">
                                    <button type="submit" class=" btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.master>
