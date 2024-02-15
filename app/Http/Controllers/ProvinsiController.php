<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::all();
        return response()->json($provinsis);
        
    }

    public function show($id)
    {
        $provinsi = Provinsi::find($id);
        return response()->json($provinsi);
    }
    public function edit($id)
    {
        $product = Provinsi::find($id);
        return view('provinsi.edit', compact('provinsis'));
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'provinsi_id' => 'required|exists:provinsis,id',
    //         // 'log_text' => 'required',
    //     ]);

    //     Provinsi::create($request->all());

    //     return redirect()->route('provinsi.index');
    // }
    // public function update(Request $request, $id)
    // {
    //     // Logika untuk menyimpan data yang diedit
    // }

    // public function destroy($id)
    // {
    //     $product = Provinsi::find($id);
    //     $product->delete();
    //     return redirect()->route('provinsi.index')->with('success', 'Produk berhasil dihapus');
    // }
    public function create()
    {
        $pegawais = Provinsi::all();
        return view('provinsi.create', compact('pegawais'));
    }

    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->nama = $request->input('nama');
        $provinsi->save();
        return response()->json($provinsi);
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'provinsi_id' => 'required|exists:provinsis,id',
    //         // 'log_text' => 'required',
    //     ]);

    //     Provinsi::create($request->all());

    //     return redirect()->route('provinsi.index');
    // }

    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->nama = $request->input('nama');
        $provinsi->save();
        return response()->json($provinsi);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        return response()->json(['message' => 'Provinsi dihapus']);
    }
}
