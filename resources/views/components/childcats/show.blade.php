<x-layouts.master>

    @slot('title')
        Details Category
    @endslot


    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2> Show category
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Back</a>
                    </div>
                </h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $category->detail }}
            </div>
        </div>
    </div>
</x-layouts.master>
