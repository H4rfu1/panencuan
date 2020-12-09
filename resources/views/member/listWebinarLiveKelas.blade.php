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
              <span>Kuota : {{$p->kuota}}</span></p>
              <p>{{$p->deskripsi}}</p>
            </div>
            <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}" class="btn btn-primary">Beli</a>
          </article>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection