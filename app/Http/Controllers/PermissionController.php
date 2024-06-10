<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::latest()->paginate(50);
        return view('components.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:3',
        ]);

        $data = [];
        $data['name'] = $request->name;
        // $data['guard_name'] = $request->guard_name;
        $data['created_at'] = $request->created_at;
        $data['updated_at'] = $request->updated_at;

        Permission::create($data);

        return redirect()->route('permission.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('components.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        request()->validate([
            'name' => 'required|min:3',
        ]);

        $data = [];
        $data['name'] = $request->name;
        // $data['guard_name'] = $request->guard_name;
        $data['created_at'] = $request->created_at;
        $data['updated_at'] = $request->updated_at;

        $permission->update($data);

        return redirect()->route('permission.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permission.index')
            ->with('success', ' Deleted successfully');
    }

    public function pertrash()
    {
        $permissions = Permission::latest()->onlyTrashed()->paginate(15);
        return view('components.permissions.trash', compact('permissions'));
    }

    public function restore($id)
    {
        $permission = Permission::onlyTrashed()->find($id);
        $permission->restore();
        return redirect()->route('permission.index')->with('success', 'Data Restored Successfully');
    }

    public function delete($id)
    {
        $permission = Permission::onlyTrashed()->find($id);
        $permission->forceDelete();
        return redirect()->route('permission.trash')->with('success', 'Data Deleted Successfully');
    }
}
