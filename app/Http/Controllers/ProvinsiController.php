<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;


class ProvinsiController extends Controller
{
    // private $apiUrl = 'https://wilayah.id/api/provinsi';
    // public function index()
    // {
    //     $provinsis = Http::get($this->apiUrl)->json();
    //     return view('provinsi.index', compact('provinsis'));
    // }
    // public function show($id)
    // {
    //     $provinsi = Http::get("{$this->apiUrl}/{$id}")->json();
    //     return view('provinsi.show', compact('provinsi'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|unique:provinsis|max:255',
    //     ]);

    //     // Simpan ke database menggunakan model Provinsi
    //     Provinsi::create([
    //         'nama' => $request->input('nama'),
    //     ]);

    //     return redirect()->route('provinsi.index')->with('success', 'Provinsi berhasil ditambahkan');
    // }


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
    public function create()
    {
        $provinsis = Provinsi::all();
        return view('provinsi.create', compact('provinsis'));
    }
    public function edit($id)
    {
        $product = Provinsi::find($id);
        return view('provinsi.edit', compact('provinsis'));
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|unique:provinsis|max:255',
    //     ]);

    //     // Simpan data ke dalam database lokal (misalnya menggunakan Eloquent)
    //     $provinsi = Provinsi::create([
    //         'nama' => $request->input('nama'),
    //     ]);

    //     // Jika berhasil disimpan, kembalikan respons sukses
    //     return response()->json(['message' => 'Provinsi berhasil ditambahkan', 'provinsi' => $provinsi], 201);
    // }
    
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
    public function store(Request $request)
{
    // Validate the input
    $request->validate([
        'nama' => 'required|max:255',
    ]);

    try {
        // Create a new Provinsi instance
        $provinsi = new Provinsi();
        
        // Set the 'nama' attribute
        $provinsi->nama = $request->input('nama');

        // Save the instance to the database
        $provinsi->save();

        // Return a response (e.g., for API)
        return response()->json($provinsi);

        // OR

        // Redirect the user (e.g., for web form submission)
        return redirect()->route('provinsi.index')->with('success', 'Provinsi berhasil ditambahkan');
    } catch (\Exception $e) {
        // Handle the exception (e.g., log it, return an error response)
        return response()->json(['error' => 'Failed to save provinsi'], 500);
    }
}

    

    // public function store(Request $request)
    // {
    //     $provinsi = new Provinsi();
    //     $provinsi->nama = $request->input('nama');
    //     $provinsi->save();
    //     return response()->json($provinsi);
    // }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         // tambahkan validasi lainnya sesuai kebutuhan
    //     ]);

    //     Provinsi::create($request->all());

    //     return redirect()->route('provinsi.index');
    // }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'provinsis_id' => 'required|exists:provinsis,id',
    //         'nama' => 'required',
    //     ]);

    //     Provinsi::create($request->all());

    //     return redirect()->route('provinsi.index');
    // }
    // public function edit(Provinsi $logHarian)
    // {
    //     return view('log-harian.edit', compact('logHarian'));
    // }

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
