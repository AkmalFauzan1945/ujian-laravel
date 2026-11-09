<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Data Siswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            width: 30%;
        }
    </style>
</head>
<body>

    <h3>Detail Data Siswa</h3>
    <table>
        <tr><th>NIS</th><td>{{ $siswa->nis }}</td></tr>
        <tr><th>Nama Lengkap</th><td>{{ $siswa->nama_lengkap }}</td></tr>
        <tr><th>Kelas</th><td>{{ $siswa->nama_kelas }} ({{ $siswa->kode_kelas }})</td></tr>
        <tr><th>Wali Kelas</th><td>{{ $siswa->wali_kelas ?? '-' }}</td></tr>
        <tr><th>Tingkat / TH Ajaran</th><td>{{ $siswa->tingkat }} / {{ $siswa->tahun_ajaran }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td></tr>
        <tr><th>TTL</th><td>{{ $siswa->tempat_lahir ?? '-' }}, {{ $siswa->tanggal_lahir ?? '-' }}</td></tr>
        <tr><th>Alamat</th><td>{{ $siswa->alamat ?? '-' }}</td></tr>
        <tr><th>No HP</th><td>{{ $siswa->no_hp ?? '-' }}</td></tr>
        <tr><th>Email</th><td>{{ $siswa->email ?? '-' }}</td></tr>
        <tr><th>Asal Sekolah</th><td>{{ $siswa->asal_sekolah }}</td></tr>
        <tr><th>Jurusan</th><td>{{ $siswa->jurusan }}</td></tr>
        <tr><th>Orang Tua</th><td>Ayah: {{ $siswa->nama_ayah ?? '-' }} | Ibu: {{ $siswa->nama_ibu ?? '-' }}</td></tr>
        <tr><th>No HP Wali</th><td>{{ $siswa->no_hp_wali ?? '-' }}</td></tr>
        <tr><th>Status</th><td>{{ $siswa->status }}</td></tr>
    </table>
    <br>
    <a href="{{ route('siswa.index') }}">Kembali</a>

</body>
</html>