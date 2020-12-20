@extends('layouts.temp')

@section('judul', 'Webinar/Live Kelas')
@section('judul1', 'Webinar/Live Kelas')

@section('content')

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 py-3 container">
        @if (session('status'))
                <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{ session('status') }}
                </div>
            @endif
        @foreach($data as $p)
        @php 
        $webinar = '';
        $webinar = DB::table('verifikasi_webinar_livekelas')
            ->join('users', 'verifikasi_webinar_livekelas.id_user', '=', 'users.id')
            ->select('verifikasi_webinar_livekelas.*', 'users.*')
            ->where('verifikasi_webinar_livekelas.id_webinar_livekelas', $p->id_webinar_livekelas )
            ->where('users.id', Auth::user()->id)
            ->first();
          $kuota = DB::table('verifikasi_webinar_livekelas')
            ->select('verifikasi_webinar_livekelas.*', 'users.*')
            ->where('verifikasi_webinar_livekelas.id_webinar_livekelas', $p->id_webinar_livekelas )
            ->where('status_verif', 'terverifikasi')
            ->count();
        @endphp
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <article class="blog-entry">
          <div class="post-title"><a href="blog-details.html">{{$p->opsi}} : {{$p->judul}}</a></div>
            <div class="entry-header">
              <img src="{{asset('storage/image/'.$p->image)}}" alt="gambar" class="rounded mx-auto d-block" style="max-height: 300px;">
            </div>
            <div class="entry-meta mb-2">
              <div class="meta-item entry-author">
                <div class="icon">
                  <span class="mai-person"></span>  
                </div>
                Pengurus <a href="#">{{$p->name}}</a>
              </div>
            </div>
            <div class="entry-content">
              <p><span>Biaya : {{$p->harga}} | </span>
              <span>Waktu : {{ substr($p->waktu,0,10) }} | </span>
              <span>Kuota : {{$p->kuota - $kuota}}</span></p>
              <p>{{$p->deskripsi}}</p>
            </div>
            @if($webinar)
            @if($webinar->status_verif == 'terverifikasi')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            anda  <strong>sudah terdaftar</strong>
            </div>
            @elseif($webinar->status_verif == 'belum verifikasi')
            <div class="alert alert-info alert-dismissible fade show" role="alert">
            proses  <strong>verifikasi</strong> Admin.
            </div>
            @elseif($webinar->status_verif == 'ditolak')
            <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}" class="btn btn-primary d-flex justify-content-center">Daftar</a>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            pembayaran <strong>Ditolak</strong> .
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @elseif($p->kuota - $kuota)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
            kuota  <strong>penuh</strong>
            </div>
            @elsei
            <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}" class="btn btn-primary d-flex justify-content-center">Daftar</a>
            @endif
            @else
            <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}" class="btn btn-primary d-flex justify-content-center">Daftar</a>
            @endif
            <div class="clearfix"></div>
          </article>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection