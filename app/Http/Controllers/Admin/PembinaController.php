<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    private function dummyData()
    {
        return [
            1 => (object)[
                'id' => 1,
                'username' => 'Ulfahtun',
                'email' => 'ulfahtun@gmail.com',
                'kode_pembina' => 'pembina'
            ],
            2 => (object)[
                'id' => 2,
                'username' => 'Larasati',
                'email' => 'larasati@gmail.com',
                'kode_pembina' => 'pembina'
            ],
            3 => (object)[
                'id' => 3,
                'username' => 'Mugni',
                'email' => 'mugni@gmail.com',
                'kode_pembina' => 'pembina'
            ],
        ];
    }

    // LIST DATA
    public function index()
    {
        $pembina = $this->dummyData();
        return view('admin.data_pembina', compact('pembina'));
    }

    // FORM TAMBAH (kosong saja dulu)
    public function create()
    {
        return view('admin.create_pembina');
    }

    // SIMPAN (tidak benar-benar menyimpan)
    public function store(Request $request)
    {
        return redirect()->route('admin.data_pembina')
            ->with('success', 'Dummy: pembina berhasil ditambahkan (tidak disimpan).');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = $this->dummyData();

        if (!isset($data[$id])) {
            return redirect()->route('admin.data_pembina')->with('error', 'Data tidak ditemukan.');
        }

        $pembina = $data[$id];

        return view('admin.edit_pembina', compact('pembina'));
    }

    // UPDATE (dummy)
    public function update(Request $request, $id)
    {
        return redirect()->route('admin.data_pembina')
            ->with('success', 'Dummy: data pembina diupdate (tidak berubah sungguhan).');
    }

    // DELETE (dummy)
    public function destroy($id)
    {
        return redirect()->route('admin.data_pembina')
            ->with('success', 'Dummy: pembina berhasil dihapus (tidak hilang sungguhan).');
    }
}
