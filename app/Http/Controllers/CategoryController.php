<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::with('children')->whereNull('parent_id')->get();
        // return view('categories.index')->with(['categories'  => $categories,]);


        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        return view('categories.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $this->validate($request, [
        //     'name'      => 'required|min:3|max:255|string',
        //     'parent_id' => 'sometimes|nullable|numeric'
        // ]);
        // Category::create($validatedData);
        // return redirect()->route('category.index')->withSuccess('You have successfully created a Category!');



        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        if ($request->method() == 'GET') {
            return view('categories.index', compact('categories'));
        }
        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'name'      => 'required',
                // 'slug'      => 'required|unique:categories',
                'parent_id' => 'nullable|numeric'
            ]);

            Category::create([
                'name' => $request->name,
                // 'slug' => $request->slug,
                'parent_id' => $request->parent_id
            ]);

            // return redirect()->back()->with('success', 'Category has been created successfully.');
            return redirect()->route('category.index')->withSuccess('You have successfully created a Category!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {

    // }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        // $validatedData = $this->validate($request, [
        //     'name'  => 'required|min:3|max:255|string'
        // ]);
        // $category->update($validatedData);
        // return redirect()->route('category.index')->withSuccess('You have successfully updated a Category!');

        $category = Category::findOrFail($id);
        if ($request->method() == 'GET') {
            $categories = Category::where('parent_id', null)->where('id', '!=', $category->id)->orderby('name', 'asc')->get();
            return view('categories.edit', compact('category', 'categories'));
        }

        if ($request->method() == 'POST') {
            $validator = $request->validate([
                'name'     => 'required',
                // 'slug' => ['required', Rule::unique('categories')->ignore($category->id)],
                'parent_id' => 'nullable|numeric'
            ]);
            if ($request->name != $category->name || $request->parent_id != $category->parent_id) {
                if (isset($request->parent_id)) {
                    $checkDuplicate = Category::where('name', $request->name)->where('parent_id', $request->parent_id)->first();
                    if ($checkDuplicate) {
                        return redirect()->back()->with('error', 'Category already exist in this parent.');
                    }
                } else {
                    $checkDuplicate = Category::where('name', $request->name)->where('parent_id', null)->first();
                    if ($checkDuplicate) {
                        return redirect()->back()->with('error', 'Category already exist with this name.');
                    }
                }
            }

            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            $category->save();
            // return redirect()->back()->with('success', 'Category has been updated successfully.');
            return redirect()->route('category.index')->withSuccess('You have successfully updated a Category!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->children) {
            foreach ($category->children()->with('products')->get() as $child) {
                foreach ($child->products as $product) {
                    $product->update(['category_id' => NULL]);
                }
            }

            $category->children()->delete();
        }

        foreach ($category->products as $product) {
            $product->update(['category_id' => NULL]);
        }

        $category->delete();

        return redirect()->route('category.index')->withSuccess('You have successfully deleted a Category!');
    }
}












    // public function createCategory(Request $request)
    // {
    //     $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
    //     if($request->method()=='GET')
    //     {
    //         return view('categories.create-category', compact('categories'));
    //     }
    //     if($request->method()=='POST')
    //     {
    //         $validator = $request->validate([
    //             'name'      => 'required',
    //             // 'slug'      => 'required|unique:categories',
    //             'parent_id' => 'nullable|numeric'
    //         ]);

    //         Category::create([
    //             'name' => $request->name,
    //             // 'slug' => $request->slug,
    //             'parent_id' =>$request->parent_id
    //         ]);

    //         return redirect()->back()->with('success', 'Category has been created successfully.');
    //     }
    // }
