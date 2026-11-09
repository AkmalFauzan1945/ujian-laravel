<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Kelas</title>
</head>
<body>

    <h3>Tambah Data Kelas</h3>
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Kode Kelas</label>
            <input type="text" name="kode_kelas" required value="{{ old('kode_kelas') }}">
        </div>
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" required value="{{ old('nama_kelas') }}">
        </div>
        <div class="form-group">
            <label>Tingkat</label>
            <input type="text" name="tingkat" required value="{{ old('tingkat') }}" placeholder="Contoh: X, XI, XII">
        </div>
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" name="tahun_ajaran" required value="{{ old('tahun_ajaran') }}" placeholder="Contoh: 2026/2027">
        </div>
        <div class="form-group">
            <label>Wali Kelas</label>
            <input type="text" name="wali_kelas" value="{{ old('wali_kelas') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>