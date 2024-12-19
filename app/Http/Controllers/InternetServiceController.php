<?php

namespace App\Http\Controllers;

use App\Models\InternetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;

class InternetServiceController extends Controller
{
    public function index()
    {
        $internet_services = InternetService::all();
        return view('internet_services.index', compact('internet_services'));
    }

    public function create()
    {
        return view('internet_services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'nama_kegiatan' => 'required|string|max:255',
            'bandwidth' => 'required|integer',
            'jadwal_tgl' => 'required|date',
            'jadwal_jam_mulai' => 'required|time',
            'jadwal_jam_selesai' => 'required|time',
            'petugas_1_nama' => 'required|string|max:255',
            'petugas_1_ttd' => 'required|string|max:255',
            'petugas_2_nama' => 'required|string|max:255',
            'petugas_2_ttd' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum menyimpan

        InternetService::create($validatedData);

        return redirect()->route('internet_services.index')->with('success', 'Internet Service created successfully.');
    }

    public function show(InternetService $internet_service)
    {
        return view('internet_services.show', compact('internet_service'));
    }

    public function edit(InternetService $internet_service)
    {
        return view('internet_services.edit', compact('internet_service'));
    }

    public function update(Request $request, InternetService $internet_service)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'nama_kegiatan' => 'required|string|max:255',
            'bandwidth' => 'required|integer',
            'jadwal_tgl' => 'required|date',
            'jadwal_jam_mulai' => 'required|time',
            'jadwal_jam_selesai' => 'required|time',
            'petugas_1_nama' => 'required|string|max:255',
            'petugas_1_ttd' => 'required|string|max:255',
            'petugas_2_nama' => 'required|string|max:255',
            'petugas_2_ttd' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum memperbarui

        $internet_service->update($validatedData);

        return redirect()->route('internet_services.index')->with('success', 'Internet Service updated successfully.');
    }

    public function destroy(InternetService $internet_service)
    {
        $internet_service->delete();
        return redirect()->route('internet_services.index')->with('success', 'Internet Service deleted successfully.');
    }

    public function generatePDF($id)
    {
        $internet_service = InternetService::findOrFail($id);
        $html = view('internet_services.pdf', compact('internet_service'))->render();
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('InternetService.pdf', 'I');
    }
}


