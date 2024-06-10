<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    function __construct()
   {
       $this->middleware(['permission:subcategory-list|subcategory-create|subcategory-edit|subcategory-delete'], ['only' => ['index', 'show']]);
       $this->middleware(['permission:subcategory-create'], ['only' => ['create', 'store']]);
       $this->middleware(['permission:subcategory-edit'], ['only' => ['edit', 'update']]);
       $this->middleware(['permission:subcategory-delete'], ['only' => ['destroy']]);
   }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcats = Subcategory::all();
        return view('components.subcategories.index', compact('subcats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = Category::get();
        return view('components.subcategories.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'sub_cat_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $data = [];
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_name'] = $request->sub_cat_name;

        if ($request->file('image')) {

            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/images/subcat/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        Subcategory::create($data);

        return redirect()->route('subcategory.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        $datas = Category::get();
        return view('components.subcategories.edit', compact('subcategory','datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        request()->validate([
            'sub_cat_name' => 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $data = [];
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_name'] = $request->sub_cat_name;

        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/images/subcat/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        $subcategory->update($data);

        return redirect()->route('subcategory.index')
            ->withInput()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index')
            ->with('success', ' Deleted successfully');
    }

    public function subtrash()
    {
        $subcats = Subcategory::latest()->onlyTrashed()->paginate(15);
        return view('components.subcategories.trash', compact('subcats'));
    }

    public function restore($id)
    {
        $subcat = Subcategory::onlyTrashed()->find($id);
        $subcat->restore();
        return redirect()->route('subcategory.index')->with('success', 'Data Restored Successfully');
    }

    public function delete($id)
    {
        $subcat = Subcategory::onlyTrashed()->find($id);
        $subcat->forceDelete();
        return redirect()->route('subcategory.trash')->with('success', 'Data Deleted Successfully');
    }
}
