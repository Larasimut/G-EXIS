<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private function dummyData()
    {
        return [
            1 => (object)[
                'id' => 1,
                'username' => 'siswa01',
                'email' => 'siswa01@gmail.com',
                'role' => 'siswa'
            ],
            2 => (object)[
                'id' => 2,
                'username' => 'siswa02',
                'email' => 'siswa02@gmail.com',
                'role' => 'siswa'
            ],
            3 => (object)[
                'id' => 3,
                'username' => 'agus123',
                'email' => 'agus@gmail.com',
                'role' => 'siswa'
            ],
        ];
    }

    // LIST DATA
    public function index()
    {
        $siswa = $this->dummyData();
        return view('admin.data_siswa', compact('siswa'));
    }

    // FORM TAMBAH (kosong saja dulu)
    public function create()
    {
        return view('admin.siswa_create');
    }

    // SIMPAN (tidak benar-benar menyimpan)
    public function store(Request $request)
    {
        return redirect()->route('admin.data_siswa')
            ->with('success', 'Dummy: siswa berhasil ditambahkan (tidak disimpan).');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = $this->dummyData();

        if (!isset($data[$id])) {
            return redirect()->route('admin.data_siswa')->with('error', 'Data tidak ditemukan.');
        }

        $siswa = $data[$id];

        return view('admin.siswa_edit', compact('siswa'));
    }

    // UPDATE (dummy)
    public function update(Request $request, $id)
    {
        return redirect()->route('admin.data_siswa')
            ->with('success', 'Dummy: data siswa diupdate (tidak berubah sungguhan).');
    }

    // DELETE (dummy)
    public function destroy($id)
    {
        return redirect()->route('admin.data_siswa')
            ->with('success', 'Dummy: siswa berhasil dihapus (tidak hilang sungguhan).');
    }
}
