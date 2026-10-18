<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();

        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')
        ->with('success', 'Data customer berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.show', compact('pelanggan'));
    }

    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')
        ->with('success', 'Data customer berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
        ->with('success', 'Data customer berhasil dihapus!');
    }
}
