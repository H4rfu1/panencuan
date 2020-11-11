@extends('layouts.temp')

@section('judul1', 'Upload bukti Pembayaran')
@section('judul', 'Bukti Pembayaran')

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
				
				<form>
				  <div class="card-details">
					<h3 class="title">Upload Bukti Pembayaran</h3>
					<p>Pembayaran ke rek BNI senilai {{$harga}}</p>
					<p>No. rek. 08357898273 a.n. Moh. Fahrul Hafidh</p>
					<div class="row">
					  <div class="form-group col-sm-12">
						<label for="gambar">Gambar struk pembayaran</label>
						<input id="gambar" type="file" class="form-control" placeholder="gambar" aria-label="Card Holder" aria-describedby="basic-addon1">
					  </div>
					  <div class="form-group col-sm-12">
						<button type="button" class="btn btn-primary btn-block">Kirim</button>
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