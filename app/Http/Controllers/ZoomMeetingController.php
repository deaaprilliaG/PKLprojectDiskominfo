<?php

namespace App\Http\Controllers;

use App\Models\ZoomMeeting;
use Illuminate\Http\Request;
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
        ZoomMeeting::create($request->all());
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
        $zoom_meeting->update($request->all());
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

