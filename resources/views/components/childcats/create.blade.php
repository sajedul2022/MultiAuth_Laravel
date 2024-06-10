<x-layouts.master>

    @slot('title')
        Add Child-Category
    @endslot


    <div class="row justify-content-evenly">
        <div class="col-lg-8 margin-tb mb-4 col-md-8 ">
            <div class="pull-left">
                <h2>Create New
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('childcat.index') }}"> Back</a>
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

    <form action="{{ route('childcat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="form-group col-8 pb-2">
                <strong>Sub-Category</strong>
                <select name="subcat_id" id="" required>
                    <option value="" disabled selected>Select one</option>

                    @foreach ($datas as $row )
                        <option value="{{ $row->id }}">{{ $row->sub_cat_name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- <div class="col-xs-8 mb-3"> --}}
                <div class="form-group col-8 pb-2">
                    <strong> Subcategory Name:</strong>
                    <input type="text" name="child_cat_name" value="{{old('child_cat_name')}}" class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('child_cat_name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            {{-- </div> --}}
            {{-- <div class="col-xs-8 mb-3"> --}}
                <div class="form-group col-8">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                </div>
            {{-- </div> --}}


            <div class="col-xs-12 mt-3 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</x-layouts.master>
