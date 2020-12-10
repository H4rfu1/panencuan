@extends('layouts.temp')
@section('judul', 'Diskusi')
@section('judul1', 'Diskusi')

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
			@if(Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
				Buat Bahasan
			</button>
			<div class="clearfix">...</div>
			@endif
			<p class="text-center text-light">@if($data->isEmpty()){{"Belum ada diskusi"}}@endif</p>
			
		@foreach($data as $p)
			@php
				$komentar = DB::table('komentar')
				->join('users', 'komentar.id_pengomentar', '=', 'users.id')
				->join('diskusi', 'komentar.id_diskusi', '=', 'diskusi.id_diskusi')
				->select('komentar.*', 'users.name','diskusi.*')
				->where('komentar.id_diskusi', $p->id_diskusi)
				->orderBy('tanggal_dibuat', 'asc')
				->get();
				$count = DB::table('komentar')
				->join('users', 'komentar.id_pengomentar', '=', 'users.id')
				->join('diskusi', 'komentar.id_diskusi', '=', 'diskusi.id_diskusi')
				->select('komentar.*', 'users.name','diskusi.*')
				->where('komentar.id_diskusi', $p->id_diskusi)
				->count();

				$date = date_create_from_format("Y-m-d H:i:s", $p->tanggal_dibuat);
			@endphp
       	 <div class="shadow-lg p-3 mb-5 bg-white rounded">
			<article class="blog-entry">
				<div class="entry-header">
				<div class="post-date">
					<h3>{{date_format($date, 'd')}}</h3>
					<span>{{date_format($date, 'M')}}, {{date_format($date, 'Y')}}</span>
				</div>
				</div>
				<div class="post-title"><a href="#">{{$p->judul_diskusi}}</a></div>
				<div class="entry-meta mb-2">
				<div class="meta-item entry-author">
					<div class="icon">
					<span class="mai-person"></span>  
					</div>
					oleh <a href="#">{{$p->name}}</a>
				</div>
				<div class="meta-item">
					<div class="icon">
					<span class="mai-chatbubble-ellipses"></span>
					</div>
					<a  data-toggle="collapse" href="#komentar{{$p->id_diskusi}}" role="button" aria-expanded="false" aria-controls="komentar{{$p->id_diskusi}}">
						{{$count}} Komentar
					</a>
				</div>
				</div>
				<div class="entry-content">
					<!-- <div id="summary">
						<p class="collapse" id="collapseSummary{{$p->id_diskusi}}">{{$p->deskripsi_diskusi}}</p>
						<a class="collapsed" data-toggle="collapse" href="#collapseSummary{{$p->id_diskusi}}" aria-expanded="false" aria-controls="collapseSummary{{$p->id_diskusi}}"></a>
					</div> -->
				<p>{{$p->deskripsi_diskusi}}</p>
				</div>
			</article>

			<!-- Comments -->
			<div class="comment-area collapse" id="komentar{{$p->id_diskusi}}">
				<div class="comment-form-wrap mb-3">
					<form action="{{url('komen')}}" method="post">
						@csrf
						<input type="hidden" name="id" value="{{Auth::user()->id}}">
						<input type="hidden" name="id_diskusi" value="{{$p->id_diskusi}}">
						<div class="input-group">
							<!-- <div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fa fa-paperclip" aria-hidden="true"></i></span>
							</div> -->
							<textarea name="komentar" class="form-control type_msg" placeholder="Komen disini..." required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
							<div class="input-group-append">
							<button type="submit" class="input-group-text send_btn"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
			  	</div>
			<!-- Comment List -->
			<p class="text-center ">@if($komentar->isEmpty()){{"Jadilah pertama yang komen."}}@endif</p>
            <ul class="comment-list">
			  @foreach($komentar as $k)
				<li class="comment">
					<div class="vcard bio">
					<img src="../assets/img/person/person_1.png" alt="Image placeholder">
					</div>
					<div class="comment-body">
					<h3>{{$k->name}}</h3>
					<div class="meta">{{$k->tanggal_komen}}</div>
					<p>{{$k->komentar}}</p>
					</div>
				</li>
			  @endforeach
            </ul> <!-- END .comment-list -->
          </div> <!-- end comment -->
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Buat Bahasan Diskusi</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="{{url('buatdiskusi')}}" method="post">
			@csrf
			<input type="hidden" name="id" value="{{Auth::user()->id}}">
			<div class="modal-body">
				<div class="field item form-group">
					<label class="col-form-label col-md-3 col-sm-3  label-align">Judul<span class="required">*</span></label>
					<div class="col-md-12 col-sm-12">
						<input class="form-control" type="text" class='text' name="judul_diskusi" required='required' oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')"/></div>
				</div>
				<div class="field item form-group">
					<label class="col-form-label col-md-3 col-sm-3  label-align">Deskripsi<span class="required">*</span></label>
					<div class="col-md-12 col-sm-12">
						<textarea required="required" name='deskripsi_diskusi' style="min-width: 100%"></textarea></div oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Buat</button>
			</div>
		</form>
		</div>
	</div>
	</div>

@endsection