<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;

class PerbaikanController extends Controller
{
    public function index()
    {
        $perbaikans = Perbaikan::all();
        return view('perbaikans.index', compact('perbaikans'));
    }

    public function create()
    {
        return view('perbaikans.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'alamat_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'tipe' => 'required|string|max:255',
            'id_pelapor' => 'required|string|max:255',
            'sumber_internet' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'perangkat_alat' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string|max:255',
            'keterangan_perbaikan' => 'required|string|max:255',
            'petugas_nama' => 'required|string|max:255',
            'petugas_tanda_tangan' => 'required|string|max:255',
            'download_speed' => 'required|numeric',
            'upload_speed' => 'required|numeric',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum menyimpan

        Perbaikan::create($validatedData);

        return redirect()->route('perbaikans.index')->with('success', 'Perbaikan created successfully.');
    }

    public function show(Perbaikan $perbaikan)
    {
        return view('perbaikans.show', compact('perbaikan'));
    }

    public function edit(Perbaikan $perbaikan)
    {
        return view('perbaikans.edit', compact('perbaikan'));
    }

    public function update(Request $request, Perbaikan $perbaikan)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'alamat_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'tipe' => 'required|string|max:255',
            'id_pelapor' => 'required|string|max:255',
            'sumber_internet' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'perangkat_alat' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string|max:255',
            'keterangan_perbaikan' => 'required|string|max:255',
            'petugas_nama' => 'required|string|max:255',
            'petugas_tanda_tangan' => 'required|string|max:255',
            'download_speed' => 'required|numeric',
            'upload_speed' => 'required|numeric',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum memperbarui

        $perbaikan->update($validatedData);

        return redirect()->route('perbaikans.index')->with('success', 'Perbaikan updated successfully.');
    }

    public function destroy(Perbaikan $perbaikan)
    {
        $perbaikan->delete();
        return redirect()->route('perbaikans.index')->with('success', 'Perbaikan deleted successfully.');
    }

    public function generatePDF($id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        $html = view('perbaikans.pdf', compact('perbaikan'))->render();
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('Perbaikan.pdf', 'I');
    }
}

