<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jadwal Ekskul</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<style>
    body {
        background: #f3f8ff;
        font-family: "Poppins", sans-serif;
    }
    .jadwal-container {
        background: white;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 0 20px rgba(0,0,0,0.07);
        margin-top: 50px;
    }
    .jadwal-title {
        font-weight: 700;
        font-size: 28px;
        color: #2358a3;
        border-left: 6px solid #2358a3;
        padding-left: 12px;
    }
    .table thead {
        background: #2358a3;
        color: white;
        font-size: 15px;
    }
    .table tbody tr:hover {
        background: #e8f1ff;
    }
    .badge-lokasi {
        background: #2358a3;
    }
    .back-btn {
        text-decoration: none;
        font-weight: 600;
        color: #2358a3;
    }
    .back-btn:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>

<div class="container">
    <a href="#" class="back-btn mt-4 d-inline-block">← Kembali</a>

    <div class="jadwal-container">
        <h2 class="jadwal-title mb-4">Jadwal Ekskul Paskibra</h2>

        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>15:30 – 17:30</td>
                    <td><span class="badge badge-lokasi">Lapangan Utama</span></td>
                    <td>Latihan Kedisiplinan & Baris Berbaris</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>15:30 – 17:30</td>
                    <td><span class="badge badge-lokasi">Aula Serbaguna</span></td>
                    <td>Pemantapan Formasi Upacara</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>14:00 – 17:00</td>
                    <td><span class="badge badge-lokasi">Lapangan Utama</span></td>
                    <td>Persiapan Lomba Antar Sekolah</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
