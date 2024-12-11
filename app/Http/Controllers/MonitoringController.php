<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;
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
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'jabatan' => 'required|string|max:255',
            'titik_lokasi' => 'required|string|max:255',
            'isp_backup' => 'required|boolean',
            'router_internal' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'waktu_uji_coba' => 'required',
            'jam_internetan' => 'required',
            'test_speed' => 'required|string|max:255',
            'test_switch_internal' => 'required|string|max:255',
            'download_speed' => 'required|integer',
            'upload_speed' => 'required|integer',
            'kabel_lan' => 'required|string|max:255',
            'aksespoint' => 'required|string|max:255',
            'switch_pembagi' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string',
            'topologi' => 'required|string',
            'monitor_1_name' => 'required|string|max:255',
            'monitor_2_name' => 'required|string|max:255',
            'monitor_1_signature' => 'required|string|max:255',
            'monitor_2_signature' => 'required|string|max:255',
        ]);

        Monitoring::create($request->all());

        return redirect()->route('monitorings.index')->with('success', 'Data berhasil disimpan!');
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
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'jabatan' => 'required|string|max:255',
            'titik_lokasi' => 'required|string|max:255',
            'isp_backup' => 'required|boolean',
            'router_internal' => 'required|boolean',
            'switch_internal' => 'required|boolean',
            'waktu_uji_coba' => 'required',
            'jam_internetan' => 'required',
            'test_speed' => 'required|string|max:255',
            'test_switch_internal' => 'required|string|max:255',
            'download_speed' => 'required|integer',
            'upload_speed' => 'required|integer',
            'kabel_lan' => 'required|string|max:255',
            'aksespoint' => 'required|string|max:255',
            'switch_pembagi' => 'required|string|max:255',
            'keterangan_kondisi' => 'required|string',
            'topologi' => 'required|string',
            'monitor_1_name' => 'required|string|max:255',
            'monitor_2_name' => 'required|string|max:255',
            'monitor_1_signature' => 'required|string|max:255',
            'monitor_2_signature' => 'required|string|max:255',
        ]);

        $monitoring->update($request->all());

        return redirect()->route('monitorings.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();
        return redirect()->route('monitorings.index')->with('success', 'Data berhasil dihapus!');
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

