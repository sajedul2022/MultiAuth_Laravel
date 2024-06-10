<x-layouts.master>

    @slot('title')
        Edit Package
    @endslot


    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Edit Package
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('package.index') }}"> Back</a>
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

    <form action="{{ route('package.update', $package) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Package Name:</strong>
                    <input type="text" name="package_name" value="{{ $package->package_name }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('package_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="package_price" value="{{ $package->package_price }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('package_price')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            {{-- <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Purchase Date:</strong>
                    <input type="date" name="purchase_date" value="{{ $package->purchase_date }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('purchase_date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Expire Date:</strong>
                    <input type="date" name="expire_date" value="{{ $package->expire_date }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('expire_date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div> --}}
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <input type="text" name="package_duration" value="{{ $package->package_duration }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('package_duration')
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
