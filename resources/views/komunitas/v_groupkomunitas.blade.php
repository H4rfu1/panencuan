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
							
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Hi, how are you samim?
									<span class="msg_time" > <span style="color:white; font-size: 10px;">NAMA PEMENANG</span>  8:40 AM, Today</span>
								</div>
							</div>

							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi Khalid i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
								</div>
							</div>
							

						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fa fa-paperclip" aria-hidden="true"></i></span>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>
  
@endsection