<?php

namespace App\Http\Controllers;

use App\Models\Purches;
use App\Http\Requests\StorePurchesRequest;
use App\Http\Requests\UpdatePurchesRequest;
use App\Models\Material;
use App\Models\Purches_details;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purches = Purches::orderBy('id', 'desc')->paginate(10);
        return view('admin.purches.all', ['purches' => $purches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('admin.purches.create',['supplier' => $supplier]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchesRequest $request)
    {
         //...... purches........

         $supplier_id = $request->input('supplier_id');
         $total = $request->input('grandtotal');
 
 
         $purchesC = Purches::create([
             'supplier_id' => $supplier_id,
             'total' => $total,
         ]);
 
         //...... purches_details........
 
         if ($purchesC) {
             $purches = $request->input('purches', []);
             $details = [];
 
             foreach ($purches as $row) {
                 $material_id = $row['material_id'];
                 $qty = $row['qty'];
 
 
                 $details[] = [
                     'purches_id' => $purchesC->id,
                     'material_id' => $material_id,
                     'quantity' => $qty,
                 ];
             }
 
 
             Purches_details::insert($details);

            //  ...........Stock...............

             foreach ($details as $detail) {
                $material = Material::find($detail['material_id']);
                if ($material) {
                    $material->quantity += $detail['quantity'];
                    $material->save();
                }
            }
         }


 
         return response()->json([
             'status' => 'success',
             'message' => 'Purches created successfully!',
 
         ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $purches = Purches::find($id);
    
        if (!$purches) {
            return response()->json([
                'status' => 'error',
                'message' => 'Purches not found',
            ], 404);
        }
    
        $purches->load(['purches_details.material']);
    
        return view('admin.purches.show')->with(['purches' => $purches]);
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purches $purches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchesRequest $request, Purches $purches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purches $purches)
    {
        if (Purches::destroy($purches->id)) {
            return redirect("purches")->with("success", "Successfully Deleted");
        }
    }


    public function mtsearch(Request $request)
    {
        if ($request->has('term')) {
            $term = $request->input('term');
            $materials = Material::where('name', 'LIKE', '%' . $term . '%')
                ->select('id', 'name', 'unit', 'quantity','price')
                ->get();

            $return_arr = [];
            foreach ($materials as $material) {
                $return_arr[] = [
                    'label' => $material->name,
                    'value' => $material->name,
                    'id' => $material->id,
                    'name' => $material->name,
                    'unit' => $material->unit,
                    'quantity' => $material->quantity,
                    'price' => $material->price,


                ];
            }

            return response()->json($return_arr);
        }
    }
}
