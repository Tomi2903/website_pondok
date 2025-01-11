<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Penerimaans;

class penerimaan extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $penerimaan = penerimaan::all();
        return view('penerimaan.index', compact('penerimaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show the form to create a new campaign
        return view('penerimaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Campaign::create($request->all());

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function show(penerimaan $penerimaan)
    {
        // Show a single penerimaan
        return view('penerimaans.show', compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(penerimaan $campaign)
    {
        // Show the form to edit an existing penerimaan
        return view('penerimaans.edit', compact('penerimaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penerimaan  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penerimaan $penerimaan)
    {
        // Validate and update the penerimaan
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $campaign->update($request->all());

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penerimaan $penerimaan)
    {
        // Delete the penerimaan
        $campaign->delete();

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan deleted successfully.');
    }


}
