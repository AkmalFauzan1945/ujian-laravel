<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
</head>
<body>

    <h3>Edit Data Siswa</h3>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Pilih Kelas</label>
            <select name="kelas_id" required>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ $siswa->kelas_id == $k->id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" value="{{ $siswa->nis }}" required>
        </div>
        
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}" required>
        </div>
        
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
        </div>
        
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
        </div>
        
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
        </div>
        
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" value="{{ $siswa->no_hp }}">
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $siswa->email }}">
        </div>
        
        <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required>
        </div>
        
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" value="{{ $siswa->jurusan }}" required>
        </div>
        
        <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}">
        </div>
        
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}">
        </div>
        
        <div class="form-group">
            <label>No HP Wali</label>
            <input type="text" name="no_hp_wali" value="{{ $siswa->no_hp_wali }}">
        </div>
        
        <div class="form-group">
            <label>Status</label>
            <select name="status">
                <option value="Aktif" {{ $siswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Nonaktif" {{ $siswa->status == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>