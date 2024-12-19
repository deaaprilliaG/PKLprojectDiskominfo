<?php

namespace App\Http\Controllers;

use App\Models\ZoomMeeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;

class ZoomMeetingController extends Controller
{
    public function index()
    {
        $zoom_meetings = ZoomMeeting::all();
        return view('zoom_meetings.index', compact('zoom_meetings'));
    }

    public function create()
    {
        return view('zoom_meetings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nama_topic_meet' => 'required|string|max:255',
            'jumlah_participant' => 'required|integer',
            'jadwal_tgl' => 'required|date',
            'jadwal_jam_mulai' => 'required|time',
            'jadwal_jam_selesai' => 'required|time',
            'nama_petugas_1' => 'required|string|max:255',
            'nama_petugas_2' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum menyimpan

        ZoomMeeting::create($validatedData);

        return redirect()->route('zoom_meetings.index')->with('success', 'Zoom Meeting created successfully.');
    }

    public function show(ZoomMeeting $zoom_meeting)
    {
        return view('zoom_meetings.show', compact('zoom_meeting'));
    }

    public function edit(ZoomMeeting $zoom_meeting)
    {
        return view('zoom_meetings.edit', compact('zoom_meeting'));
    }

    public function update(Request $request, ZoomMeeting $zoom_meeting)
    {
        $validatedData = $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nama_topic_meet' => 'required|string|max:255',
            'jumlah_participant' => 'required|integer',
            'jadwal_tgl' => 'required|date',
            'jadwal_jam_mulai' => 'required|time',
            'jadwal_jam_selesai' => 'required|time',
            'nama_petugas_1' => 'required|string|max:255',
            'nama_petugas_2' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id(); // Menambahkan user_id sebelum memperbarui

        $zoom_meeting->update($validatedData);

        return redirect()->route('zoom_meetings.index')->with('success', 'Zoom Meeting updated successfully.');
    }

    public function destroy(ZoomMeeting $zoom_meeting)
    {
        $zoom_meeting->delete();
        return redirect()->route('zoom_meetings.index')->with('success', 'Zoom Meeting deleted successfully.');
    }

    public function generatePDF($id)
    {
        $zoom_meeting = ZoomMeeting::findOrFail($id);
        $html = view('zoom_meetings.pdf', compact('zoom_meeting'))->render();
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('ZoomMeeting.pdf', 'I');
    }
}

