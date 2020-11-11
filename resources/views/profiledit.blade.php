@extends('layouts.temp')

@section('judul', 'Edit Profil')
@section('judul1', 'Edit Profil Pengguna')

@section('content')
<div class="page-section mt-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
        <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Edi Profil</h3>
              <form action="{{url('profil/'.Auth::user()->id)}}" method="post">
              @csrf 
                <!-- <div class="form-row form-group">
                  <div class="col-md-6">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="col-md-6">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{Auth::user()->jenis_kelamin}}">
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal lahir</label>
                  @php
                    $tanggal = Auth::user()->tanggal;
                    $tanggal = strtotime($tanggal);
                    $tanggal = date('Y-m-d',$tanggal);
                  @endphp
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$tanggal}}">
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" name="kota" value="{{Auth::user()->kota}}">
                </div>
                <div class="form-group">
                  <label for="no_hp">No. HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{Auth::user()->no_hp}}">
                </div>
                <div class="form-group">
                  <label for="nim">Nim</label>
                  <input type="text" class="form-control" id="nim" name="nim" value="{{Auth::user()->nim}}">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{Auth::user()->jurusan}}">
                </div>
                <div class="form-group float-right">
                    <a href="{{url('profil')}}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
              </form>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection