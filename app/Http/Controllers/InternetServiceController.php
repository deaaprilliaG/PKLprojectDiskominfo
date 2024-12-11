<?php

namespace App\Http\Controllers;

use App\Models\InternetService;
use Illuminate\Http\Request;
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
        InternetService::create($request->all());
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
        $internet_service->update($request->all());
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

