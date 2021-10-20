@extends('layout.app')
@section('title' , 'resep makanan')
@section('content')
  <div class="card">
    <div class="card-header" style="font-weight: bold;" >
      {{ $resep->jenis_makanan }} ( Katagori {{ $resep->katagori_makanan }} )
    </div>
    <div class="card-body">
      <p style="font-weight: bold" >Bahan Yang Di butuhkan</p>
      <p class="card-text">{{ $resep->bahan_makanan }}</p>
    </div>
  </div>
@endsection