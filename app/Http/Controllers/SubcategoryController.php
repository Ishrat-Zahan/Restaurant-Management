<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcat = Subcategory::orderBy('id', 'desc')->paginate(10);
        return view('admin.subcategory.all', compact('subcat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.subcategory.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubcategoryRequest $request)
    {
        if ($request->hasFile('images')) {
            $files = $request->file('images');

            foreach ($files as $file) {
                $path = $file->store('uploads');
                $storagepath = Storage::path($path);

                $data = [
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'images' => $path,

                ];
                $c = Subcategory::create($data);
            }

            return redirect()->route("subcategory.index")->with("success", "subcategory saved successfully.");
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        if(Subcategory::destroy($subcategory->id)){
            return redirect("subcategory")->with("success", "Successfully Deleted");  
        }
    }

    public function getSubcat($catid){
        $sc = Subcategory::where("category_id",$catid)->pluck("name","id");
        return response()->json($sc);
    }
}
