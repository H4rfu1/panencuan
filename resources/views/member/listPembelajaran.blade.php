@extends('layouts.temp')

@section('judul', 'Video')
@section('judul1', 'Video Pembelajaran')

@section('content')

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 py-3 container">
        @foreach($data as $p)
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <article class="blog-entry">
          <div class="post-title"><a href="blog-details.html">{{$p->judul}}</a></div>
            <div class="entry-header">
              <div class="post-thumbnail embed-responsive embed-responsive-16by9">
                  <video class="embed-responsive-item" src="{{asset('storage/video/'.$p->url_video)}}" allowfullscreen controls></video>
              </div>
            </div>
            <div class="entry-meta mb-2">
              <div class="meta-item entry-author">
                <div class="icon">
                  <span class="mai-person"></span>  
                </div>
                pemateri <a href="#">{{$p->name}}</a>
              </div>
            </div>
            <div class="entry-content">
              <p>{{$p->deskripsi_video}}</p>
            </div>
            <!-- <a href="#" class="btn btn-primary">Continue Reading</a> -->
          </article>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection