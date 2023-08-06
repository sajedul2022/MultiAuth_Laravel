@extends('layouts.app')
@section('title', 'Create Questionnaire')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Question</h2>
            </div>
            <div class="">
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
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row">

            <div class="form-group">
                <label for="category_id">ICT Control </label>
                <select class="form-control" name="category_id" required>

                    <option value="" disabled selected>Select</option>
                    @if ($categories)
                        @foreach ($categories as $category)
                            <?php $dash = ''; ?>
                            <option value="{{ $category->id }}">{{ $category->name }}
                            </option>
                            @if (count($category->subcategory))
                                @include('categories/subCategoryList-option', [
                                    'subcategories' => $category->subcategory,
                                ])
                            @endif
                        @endforeach
                    @endif

                    {{-- <option value="">Select a Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                        @if ($category->children)
                            @foreach ($category->children as $child)
                                <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                            @endforeach
                        @endif
                    @endforeach --}}
                </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>

          


            <div class="modal-body">

                
                <div class="form-group" id="a_cf-tf" >
                    <label for="">Correct choice</label>
                    <select id="c-tf" class="form-control" name="c-tf">
                        <option value="1">True</option>
                        <option value="0">False</option>
                    </select>
                </div>


                {{-- <input type="hidden" id="a_qid" value="{{ $q->questionnaire_id }}"> --}}

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add Question</button>
            </div>

        </div>

        </div>
    </form>
    <p class="text-center text-primary"><small></small></p>
@endsection
