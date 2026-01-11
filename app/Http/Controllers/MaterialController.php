<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;


class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $material = Material::orderBy('id', 'desc')->paginate(10);
        return view('admin.material.all', ['material' => $material]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request)
    {
        Material::create($request->all());
        return redirect("material")->with("success", "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        if (Material::destroy($material)) {
            return redirect("material")->with("success", "Successfully Deleted");
        }
    }

    
}
