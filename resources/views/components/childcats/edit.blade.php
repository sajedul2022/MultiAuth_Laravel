<x-layouts.master>

    @slot('title')
        Edit Childcategory
    @endslot


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8 pb-2">
                        <div class="pull-left">
                            <h2>Edit Childcategory</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('childcat.index') }}"> Back</a>
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

                    <form action="{{ route('childcat.update', $childcat) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-center">
                            <div class="form-group col-8 pb-2">
                                    <strong>Name:</strong>
                                    <input type="text" name="child_cat_name" value="{{ $childcat->child_cat_name }}"
                                        class="form-control" placeholder="Name">
                                    <span class="text-danger">
                                        @error('child_cat_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group col-8">
                                    <strong>Image:</strong>
                                    <input type="file" class="form-control" name="image">

                                    @isset($childcat->image)
                                        <img src="{{ asset('/images/childcat/' . $childcat->image) }}" alt="childcat_image"
                                            width="100">
                                    @endisset
                            </div>
                            <div class="form-group col-8 pb-2 pt-2">
                                <strong>Sub-Category</strong>
                                <select class="form-control" name="subcat_id" id="">
                                    @foreach ($datas as $row)
                                        <option value="{{ $row->id }}" @selected(old('id', $childcat->subcat_id) == $row->id)>
                                            {{ $row->sub_cat_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 pt-2 pb-2">
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
