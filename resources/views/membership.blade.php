@extends('layouts.temp')

@section('judul', 'Profil')

@section('content')
<div class="page-section mt-0">
    <div class="container">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-6">
        <h2 class="mb-3">Get awesome features, without extra charges</h2>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores non magnam, quis aliquid dolor magni</p>
      </div>
    </div>
    <div class="pricing-table mt-5 wow fadeInUp">
      <div class="pricing-item active no-transform">
        <div class="pricing-header">
          <h5>Emas Plan</h5>
          <h1 class="fw-normal">Rp. 250k</h1>
        </div>
        <div class="pricing-body">
          <ul class="theme-list">
            <li class="list-item">Push Notification</li>
            <li class="list-item">Unlimited blog</li>
            <li class="list-item">Realtime community</li>
            <li class="list-item">24/7 Support expert</li>
            <li class="list-item">Discount webinar</li>
          </ul>
        </div>
        <a class="btn btn-dark" href="{{url('membership/1')}}">Pilih Plan</a>
      </div>
      <div class="pricing-item active no-transform">
        <div class="pricing-header">
          <h5>pemula Plan</h5>
          <h1 class="fw-normal">Rp. 100k</h1>
        </div>
        <div class="pricing-body">
          <ul class="theme-list">
          <li class="list-item">Push Notification</li>
            <li class="list-item">Unlimited blog</li>
            <li class="list-item">Realtime community</li>
            <li class="list-item">24/7 Support expert</li>
          </ul>
        </div>
        <a class="btn btn-dark" href="{{url('membership/2')}}">Pilih Plan</a>
      </div>
    </div>
    </div>
</div>
@endsection