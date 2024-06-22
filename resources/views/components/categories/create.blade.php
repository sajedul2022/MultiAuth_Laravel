<x-layouts.master>

    @slot('title')
        Add category
    @endslot

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8  mb-2">
                        <div class="pull-left">
                            <h2>Create New</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-8 pb-2">
                                    <strong>Name:</strong>
                                    <input type="text" name="cat_name" value="{{ old('cat_name') }}"
                                        class="form-control" placeholder="Name">
                                    <span class="text-danger">
                                        @error('cat_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group col-8">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="Image">
                            </div>

                            <div class="col-xs-12 mt-3 mb-2">
                                <div class="float-end">
                                    <button type="submit" class=" btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.master>
