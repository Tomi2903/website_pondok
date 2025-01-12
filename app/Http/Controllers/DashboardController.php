<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Total registrants
        $totalPendaftarans = DB::table('pendaftaran')->count();

        // Accepted and rejected counts
        $totalDiterima = DB::table('penerimaan')->where('status_pendaftaran', 1)->count();
        $totalDitolak = DB::table('penerimaan')->where('status_pendaftaran', 0)->count();

        // Gender distribution
        $genderDistribution = DB::table('pendaftaran')
            ->select('jenis_kelamin', DB::raw('count(*) as total'))
            ->groupBy('jenis_kelamin')
            ->pluck('total', 'jenis_kelamin');

        // School distribution
        $schoolDistribution = DB::table('pendaftaran')
        ->select('asal_sekolah', DB::raw('count(*) as total'))
        ->groupBy('asal_sekolah')
        ->pluck('total', 'asal_sekolah');
        // Pass data to the view
        return view('admin.pages.dashboard', compact(
            'totalPendaftarans',
            'totalDiterima',
            'totalDitolak',
            'genderDistribution',
            'schoolDistribution'
        ));
    }

    public function registerAdmin(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('status', 'admin-registered');
    }
}
