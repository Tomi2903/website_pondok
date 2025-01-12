<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftarans;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pendaftaran = Pendaftarans::all();
        return view('public.pages.informasi', compact('pendaftaran'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show the form to create a new pendaftaran
        return view('public.pages.pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

        ]);

        Pendaftarans::create($request->all());

        return redirect()->route('public.pages.sukses')
                         ->with('success', 'pendaftaran created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftarans $campaign)
    {
        // Show a single pendaftaran
        return view('pendaftarans.show', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftarans $campaign)
    {
        // Show the form to edit an existing pendaftaran
        return view('pendaftarans.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftarans $pendaftaran)
    {
        // Validate and update the pendaftaran
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $pendaftaran->update($request->all());

        return redirect()->route('pendaftarans.index')
                         ->with('success', 'pendaftaran updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftarans $campaign)
    {
        // Delete the pendaftaran
        $pendaftaran->delete();

        return redirect()->route('pendaftarans.index')
                         ->with('success', 'pendaftaran deleted successfully.');
    }
}
