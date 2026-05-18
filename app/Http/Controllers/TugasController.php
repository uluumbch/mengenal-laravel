<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    public function index()
    {
        $semuaTugas = Tugas::latest()->get();
        return view('tugas.index', compact('semuaTugas'));
    }

    public function create()
    {
        return view('tugas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
        ]);

        Tugas::create($validated);

        return redirect()->route('tugas.index');
    }

    public function edit($id)
    {
        // $tugas = Tugas::findOrFail($id);
        // return view('tugas.edit', compact('tugas'));
    }

    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'judul' => 'required|max:255',
        //     'deskripsi' => 'nullable',
        //     'selesai' => 'boolean',
        // ]);

        // $tugas = Tugas::findOrFail($id);
        // $tugas->update($validated);

        // return redirect()->route('tugas.index');
    }

    public function destroy($id)
    {
        // $tugas = Tugas::findOrFail($id);
        // $tugas->delete();

        // return redirect()->route('tugas.index');
    }
}
