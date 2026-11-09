<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori</title>
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
        }
        .btn-edit {
            text-decoration: none; 
            color: inherit;        
        }
        .btn-create {
            text-decoration: none; 
            color: inherit;        
        }
        .btn-delete {
            text-decoration: none; 
            color: inherit;        
        }
    </style>
</head>
<body>

    <h3>Daftar Siswa</h3>
    <a href="{{ route('siswa.create') }}" class="btn-create">Tambah Siswa</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $row->nis }}</td>
                <td>{{ $row->nama_lengkap }}</td>
                <td>{{ $row->nama_kelas }}</td>
                <td>{{ $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $row->status }}</td>
                <td>
                    <a href="{{ route('siswa.show', $row->id) }}" class="btn-edit">Detail</a>
                    <a href="{{ route('siswa.edit', $row->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('siswa.destroy', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" style="background:none; border:none; padding:0; cursor:pointer; font:inherit;">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center;">Data siswa masih kosong.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>