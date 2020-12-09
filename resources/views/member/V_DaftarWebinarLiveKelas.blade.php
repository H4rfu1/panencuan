@extends('layouts.temp')

@section('judul1', 'Upload bukti Pembayaran')
@section('judul', 'Bukti Pembayaran Webinar/live kelas')

@section('content')
<div class="page-section mt-0">
    <div class="container">
    <div class="row justify-content-center text-center wow fadeInUp">
<section class="credit-card">
		 <div class="container">
			<div class="card-holder">
			  <div class="card-box bg-news">
		       <div class="row">
				<div class="col-lg-6">
				 <div class="img-box">
				   <img src="{{asset('assets/favicon-light.png')}}" width="100" height="200" class="img-fluid" />
				 </div>
				</div>
				<div class="col-lg-6">
				
				<form action="{{url('daftarwebinar')}}" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="id" value="{{Auth::user()->id}}">
					<input type="hidden" name="plan_id" value="{{$data->id_webinar_livekelas}}">
				  <div class="card-details">
					<h3 class="title">Upload Bukti Pembayaran</h3>
					<p>Pembayaran ke rek BNI senilai Rp. {{$data->harga}}</p>
					<p>No. rek. 08357898273 a.n. Moh. Fahrul Hafidh</p>
					<div class="row">
					  <div class="form-group col-sm-12">
						<label for="gambar">Upload struk pembayaran</label>
						<input id="gambar" type="file" class="form-control" name="gambar" placeholder="gambar" required aria-label="Card Holder" aria-describedby="basic-addon1">
					  </div>
					  <div class="form-group col-sm-12">
						<button type="submit" class="btn btn-primary btn-block">Daftar</button>
					  </div>
					</div>
				  </div>
				</form>				
				
				</div><!--/col-lg-6 --> 
		  
		       </div><!--/row -->
			  </div><!--/card-box -->
			</div><!--/card-holder -->		 
			
		 </div><!--/container -->
        </section>
        </div>
    </div>
</div>
@endsection