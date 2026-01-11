<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Cuser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.customer.all', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $u = User::create($request->all());
        
        if($request->customerModal){
            return response()->json($u);
        }
        else{
            return redirect("cuser")->with("success", "Successfully created");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = User::find($id);
        return view('admin.customer.edit',['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = User::find($id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->save();
        
        return redirect()->route("cuser.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (User::destroy($id)) {
            return redirect("cuser")->with("success", "Successfully Deleted");
        }
    }
}
