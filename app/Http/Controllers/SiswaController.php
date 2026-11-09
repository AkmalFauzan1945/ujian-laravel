<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')
            ->join('kelas', 'siswa.kelas_id', '=', 'kelas.id')
            ->select('siswa.*', 'kelas.nama_kelas')
            ->get();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = DB::table('kelas')->get();
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required',
            'nis' => 'required|unique:siswa,nis',
            'nama_lengkap' => 'required|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
        ]);

        DB::table('siswa')->insert([
            'kelas_id' => $request->kelas_id,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'asal_sekolah' => $request->asal_sekolah,
            'jurusan' => $request->jurusan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_hp_wali' => $request->no_hp_wali,
            'status' => $request->status ?? 'Aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $siswa = DB::table('siswa')
            ->join('kelas', 'siswa.kelas_id', '=', 'kelas.id')
            ->select('siswa.*', 'kelas.nama_kelas', 'kelas.kode_kelas', 'kelas.wali_kelas', 'kelas.tingkat', 'kelas.tahun_ajaran')
            ->where('siswa.id', $id)
            ->first();

        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = DB::table('siswa')->where('id', $id)->first();
        $kelas = DB::table('kelas')->get();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas_id' => 'required',
            'nis' => 'required|unique:siswa,nis,' . $id,
            'nama_lengkap' => 'required|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
        ]);

        DB::table('siswa')->where('id', $id)->update([
            'kelas_id' => $request->kelas_id,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'asal_sekolah' => $request->asal_sekolah,
            'jurusan' => $request->jurusan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_hp_wali' => $request->no_hp_wali,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('siswa')->where('id', $id)->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}