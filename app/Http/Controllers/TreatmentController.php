<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatment = Treatment::all();

        return view('treatment.index', compact('treatment'));
    }

    public function create()
    {
        return view('treatment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_treatment' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Treatment::create($request->only([
            'nama_treatment',
            'harga',
            'deskripsi',
        ]));

        return redirect()->route('treatment.index')
            ->with('success', 'Data treatment berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $treatment = Treatment::findOrFail($id);

        return view('treatment.show', compact('treatment'));
    }

    public function edit(string $id)
    {
        $treatment = Treatment::findOrFail($id);

        return view('treatment.edit', compact('treatment'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_treatment' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $treatment = Treatment::findOrFail($id);

        $treatment->update($request->only([
            'nama_treatment',
            'harga',
            'deskripsi',
        ]));

        return redirect()->route('treatment.index')
            ->with('success', 'Data treatment berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        return redirect()->route('treatment.index')
            ->with('success', 'Data treatment berhasil dihapus!');
    }
}
