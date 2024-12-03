<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'npm' => 'required|unique:mahasiswa',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
        ]);

        Mahasiswa::create($validatedData);

        return response()->json(['message' => 'Mahasiswa berhasil disimpan'], 201);
    }
}

