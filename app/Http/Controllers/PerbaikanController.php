<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;
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
        Perbaikan::create($request->all());
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
        $perbaikan->update($request->all());
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
