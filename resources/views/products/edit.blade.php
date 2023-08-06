@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Question</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="form-group">
                <label for="category_id">Category</label>

                <select class="form-control" name="category_id" required>
                    <option value="" disabled selected>Select</option>
                    @if ($categories)
                        @foreach ($categories as $category)
                            <?php $dash = ''; ?>
                            <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }} >{{ $category->name }}
                            </option>
                            @if (count($category->subcategory))
                                @include('categories/EditSubCategoryList-option', [
                                    'subcategories' => $category->subcategory,
                                ])
                            @endif
                        @endforeach
                    @endif
                </select>

                {{-- <select class="form-control" name="category_id" required>
                    <option value="">Select a Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @if ($category->children)
                            @foreach ($category->children as $child)
                                <option value="{{ $child->id }}" {{ $child->id === $product->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                            @endforeach
                        @endif
                    @endforeach
                </select> --}}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <p class="text-center text-primary"><small></small></p>
@endsection