<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Kelas</title>
</head>
<body>

    <h3>Edit Data Kelas</h3>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Kode Kelas</label>
            <input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}" required>
        </div>
        
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
        </div>
        
        <div class="form-group">
            <label>Tingkat</label>
            <input type="text" name="tingkat" value="{{ $kelas->tingkat }}" required>
        </div>
        
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}" required>
        </div>
        
        <div class="form-group">
            <label>Wali Kelas</label>
            <input type="text" name="wali_kelas" value="{{ $kelas->wali_kelas }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>