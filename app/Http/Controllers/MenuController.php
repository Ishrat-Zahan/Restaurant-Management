<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Material;
use App\Models\MaterialDetail;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::with(['category', 'subcategory', 'images'])->orderBy('id', 'desc')->paginate(10);
        return view('admin.menu.all', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::pluck('name', 'id');
        return view("admin.menu.create")
            ->with("menu", null)
            ->with("categories", $cats)
            ->with("subcategories", []);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(StoreMenuRequest $request)
    {
        $menu = Menu::create($request->all());

        if (!$menu) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create menu.',
            ]);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $loc = $file->store('uploads');
                $i = new Image();
                $i->name = $loc;
                $menu->images()->save($i);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Image not available.',
            ]);
        }

        $materials = json_decode($request->input('materials', '[]'), true);
        $details = [];

        foreach ($materials as $row) {
            $material_id = $row['material_id'];
            $qty = $row['qty'];

            $details[] = [
                'menu_id' => $menu->id,
                'material_id' => $material_id,
                'quantity' => $qty,
            ];
        }

        MaterialDetail::insert($details);

        foreach ($details as $row) {

            
            $material_id = $row['material_id'];
            $qty = $row['quantity'];

            $material = Material::findOrFail($material_id);
            $newQuantity = $material->quantity - $qty;

            if ($newQuantity < 0) {
               
                $menu->delete();
                MaterialDetail::where('menu_id', $menu->id)->delete();
                return response()->json([
                    'status' => 'error',
                    'message' => 'Insufficient material quantity for menu creation.',
                ]);
            }

            $material->update([
                'quantity' => $newQuantity,
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Menu created successfully!',
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if (Menu::destroy($menu->id)) {
            return redirect("menu")->with("success", "Successfully Deleted");
        }
    }
}
