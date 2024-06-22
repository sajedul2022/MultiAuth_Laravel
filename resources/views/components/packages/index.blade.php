<x-layouts.master>

    @slot('title')
        Package List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>All Packages
                    <div class="float-end">
                        @can('package-create')
                            <a class="btn btn-success" href="{{ route('package.create') }}"> Create New </a>
                        @endcan

                        <a class="btn btn-primary" href="{{ route('package.trash') }}"> Trash List </a>
                    </div>
                </h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive ">
        <table class="table table-striped table-hover">
            <tr>
                <th>Name</th>
                <th>Price</th>
                {{-- <th>Purchase Date</th>
            <th>Expire Date</th> --}}
                <th>Duration</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($packages as $package)
                <tr>
                    <td>{{ $package->package_name }}</td>
                    <td>{{ $package->package_price }}</td>
                    {{-- <td>{{ $package->purchase_date }}</td>
                <td>{{ $package->expire_date }}</td> --}}
                    <td>{{ $package->package_duration }}</td>
                    <td>{{ $package->status }}</td>
                    <td>
                        <form action="{{ route('package.destroy', $package->id) }}" method="POST">

                            @can('package-edit')
                                <a class="btn btn-primary" href="{{ route('package.edit', $package->id) }}"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('package-delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Do you want to Delete?')"><i class="fa fa-trash"
                                        aria-hidden="true"></i>Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layouts.master>
