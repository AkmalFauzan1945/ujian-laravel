<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas</title>
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

    <h3>Daftar Kelas</h3>
    <a href="{{ route('kelas.create') }}" class="btn-create">Tambah Kelas</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Tingkat</th>
                <th>Tahun Ajaran</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kelas as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $row->kode_kelas }}</td>
                <td>{{ $row->nama_kelas }}</td>
                <td>{{ $row->tingkat }}</td>
                <td>{{ $row->tahun_ajaran }}</td>
                <td>{{ $row->wali_kelas ?? '-' }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $row->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('kelas.destroy', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data kelas ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" style="background:none; border:none; padding:0; cursor:pointer; font:inherit;">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center;">Data kelas masih kosong.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>