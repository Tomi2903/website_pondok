<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerimaans;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaftarans;

class PenerimaanController extends Controller
{

    public function index()
    {
        $penerimaan = DB::table('penerimaan')
            ->join('pendaftaran', 'penerimaan.id_pendaftaran', '=', 'pendaftaran.id')
            ->select('penerimaan.id as penerimaan_id', 'pendaftaran.nama_santri_baru', 'penerimaan.status_pendaftaran')
            ->get();
    
        $pendaftarans = DB::table('pendaftaran')->get(); // Fetch all pendaftarans
    
        return view('admin.pages.admin_penerimaan', compact('penerimaan', 'pendaftarans'));
    }

    public function copyPendaftaranToPenerimaan()
    {
        Penerimaans::truncate();
    
        $pendaftarans = Pendaftarans::all();
    
        foreach ($pendaftarans as $pendaftaran) {
            Penerimaans::create([
                'id_pendaftaran' => $pendaftaran->id,
                'nama_santri_baru' => $pendaftaran->nama_santri_baru,
                'status_pendaftaran' => null, // No status initially
            ]);
        }
    
        return redirect()->route('penerimaan.index')
                         ->with('success', 'Pendaftaran copied to Penerimaan successfully, with the latest data.');
    }

    public function storeManual(Request $request)
    {
        $request->validate([
            'id_pendaftaran' => 'required|exists:pendaftaran,id', // Validate that id_pendaftaran exists in the pendaftarans table
            'status_diterima' => 'required|boolean', // Ensure it's either 1 or 0
        ]);
    
        Penerimaans::create([
            'id_pendaftaran' => $request->id_pendaftaran,
            'nama_santri_baru' => Pendaftarans::findOrFail($request->id_pendaftaran)->nama_santri_baru,
            'status_pendaftaran' => $request->status_diterima, // Match the database column name
        ]);
    
        return redirect()->route('penerimaan.index')->with('success', 'Data berhasil ditambahkan.');
    }
    
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_pendaftaran' => 'required|boolean',
        ]);
    
        $penerimaan = Penerimaans::findOrFail($id);
        $penerimaan->update([
            'status_pendaftaran' => $request->status_pendaftaran,
        ]);
    
        return redirect()->route('penerimaan.index')->with('success', 'Status berhasil diperbarui.');
    }

    
    public function create()
    {
        return view('penerimaan.create');
    }


    public function store(Request $request)
    {
 
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Penerimaans::create($request->all());

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan created successfully.');
    }


    public function show(Penerimaans $penerimaan)
    {
        return view('penerimaans.show', compact('penerimaan'));
    }

    public function edit(Penerimaans $campaign)
    {
        return view('penerimaans.edit', compact('penerimaan'));
    }


    public function update(Request $request, Penerimaans $penerimaan)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $penerimaan->update($request->all());

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan updated successfully.');
    }


    public function destroy(Penerimaans $penerimaan)
    {
        // Delete the penerimaan
        $penerimaan->delete();

        return redirect()->route('penerimaans.index')
                         ->with('success', 'penerimaan deleted successfully.');
    }


}
