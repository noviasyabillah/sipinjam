@extends('layouts.app')
@section('judul', 'Detail Alat')

@section('konten')
  <ul>
    <li><strong>Kode:</strong> {{ $alat->kode }}</li>
    <li><strong>Nama:</strong> {{ $alat->nama }}</li>
    <li><strong>Stok:</strong> {{ $alat->stok }}</li>
    <li><strong>Kondisi:</strong> {{ $alat->kondisi }}</li>
    <li><strong>Lokasi:</strong> {{ $alat->lokasi }}</li>
  </ul>

  <br>
  <a href="{{ route('alat.index') }}">Kembali ke Daftar Alat</a>
@endsection