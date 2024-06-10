<x-layouts.master>

    @slot('title')
        Add Subcategory
    @endslot


    <div class="row">
        <div class="col-lg-8 margin-tb mb-4">
            <div class="pull-left">
                <h2>Create New
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('subcategory.index') }}"> Back</a>
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

    <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Category</strong>
                <select name="cat_id" id="" required>
                    <option value="" disabled selected>Select one</option>

                    @foreach ($datas as $row )
                        <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong> Subcategory Name:</strong>
                    <input type="text" name="sub_cat_name" value="{{old('sub_cat_name')}}" class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('sub_cat_name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                </div>
            </div>

            {{-- <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div> --}}
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</x-layouts.master>
