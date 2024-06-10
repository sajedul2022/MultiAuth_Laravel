<x-layouts.master>

    @slot('title')
        Edit Childcategory
    @endslot


    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Edit Child-Category
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('childcat.index') }}"> Back</a>
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

    <form action="{{ route('childcat.update', $childcat) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="child_cat_name" value="{{ $childcat->child_cat_name }}"
                        class="form-control" placeholder="Name">
                    <span class="text-danger">
                        @error('child_cat_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" class="form-control" name="image">

                    @isset($childcat->image)
                        <img src="{{ asset('/images/childcat/'. $childcat->image) }}" alt="childcat_image" width="100">
                    @endisset
                </div>
            </div>
            <div class="form-group">
                <strong>Sub-Category</strong>
                <select name="subcat_id" id="">
                    @foreach ($datas as $row)
                        <option value="{{ $row->id }}"  @selected(old('id', $childcat->subcat_id) == $row->id) >
                            {{ $row->sub_cat_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

</x-layouts.master>
