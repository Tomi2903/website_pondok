<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftarans;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{

    public function index()
    {
        $pendaftaran = DB::table('pendaftaran')
            ->join('penerimaan', 'pendaftaran.id', '=', 'penerimaan.id_pendaftaran')
            ->select('pendaftaran.id', 'pendaftaran.nama_santri_baru', 'penerimaan.status_pendaftaran')
            ->get();
    
        return view('public.pages.informasi', compact('pendaftaran'));
    }


    


    public function create()
    {
        // Show the form to create a new pendaftaran
        return view('public.pages.pendaftaran');
    }

    public function store(Request $request)
    {
        
        $request->validate([

        ]);

        Pendaftarans::create($request->all());

        return redirect()->route('public.pages.sukses')
                         ->with('success', 'pendaftaran created successfully.');
    }


    public function show(Pendaftarans $campaign)
    {
        // Show a single pendaftaran
        return view('pendaftarans.show', compact('pendaftaran'));
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftarans::findOrFail($id);
    
        return view('admin.form.datasantriedit', compact('pendaftaran'));
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftarans::findOrFail($id);
    
        $request->validate([
            'nama_santri_baru' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string',
            'nama_orang_tua' => 'required|string',
            'nisn' => 'required|numeric',
            'asal_sekolah' => 'required|string',
            'nomor_telepon' => 'required|numeric',
        ]);
    
        $pendaftaran->update($request->all());
    
        return redirect()->route('admin.data_santri')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Pendaftarans $campaign)
    {
        // Delete the pendaftaran
        $campaign->delete();

        return redirect()->route('pendaftarans.index')
                         ->with('success', 'pendaftaran deleted successfully.');
    }


    public function getallpendaftaran()
    {
        $pendaftaran = Pendaftarans::all();
        return view('admin.pages.admin_data_santri', compact('pendaftaran'));
    }

}
