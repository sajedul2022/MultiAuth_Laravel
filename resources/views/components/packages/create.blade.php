<x-layouts.master>

    @slot('title')
        Add Package
    @endslot


    <div class="row justify-content-evenly">
        <div class="col-lg-8 margin-tb mb-4 col-md-8 ">
            <div class="pull-left">
                <h2>Create New
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('package.index') }}"> Back</a>
                    </div>
                </h2>
            </div>
        </div>
    </div>

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

            {{-- <div class="col-xs-8 mb-3"> --}}
                <div class="form-group col-8 pb-2">
                    <strong> Package Name:</strong>
                    <input type="text" name="package_name" value="{{old('package_name')}}" class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('package_name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-8 pb-2">
                    <strong> Package Price:</strong>
                    <input type="text" name="package_price" value="{{old('package_price')}}" class="form-control" placeholder="Amount">
                    <span class="text-danger">
                        @error('package_price')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                {{-- <div class="form-group col-8 pb-2">
                    <strong> Purchase Date:</strong>
                    <input type="date" name="purchase_date" value="{{old('purchase_date')}}" class="form-control" placeholder="Purchase Date">
                    <span class="text-danger">
                        @error('purchase_date')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-8 pb-2">
                    <strong> Expire Date:</strong>
                    <input type="date" name="expire_date" value="{{old('expire_date')}}" class="form-control" placeholder="Expire Date">
                    <span class="text-danger">
                        @error('expire_date')
                        {{$message}}
                        @enderror
                    </span>
                </div> --}}
                <div class="form-group col-8 pb-2">
                    <strong> Package Duration:</strong>
                    <input type="text" name="package_duration" value="{{old('package_duration')}}" class="form-control" placeholder="Duration">
                    <span class="text-danger">
                        @error('package_duration')
                        {{$message}}
                        @enderror
                    </span>
                </div>

            <div class="col-xs-12 mt-3 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</x-layouts.master>
