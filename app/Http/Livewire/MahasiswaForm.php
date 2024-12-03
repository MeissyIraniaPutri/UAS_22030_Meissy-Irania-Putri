<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class MahasiswaForm extends Component
{
    public $npm, $nama, $prodi;
    public $mahasiswa;

    public function mount()
    {
        $this->mahasiswa = Mahasiswa::all();
    }

    public function save()
    {
        $this->validate([
            'npm' => 'required|unique:mahasiswa,npm',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
        ]);

        $newMahasiswa = Mahasiswa::create([
            'npm' => $this->npm,
            'nama' => $this->nama,
            'prodi' => $this->prodi,
        ]);

        $this->mahasiswa->push($newMahasiswa);

        $this->reset(['npm', 'nama', 'prodi']);
    }

    public function render()
    {
        return view('livewire.mahasiswa-form');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            $mahasiswa->delete();

            $this->mahasiswa = $this->mahasiswa->filter(function ($item) use ($id) {
                return $item->id !== $id;
            });
        }
    }
}
