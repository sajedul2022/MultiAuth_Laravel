<x-layouts.master>

    @slot('title')
        Add Package
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
                        <a class="btn btn-primary" href="{{ route('package.index') }}"> Back</a>
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

                    <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-8 pb-2">
                                <strong> Package Name:</strong>
                                <input type="text" name="package_name" value="{{ old('package_name') }}"
                                    class="form-control" placeholder="Name">
                                <span class="text-danger">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-8 pb-2">
                                <strong> Package Price:</strong>
                                <input type="text" name="package_price" value="{{ old('package_price') }}"
                                    class="form-control" placeholder="Amount">
                                <span class="text-danger">
                                    @error('package_price')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-8 pb-2">
                                <strong> Package Duration:</strong>
                                <input type="text" name="package_duration" value="{{ old('package_duration') }}"
                                    class="form-control" placeholder="Duration">
                                <span class="text-danger">
                                    @error('package_duration')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-xs-12 mb-2 ">
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
