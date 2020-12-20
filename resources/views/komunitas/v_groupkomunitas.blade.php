@extends('layouts.temp')
@section('judul', 'Komunitas')
@section('judul1', 'Diskusi Komunitas')

@section('content')
  <div class="page-section">
    <div class="container">
      <div class="row">
      <div class="col-md-12 col-xl-12 chat">
					<div class="card">
						<div class="card-body msg_card_body">
						@foreach($data as $p)
							@if(Auth::user()->id != $p->id)
							<div class="d-flex justify-content-start">
								<span style="color:white; font-size: 12px;">{{$p->name}}</span>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('images/img.png')}}" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									{{$p->komentar}}
									<span class="msg_time" >{{substr($p->tanggal_komen,0,10)}}</span>
								</div>
							</div>
							@else
								<div class="d-flex justify-content-end">
									<span style="color:white; font-size: 12px;">{{$p->name}}</span>
								</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									{{$p->komentar}}
									<span class="msg_time" >{{substr($p->tanggal_komen,0,10)}}</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{asset('images/img.png')}}" class="rounded-circle user_img_msg">
								</div>
							</div>
							@endif
							@endforeach
						</div>
						<div class="card-footer">
							<form action="{{url('kirimpesan')}}" method="post">
								@csrf
								<input type="hidden" name="id" value="{{Auth::user()->id}}">
								<div class="input-group">
									<!-- <div class="input-group-append">
										<span class="input-group-text attach_btn"><i class="fa fa-paperclip" aria-hidden="true"></i></span>
									</div> -->
									<textarea name="komen" class="form-control type_msg" placeholder="Type your message..." required></textarea>
									<div class="input-group-append">
									<button type="submit" class="input-group-text send_btn"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>
  
@endsection