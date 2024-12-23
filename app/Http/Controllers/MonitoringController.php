<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::all();
        return view('monitorings.index', compact('monitorings'));
    }

    public function create()
    {
        return view('monitorings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'titik_lokasi' => 'required|string|max:255',
            'isp_backup' => 'required|boolean',
            'router_internal' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'waktu_uji_coba' => 'required|time', // Menggunakan validasi kustom
            'jam_internetan' => 'required|time', // Menggunakan validasi kustom
            'test_speed' => 'required|numeric',
            'test_switch_internal' => 'required|numeric',
            'download_speed' => 'required|numeric',
            'upload_speed' => 'required|numeric',
            'kabel_lan' => 'required|string|max:255',
            'aksespoint' => 'required|string|max:255',
            'switch_pembagi' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string|max:255',
            'topologi' => 'required|string|max:255',
            'monitor_1_name' => 'required|string|max:255',
            'monitor_2_name' => 'required|string|max:255',
            'monitor_1_signature' => 'required|string|max:255',
            'monitor_2_signature' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum menyimpan

        Monitoring::create($validatedData);

        return redirect()->route('monitorings.index')->with('success', 'Monitoring created successfully.');
    }

    public function show(Monitoring $monitoring)
    {
        return view('monitorings.show', compact('monitoring'));
    }

    public function edit(Monitoring $monitoring)
    {
        return view('monitorings.edit', compact('monitoring'));
    }

    public function update(Request $request, Monitoring $monitoring)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'jabatan' => 'required|string|max:255',
            'titik_lokasi' => 'required|string|max:255',
            'isp_backup' => 'required|boolean',
            'router_internal' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'waktu_uji_coba' => 'required|time', // Menggunakan validasi kustom
            'jam_internetan' => 'required|time', // Menggunakan validasi kustom
            'test_speed' => 'required|numeric',
            'test_switch_internal' => 'required|numeric',
            'download_speed' => 'required|numeric',
            'upload_speed' => 'required|numeric',
            'kabel_lan' => 'required|string|max:255',
            'aksespoint' => 'required|string|max:255',
            'switch_pembagi' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string|max:255',
            'topologi' => 'required|string|max:255',
            'monitor_1_name' => 'required|string|max:255',
            'monitor_2_name' => 'required|string|max:255',
            'monitor_1_signature' => 'required|string|max:255',
            'monitor_2_signature' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum memperbarui

        $monitoring->update($validatedData);

        return redirect()->route('monitorings.index')->with('success', 'Monitoring updated successfully.');
    }

    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();
        return redirect()->route('monitorings.index')->with('success', 'Monitoring deleted successfully.');
    }

    public function generatePDF($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $html = view('monitorings.pdf', compact('monitoring'))->render();
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('Monitoring.pdf', 'I');
    }
}

