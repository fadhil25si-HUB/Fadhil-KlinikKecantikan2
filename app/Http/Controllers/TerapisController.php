<?php

namespace App\Http\Controllers;

use App\Models\Terapis;
use Illuminate\Http\Request;

class TerapisController extends Controller
{
    public function index()
    {
        $terapis = Terapis::all();

        return view('admin.terapis.index', compact('terapis'));
    }

    public function create()
    {
        return view('admin.terapis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_terapis' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        Terapis::create($request->only([
            'nama_terapis',
            'phone',
            'status',
        ]));

        return redirect()->route('terapis.index')
            ->with('success', 'Data terapis berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $terapis = Terapis::findOrFail($id);

        return view('admin.terapis.show', compact('terapis'));
    }

    public function edit(string $id)
    {
        $terapis = Terapis::findOrFail($id);

        return view('admin.terapis.edit', compact('terapis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_terapis' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        $terapis = Terapis::findOrFail($id);

        $terapis->update($request->only([
            'nama_terapis',
            'phone',
            'status',
        ]));

        return redirect()->route('terapis.index')
            ->with('success', 'Data terapis berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $terapis = Terapis::findOrFail($id);
        $terapis->delete();

        return redirect()->route('terapis.index')
            ->with('success', 'Data terapis berhasil dihapus!');
    }
}
