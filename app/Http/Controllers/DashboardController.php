<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\InternetService;
use App\Models\ZoomMeeting;
use App\Models\Monitoring;
use App\Models\Perbaikan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Memeriksa apakah pengguna memiliki data
        $internet_services_count = InternetService::where('user_id', $user->id)->count();
        $zoom_meetings_count = ZoomMeeting::where('user_id', $user->id)->count();
        $monitorings_count = Monitoring::where('user_id', $user->id)->count();
        $perbaikans_count = Perbaikan::where('user_id', $user->id)->count();

        // Mengambil data terbaru
        $recent_internet_services = InternetService::where('user_id', $user->id)->latest()->take(5)->get();
        $recent_zoom_meetings = ZoomMeeting::where('user_id', $user->id)->latest()->take(5)->get();
        $recent_monitorings = Monitoring::where('user_id', $user->id)->latest()->take(5)->get();
        $recent_perbaikans = Perbaikan::where('user_id', $user->id)->latest()->take(5)->get();

        // Jika tidak ada data, tampilkan dashboard kosong
        if ($internet_services_count == 0 && $zoom_meetings_count == 0 && $monitorings_count == 0 && $perbaikans_count == 0) {
            return view('dashboard_empty', compact('user'));
        }

        // Jika ada data, tampilkan dashboard dengan data
        return view('dashboard', compact('user', 'internet_services_count', 'zoom_meetings_count', 'monitorings_count', 'perbaikans_count', 'recent_internet_services', 'recent_zoom_meetings', 'recent_monitorings', 'recent_perbaikans'));
    }
}
