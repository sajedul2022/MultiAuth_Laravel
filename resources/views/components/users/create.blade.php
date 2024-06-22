<x-layouts.master>

    @slot('title')
        Add User
    @endslot


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-8  mb-2">
                        <div class="pull-left">
                            <h2>Create New User</h2>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
                    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                    <div class="row justify-content-center">
                        <div class="form-group col-5 pb-2">
                            <strong>Name:</strong>
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group wrap col-5 pb-2">
                            <strong>Email:</strong>
                            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-5 pb-2">
                            <strong>Password:</strong>
                            {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group col-5 wrap pb-2">
                            <strong>Confirm Password:</strong>
                            {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group col-8 pb-2">
                            <strong>Role:</strong>
                            {{-- {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple', 'custom-dp']) !!} --}}
                            {!! Form::select('roles[]', $roles, [], ['class' => 'form-select', 'mb-3', 'form-select-lg', 'multiple', 'custom-dp']) !!}
                        </div>

                        {{-- <div class="row justify-content-center pt-3">
                            @foreach ($roles as $value)
                                <div class="col-md-3 list-group wrap">
                                    <label> {!! Form::checkbox('roles[]') !!}
                                        {{ $value }}</label>
                                    <br />
                                </div>
                            @endforeach
                        </div> --}}

                        <div class="col-xs-12 mb-2 ">
                            <div class="float-end">
                                <button type="submit" class=" btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <p class="text-center text-primary"><small>A & A Consulting Ltd.</small></p>
                </div>
            </div>
        </div>
    </div>


</x-layouts.master>
