<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /* @return \Illuminate\Http\Response
    */
   function __construct()
   {
       $this->middleware(['permission:category-list|category-create|category-edit|category-delete'], ['only' => ['index', 'show']]);
       $this->middleware(['permission:category-create'], ['only' => ['create', 'store']]);
       $this->middleware(['permission:category-edit'], ['only' => ['edit', 'update']]);
       $this->middleware(['permission:category-delete'], ['only' => ['destroy']]);
   }
    public function index()
    {
        $categories = Category::latest()->paginate(50);
        return view('components.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.categories.create');
    }


    // public function uploadImage($file)
    // {
    //     $imageName = time() . '.' . $file->extension();
    //     $image = Image::make($file)->resize(300, 200);
    //     // $image->brightness (70);
    //     $image->save(storage_path('app/public/images/') . $imageName);
    //     return $imageName;
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'cat_name' => 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $data = [];
        $data['cat_name'] = $request->cat_name;

        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/images/cat/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        // $data['image'] = $imageName;


        Category::create($data);

        return redirect()->route('category.index')
            ->withInput()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
         // return view('components.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('components.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        request()->validate([
            'cat_name' => 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $data = [];
        $data['cat_name'] = $request->cat_name;

        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/images/cat/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        $category->update($data);

        return redirect()->route('category.index')
            ->withInput()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', ' Deleted successfully');
    }

    public function trash()
    {
        $category = Category::latest()->onlyTrashed()->paginate(15);
        return view('components.categories.trash', compact('category'));
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        return redirect()->route('category.index')->with('success', 'Data Restored Successfully');
    }

    public function delete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();
        return redirect()->route('category.trash')->with('success', 'Data Deleted Successfully');
    }
}
