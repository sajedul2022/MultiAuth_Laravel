<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::latest()->paginate(50);
        return view('components.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'package_name' => 'required|min:3',
            'package_price' => 'required|min:5',
            'purchase_date' => 'date_format:Y-m-d',
        ]);

        $data = [];
        $data['package_name'] = $request->package_name;
        $data['package_price'] = $request->package_price;
        $myDate = $request->purchase_date;
        $data['purchase_date'] = $myDate;
        $myDate2 = $request->expire_date;
        $data['expire_date'] = $myDate2;
        $data['package_duration'] = $request->package_duration;
        $user = auth()->user()->getAuthIdentifier();
        $data['package_entry_by'] =  $user;
        $data['package_updated_by'] =  $user ?? NULL;

        Package::create($data);

        return redirect()->route('package.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('components.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        request()->validate([
            'package_name' => 'required|min:3',
            'package_price' => 'required|min:5',
            'purchase_date' => 'date_format:Y-m-d',
        ]);

        $data = [];
        $data['package_name'] = $request->package_name;
        $data['package_price'] = $request->package_price;
        // $myDate = $request->purchase_date;
        // $data['purchase_date'] = $myDate;
        // $myDate2 = $request->expire_date;
        // $data['expire_date'] = $myDate2;
        $data['package_duration'] = $request->package_duration;
        $user = auth()->user()->getAuthIdentifier();
        $data['package_entry_by'] =  $user;
        $data['package_updated_by'] =  $user ?? NULL;

        $package->update($data);

        return redirect()->route('package.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('package.index')
            ->with('success', ' Deleted successfully');
    }

    public function pkgtrash()
    {
        $packages = Package::latest()->onlyTrashed()->paginate(15);
        return view('components.packages.trash', compact('packages'));
    }

    public function restore($id)
    {
        $package = Package::onlyTrashed()->find($id);
        $package->restore();
        return redirect()->route('package.index')->with('success', 'Data Restored Successfully');
    }

    public function delete($id)
    {
        $package = Package::onlyTrashed()->find($id);
        $package->forceDelete();
        return redirect()->route('package.trash')->with('success', 'Data Deleted Successfully');
    }
}
