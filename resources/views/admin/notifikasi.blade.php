<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f9ff;
            font-family: 'Poppins', sans-serif;
        }
        .card-notif {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .notif-item {
            padding: 15px;
            border-radius: 12px;
            background: #f0f6ff;
            margin-bottom: 15px;
        }
        .notif-item.unread {
            background: #dceaff;
            border-left: 6px solid #3b74c0;
        }
    </style>
</head>

<body class="p-4">

    <h3 class="fw-bold mb-4">Notifikasi</h3>

    <div class="card-notif container">

        <!-- contoh notif belum dibaca -->
        <div class="notif-item unread">
            <strong>Ekskul Baru Mendaftar</strong>
            <p class="m-0">Siswa mengajukan pendaftaran ekskul Futsal.</p>
            <small class="text-muted">2 menit lalu</small>
        </div>

        <!-- notif sudah dibaca -->
        <div class="notif-item">
            <strong>Update Data Ekskul</strong>
            <p class="m-0">Ekskul Seni Tari telah diperbarui.</p>
            <small class="text-muted">1 hari lalu</small>
        </div>

    </div>

</body>
</html>
