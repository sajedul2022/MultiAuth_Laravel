<x-layouts.master>

    @slot('title')
    Package Trash List
    @endslot

    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Package Trash</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('package.index') }}"> Index List </a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($packages as $package)
            <tr>
                <td>{{ $package->package_name }}</td>
                <td>{{ $package->package_price }}</td>
                <td>{{ $package->package_duration }}</td>
                <td>{{ $package->status }}</td>
                <td>
                    <form action="{{ route('package.restore', $package->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Do you want to restore?')">Restore</button>
                    </form>

                    <form action="{{ route('package.delete', $package->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @can('package-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to Delete?')" >Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-layouts.master>
