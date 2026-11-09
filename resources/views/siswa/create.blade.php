<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
</head>
<body>

    <h3>Tambah Data Siswa</h3>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Pilih Kelas</label>
            <select name="kelas_id" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" required>
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" required>
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" required>
        </div>
        <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah">
        </div>
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu">
        </div>
        <div class="form-group">
            <label>No HP Wali</label>
            <input type="text" name="no_hp_wali">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status">
                <option value="Aktif">Aktif</option>
                <option value="Nonaktif">Nonaktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>