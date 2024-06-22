<x-layouts.master>

    @slot('title')
        Edit Subcategory
    @endslot


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8 pb-2">
                        <div class="pull-left">
                            <h2>Edit Subcategory</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('subcategory.index') }}"> Back</a>
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

                    <form action="{{ route('subcategory.update', $subcategory) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-center">
                            <div class="form-group col-8 pb-2">
                                <strong>Name:</strong>
                                <input type="text" name="sub_cat_name" value="{{ $subcategory->sub_cat_name }}"
                                    class="form-control" placeholder="Name">
                                <span class="text-danger">
                                    @error('sub_cat_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-8">
                                <strong>Image:</strong>
                                <input type="file" class="form-control" name="image">

                                @isset($subcategory->image)
                                    <img src="{{ asset('/images/subcat/' . $subcategory->image) }}" alt="subcat_image"
                                        width="100">
                                @endisset
                            </div>
                            <div class="form-group col-8 pb-2 pt-2">
                                <strong>Category</strong>
                                <select class="form-control" name="cat_id" id="" required>
                                    @foreach ($datas as $row)
                                        <option value="{{ $row->id }}" @selected(old('id', $subcategory->cat_id) == $row->id)>
                                            {{ $row->cat_name }}
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
