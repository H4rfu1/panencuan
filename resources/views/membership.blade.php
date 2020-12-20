@extends('layouts.temp')

@section('judul', 'Membership')
@section('judul1', 'Upgrade Membership')

@section('content')
<div class="page-section mt-0">
    <div class="container">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-6">
        <h2 class="mb-3">Get awesome features, without extra charges</h2>
        <p class="mb-5">Menjadi member dan berlangganan bulanan</p>
      </div>
    </div>

    <div class="pricing-table mt-5 wow fadeInUp">
      @foreach($paket as $p)
      <div class="pricing-item active no-transform">
        <div class="pricing-header">
          <h5>{{$p->nama_paket}}</h5>
          <h1 class="fw-normal">Rp. {{$p->harga}}</h1>
        </div>
        <div class="pricing-body">
          <ul class="theme-list">
            <li class="list-item">Melihat Semua Video</li>
            <li class="list-item">ikut live kelas member tiap bulan</li>
            <li class="list-item">Mendapatkan grup komunitas</li>
            <li class="list-item">harga spesial untuk webinar dan live kelas</li>
            <li class="list-item">Sinyal saham di grup komunitas</li>
          </ul>
        </div>
        <a class="btn btn-dark" href="{{url('membership/'.$p->id_paket)}}">Pilih Plan</a>
      </div>
      @endforeach
    </div>
    </div>
</div>
@endsection