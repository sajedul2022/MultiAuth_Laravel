<x-layouts.master>

    @slot('title')
        Edit Permission
    @endslot


    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Edit Permission
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('permission.index') }}"> Back</a>
                    </div>
                </h2>
            </div>
        </div>
    </div>

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

    <form action="{{ route('permission.update', $permission) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Permission Name:</strong>
                    <input type="text" name="name" value="{{ $permission->name }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

</x-layouts.master>
