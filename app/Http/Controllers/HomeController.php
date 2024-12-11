<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternetService;
use App\Models\ZoomMeeting;
use App\Models\Monitoring;
use App\Models\Perbaikan;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $internet_services_count = InternetService::count();
        $zoom_meetings_count = ZoomMeeting::count();
        $monitorings_count = Monitoring::count();
        $perbaikans_count = Perbaikan::count();

        $recent_internet_services = InternetService::latest()->take(5)->get();
        $recent_zoom_meetings = ZoomMeeting::latest()->take(5)->get();
        $recent_monitorings = Monitoring::latest()->take(5)->get();
        $recent_perbaikans = Perbaikan::latest()->take(5)->get();

        return view('dashboard', compact(
            'internet_services_count',
            'zoom_meetings_count',
            'monitorings_count',
            'perbaikans_count',
            'recent_internet_services',
            'recent_zoom_meetings',
            'recent_monitorings',
            'recent_perbaikans'
        ));
    }
}


