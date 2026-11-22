@extends('layouts.app')
@section('judul', 'Ubah Alat')
 
@section('konten')
  @if ($errors->any())
    <ul style="color:red">
      @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  @endif
 
  <form method="POST" action="{{ route('alat.update', $alat) }}">
    @csrf
    @method('PUT')
    <p>Kode: <input name="kode" value="{{ old('kode', $alat->kode) }}"></p>
    <p>Nama: <input name="nama" value="{{ old('nama', $alat->nama) }}"></p>
    <p>Stok: <input name="stok" type="number" value="{{ old('stok', $alat->stok) }}"></p>
    <p>Kondisi:
      <select name="kondisi">
        <option value="baik" @selected(old('kondisi', $alat->kondisi) == 'baik')>baik</option>
        <option value="rusak ringan" @selected(old('kondisi', $alat->kondisi) == 'rusak ringan')>rusak ringan</option>
        <option value="rusak berat" @selected(old('kondisi', $alat->kondisi) == 'rusak berat')>rusak berat</option>
      </select>
    </p>
    <p>Lokasi: <input name="lokasi" value="{{ old('lokasi', $alat->lokasi) }}"></p>
    <button type="submit">Perbarui</button>
  </form>
@endsection