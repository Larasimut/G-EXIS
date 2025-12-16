<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Ekskul</th>
            <th>Kehadiran</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($absensi as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->ekskul }}</td>
            <td>{{ $item->kehadiran }}</td>
            <td>{{ $item->keterangan ?? '-' }}</td>
            <td>{{ $item->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
