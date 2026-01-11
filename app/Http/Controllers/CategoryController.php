<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cats'] = Category::orderBy('id', 'desc')->paginate(10);
        return view("admin.category.all", $data);
        // dd(Category::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
        ];

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $path = $file->store('uploads');
            $data['images'] = $path;
        }

        $category = Category::create($data);

        return redirect()->route("category.index")->with("success", "Category saved successfully.");
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
    
        $category->name = $request->name;
    

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $path = $file->store('uploads');
            $category->images = $path;
    
            if ($category->images && Storage::exists($category->images)) {
                Storage::delete($category->images);
            }
        }
    
        $category->save();
    
        return redirect()->route("category.index")->with("success", "Category updated successfully.");
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (Category::destroy($category->id)) {
            return redirect("category")->with("success", "Successfully Deleted");
        }
    }
}
