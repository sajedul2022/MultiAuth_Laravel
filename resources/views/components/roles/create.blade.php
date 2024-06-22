<x-layouts.master>

    @slot('title')
        Create Role
    @endslot

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8  mb-2">
                        <div class="pull-left">
                            <h2>Create New</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
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

                    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                    <div class="row justify-content-center">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            <br>
                        </div>

                        <div class="row">
                            <div class="pb-3">
                                <strong>Permission:</strong>
                            </div>
                            @foreach ($permission as $value)
                                <div class="col-md-3 list-group wrap">
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-xs-12 mb-2 ">
                            <div class="float-end">
                                <button type="submit" class=" btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</x-layouts.master>
