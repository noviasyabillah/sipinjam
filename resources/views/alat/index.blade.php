@extends('layouts.app')

@section('judul', 'Daftar Alat - Laboratorium')

@section('konten')
  <a href="{{ route('alat.create') }}">+ Tambah Alat</a>

  @if (session('sukses'))
    <p style="color:green">{{ session('sukses') }}</p>
  @endif

  <table border="1" cellpadding="6">
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Stok</th>
      <th>Kondisi</th>
      <th>Lokasi</th> 
      <th>Aksi</th>  
    </tr>
    @forelse ($alat as $a)
      <tr>
        <td>{{ $a->kode }}</td>
        <td>{{ $a->nama }}</td>
        
        <td @if($a->stok == 0) style="color: red; font-weight: bold;" @endif>
            {{ $a->stok }}
        </td>
        
        <td>{{ $a->kondisi }}</td>
        
        <td>{{ $a->lokasi }}</td>
        
        <td>
        <a href="{{ route('alat.show', $a) }}">Detail</a>
        <a href="{{ route('alat.edit', $a) }}">Ubah</a>
        <form method="POST" action="{{ route('alat.destroy', $a) }}"
                style="display:inline"
                onsubmit="return confirm('Hapus alat ini?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
          </form>
        </td>
      </tr>
    @empty

    <tr><td colspan="6">Belum ada data alat.</td></tr>
    @endforelse
  </table>

  {{ $alat->links() }}
@endsection