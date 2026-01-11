<?php

namespace App\Http\Controllers;

use App\Models\tab;
use App\Http\Requests\StoretabRequest;
use App\Http\Requests\UpdatetabRequest;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabs = tab::orderBy('id', 'desc')->paginate(10);
        return view('admin.tabs.all', ['tabs' => $tabs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tabs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretabRequest $request)
    {
        tab::create($request->all());

        return redirect("tab")->with("success", "Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(tab $tab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tab $tab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetabRequest $request, tab $tab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tab $tab)
    {
        //
    }
}
