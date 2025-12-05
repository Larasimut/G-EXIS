<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
public function index()
{
// contoh data statis, bisa diganti dengan query model
$data = [
'ekskul_count' => 22,
'siswa_count' => 100,
'pembina_count' => 20,
'kelas_distribution' => [60, 20, 20], // X, XI, XII
'ekskul_names' => ['Drumband','English Club','Paskibra','Pramuka','Volley'],
'ekskul_values' => [3,2,4,5,2],
];


return view('admin.dashboard', compact('data'));
}
}