<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    // Menampilkan semua data aset
    public function index()
    {
        $asets = Aset::all();

        return view('aset.index', compact('asets'));
    }

    // Menampilkan form tambah aset
    public function create()
    {
        return view('aset.create');
    }

    // Menyimpan data aset
    public function store(Request $request)
    {
        $request->validate([
            'nama_aset' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|string|max:100',
            'lokasi' => 'required|string|max:255',
            'tanggal_perolehan' => 'required|date',
        ]);

        Aset::create([
            'nama_aset' => $request->nama_aset,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'lokasi' => $request->lokasi,
            'tanggal_perolehan' => $request->tanggal_perolehan,
        ]);

        return redirect()
            ->route('aset.index')
            ->with('success', 'Data aset berhasil ditambahkan!');
    }

    // Menampilkan detail aset
    public function show($id)
    {
        $aset = Aset::findOrFail($id);

        return view('aset.show', compact('aset'));
    }

    // Menampilkan form edit aset
    public function edit($id)
    {
        $aset = Aset::findOrFail($id);

        return view('aset.edit', compact('aset'));
    }

    // Mengupdate data aset
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aset' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|string|max:100',
            'lokasi' => 'required|string|max:255',
            'tanggal_perolehan' => 'required|date',
        ]);

        $aset = Aset::findOrFail($id);

        $aset->update([
            'nama_aset' => $request->nama_aset,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'lokasi' => $request->lokasi,
            'tanggal_perolehan' => $request->tanggal_perolehan,
        ]);

        return redirect()
            ->route('aset.index')
            ->with('success', 'Data aset berhasil diperbarui!');
    }

    // Menghapus data aset
    public function destroy($id)
    {
        $aset = Aset::findOrFail($id);

        $aset->delete();

        return redirect()
            ->route('aset.index')
            ->with('success', 'Data aset berhasil dihapus!');
    }
}