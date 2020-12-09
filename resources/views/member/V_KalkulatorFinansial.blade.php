@extends('layouts.temp')

@section('judul1', 'Kalkulator Finansial')
@section('judul', 'Kalkulator')

@section('content')
<div class="page-section mt-0">
    <div class="container">
    <div class="row justify-content-center text-center wow fadeInUp">
<section class="credit-card">
		 <div class="container">
			<div class="card-holder" id="form">
			  <div class="card-box bg-news">
		       <div class="row">
				<div class="col-lg-6">
				 <div class="img-box">
				   <img src="{{asset('assets/favicon-light.png')}}" width="100" height="200" class="img-fluid" />
				 </div>
				</div>
				<div class="col-lg-6">
				
				<form action="{{url('kalkulator#container')}}" method="get">
					@csrf
				  <div class="card-details">
					<h3 class="title">Kalkulator Finansial</h3>
					<div class="row">
					  <div class="form-group col-sm-12">
						<input id="nominal" type="number" class="form-control mb-2" name="nominal" placeholder="Nominal (Rupiah)" required aria-label="Card Holder" aria-describedby="basic-addon1" value="{{$nominal}}">
						<input id="return" type="number" class="form-control  mb-2" name="return" placeholder="Return (%)" required aria-label="Card Holder" aria-describedby="basic-addon1" value="{{$return}}">
						<input id="waktu" type="number" class="form-control mb-2" name="waktu" placeholder="Jangka Waktu (Tahun)" required aria-label="Card Holder" aria-describedby="basic-addon1" value="{{$waktu}}">
						@if($hasil != '')
						<p>Perkiraan hasil investasi = {{$hasil}}</p>
					  @endif
					  </div>
					  
					  <div class="form-group col-sm-12">
						<button type="submit" class="btn btn-primary btn-block" >Hitung</button>
						<!-- <button type="reset" class="btn btn-primary btn-block" >Reset</button> -->
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