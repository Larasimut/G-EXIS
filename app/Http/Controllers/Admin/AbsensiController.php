<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    // =================== PASKIBRA ===================
    public function rekapPaskib()
    {
        $rekap = [
            (object)[ 'nama' => 'Indra', 'kelas' => 'XI RPL', 'tanggal' => '2024-11-10', 'status' => 'Hadir' ],
            (object)[ 'nama' => 'Putri', 'kelas' => 'XI AKL', 'tanggal' => '2024-11-10', 'status' => 'Izin' ],
        ];

        return view('admin.rekap_paskib', compact('rekap'));
    }


    // =================== ENGLISH CLUB ===================
    public function rekapEC()
    {
        $rekap = [
            (object)[ 'nama' => 'Budi', 'kelas' => 'X TKJ', 'tanggal' => '2024-11-12', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_ec', compact('rekap'));
    }


    // =================== CODING ===================
    public function rekapCoding()
    {
        $rekap = [
            (object)[ 'nama' => 'Salsa', 'kelas' => 'XI PPLG', 'tanggal' => '2024-11-11', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_coding', compact('rekap'));
    }


    // =================== VOLY ===================
    public function rekapVoly()
    {
        $rekap = [
            (object)[ 'nama' => 'Lina', 'kelas' => 'XI OTKP', 'tanggal' => '2024-11-09', 'status' => 'Sakit' ],
        ];

        return view('admin.rekap_voly', compact('rekap'));
    }


    // =================== AKSARA ===================
    public function rekapAksara()
    {
        $rekap = [
            (object)[ 'nama' => 'Dewi', 'kelas' => 'XII RPL', 'tanggal' => '2024-11-08', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_aksara', compact('rekap'));
    }


    // =================== BASKET ===================
    public function rekapBasket()
    {
        $rekap = [
            (object)[ 'nama' => 'Bayu', 'kelas' => 'XI TKJ', 'tanggal' => '2024-11-06', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_basket', compact('rekap'));
    }


    // =================== DESIGN & PRINTING ===================
    public function rekapDesign()
    {
        $rekap = [
            (object)[ 'nama' => 'Anisa', 'kelas' => 'X AKL', 'tanggal' => '2024-11-06', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_design', compact('rekap'));
    }


    // =================== DRUMBAND ===================
    public function rekapDrumband()
    {
        $rekap = [
            (object)[ 'nama' => 'Rama', 'kelas' => 'XI MM', 'tanggal' => '2024-11-07', 'status' => 'Izin' ],
        ];

        return view('admin.rekap_drumband', compact('rekap'));
    }


    // =================== FOTOGRAFI ===================
    public function rekapFotografi()
    {
        $rekap = [
            (object)[ 'nama' => 'Sinta', 'kelas' => 'XII OTKP', 'tanggal' => '2024-11-06', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_fotografi', compact('rekap'));
    }


    // =================== FUTSAL ===================
    public function rekapFutsal()
    {
        $rekap = [
            (object)[ 'nama' => 'Rizky', 'kelas' => 'XII TKJ', 'tanggal' => '2024-11-04', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_futsal', compact('rekap'));
    }


    // =================== IRMA ===================
    public function rekapIrma()
    {
        $rekap = [
            (object)[ 'nama' => 'Aisyah', 'kelas' => 'XI BDP', 'tanggal' => '2024-11-04', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_irma', compact('rekap'));
    }


    // =================== KARATE ===================
    public function rekapKarate()
    {
        $rekap = [
            (object)[ 'nama' => 'Joko', 'kelas' => 'XI RPL', 'tanggal' => '2024-11-03', 'status' => 'Izin' ],
        ];

        return view('admin.rekap_karate', compact('rekap'));
    }


    // =================== KARAWITAN ===================
    public function rekapKarawitan()
    {
        $rekap = [
            (object)[ 'nama' => 'Laras', 'kelas' => 'XII Seni', 'tanggal' => '2024-11-03', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_karawitan', compact('rekap'));
    }


    // =================== KIR ===================
    public function rekapKir()
    {
        $rekap = [
            (object)[ 'nama' => 'Dani', 'kelas' => 'XI IPA', 'tanggal' => '2024-11-02', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_kir', compact('rekap'));
    }


    // =================== PADUAN SUARA ===================
    public function rekapPadus()
    {
        $rekap = [
            (object)[ 'nama' => 'Melati', 'kelas' => 'X BDP', 'tanggal' => '2024-11-01', 'status' => 'Izin' ],
        ];

        return view('admin.rekap_padus', compact('rekap'));
    }


    // =================== PMR ===================
    public function rekapPmr()
    {
        $rekap = [
            (object)[ 'nama' => 'Nurul', 'kelas' => 'XI AKL', 'tanggal' => '2024-11-01', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_pmr', compact('rekap'));
    }


    // =================== PENCAK SILAT ===================
    public function rekapSilat()
    {
        $rekap = [
            (object)[ 'nama' => 'Bagas', 'kelas' => 'XII TKJ', 'tanggal' => '2024-10-31', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_silat', compact('rekap'));
    }


    // =================== SENI TARI ===================
    public function rekapTari()
    {
        $rekap = [
            (object)[ 'nama' => 'Shinta', 'kelas' => 'XI Seni', 'tanggal' => '2024-10-30', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_tari', compact('rekap'));
    }


    // =================== TATA BOGA ===================
    public function rekapTataboga()
    {
        $rekap = [
            (object)[ 'nama' => 'Rika', 'kelas' => 'XII Tataboga', 'tanggal' => '2024-10-30', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_tataboga', compact('rekap'));
    }


    // =================== TATA BUSANA ===================
    public function rekapTatabusana()
    {
        $rekap = [
            (object)[ 'nama' => 'Elsa', 'kelas' => 'XI Busana', 'tanggal' => '2024-10-29', 'status' => 'Izin' ],
        ];

        return view('admin.rekap_tatabusana', compact('rekap'));
    }


    // =================== TATA RIAS ===================
    public function rekapTatarias()
    {
        $rekap = [
            (object)[ 'nama' => 'Citra', 'kelas' => 'XII Rias', 'tanggal' => '2024-10-28', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_tatarias', compact('rekap'));
    }


    // =================== PRAMUKA ===================
    public function rekapPramuka()
    {
        $rekap = [
            (object)[ 'nama' => 'Fajar', 'kelas' => 'XI MM', 'tanggal' => '2024-10-27', 'status' => 'Hadir' ],
        ];

        return view('admin.rekap_pramuka', compact('rekap'));
    }
}
