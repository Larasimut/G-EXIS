<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sertifikat</title>

    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            text-align: center;
            font-family: 'Times New Roman', serif;
            background-image: url('https://i.imgur.com/NyYRVIE.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .border {
            border: 8px solid #332D56;
            margin: 50px;
            padding: 40px 30px;
            background-color: rgba(255, 255, 255, 0.92);
            height: calc(100vh - 100px);
            box-sizing: border-box;
        }

        .logo {
            width: 90px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 42px;
            color: #332D56;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .subtitle {
            font-size: 20px;
            color: #333;
            margin-top: 5px;
        }

        h2 {
            font-size: 30px;
            color: #4E6688;
            margin: 15px 0;
            text-decoration: underline;
        }

        h3 {
            font-size: 22px;
            color: #332D56;
            margin: 10px 0 5px 0;
        }

        p {
            font-size: 18px;
            margin: 5px 0;
        }

        .footer {
            margin-top: 60px;
            font-size: 17px;
            color: #332D56;
        }

        .footer i {
            font-style: italic;
        }

        .signature {
            margin-top: 50px;
        }

        .signature p {
            margin: 3px 0;
        }

        .signature-name {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="border">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo Sekolah">

        <h1>SERTIFIKAT</h1>

        <p class="subtitle">Diberikan kepada:</p>

        {{-- Dummy data --}}
        <h2>Rizky Ramadhan</h2>

        <p>Atas partisipasinya dalam kegiatan</p>

        {{-- Dummy kegiatan --}}
        <h3>Perkemahan Pramuka Tahun 2025</h3>

        <p>Tanggal: 12 Februari 2025</p>

        <div class="footer">
            <p><i>SMKN 2 Sumedang</i></p>

            <div class="signature">
                <p><strong>Kepala Sekolah</strong></p>
                <br><br><br>
                <p class="signature-name">Dr. Elis Herawati, M.Pd</p>
            </div>
        </div>
    </div>

</body>
</html>
