<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogHarian;
use App\Models\Pegawai;


class LogHarianController extends Controller
{
    public function index()
    {
        $logHarians = LogHarian::with('pegawai')->get();
        return view('log-harian.index', compact('logHarians'));
    }

    public function create()
    {
        $pegawais = Pegawai::all();
        return view('log-harian.create', compact('pegawais'));
    }
    // public function edit(string $id)
    // {
    //     $pegawais->Pegawai::all();
    //     return view('log-harian.edit', compact('pegawais'));
    // }

    public function store(Request $request)
    {
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id',
            'log_text' => 'required',
        ]);

        LogHarian::create($request->all());

        return redirect()->route('log-harian.index');
    }

    public function verify(LogHarian $logHarian)
    {
        return view('log-harian.verify', compact('logHarian'));
    }

    public function approve(LogHarian $logHarian)
    {
        $logHarian->update(['status' => 'Disetujui']);
        return redirect()->route('log-harian.index');
    }

    public function reject(LogHarian $logHarian)
    {
        $logHarian->update(['status' => 'Ditolak']);
        return redirect()->route('log-harian.index');
    }
    
    

}
