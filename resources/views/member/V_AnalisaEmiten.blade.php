@extends('layouts.temp')

@section('judul1', 'Analisis Emiten Perusahaan')
@section('judul', 'Analisis Emiten')

@section('content')
  <div class="page-section">
  <div class="container bg-white">
	<div class="col col-md-12 p-3">
		<div class="row">
			@foreach($data as $p)
			<card class="col col-md-6">
				<h4>Analisis emiten {{$p->kode_saham}}:</h4>
					Health<span class="pull-right strong"></span>
						<div class="progress">
						<div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{$p->health}}"aria-valuemin="0" aria-valuemax="100" style="width:{{$p->health}}%">{{$p->health / 10}}</div>
					</div>
					Growth<span class="pull-right strong"></span>
						<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$p->growth}}"aria-valuemin="0" aria-valuemax="100" style="width:{{$p->growth}}%">{{$p->growth / 10}}</div>
					</div>
				
					Value<span class="pull-right strong"></span>
						<div class="progress">
						<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$p->value}}"aria-valuemin="0" aria-valuemax="100" style="width:{{$p->value}}%">{{$p->value / 10}}</div>
					</div>
			</card>
			@endforeach
			</div>
		</div>
	</div>

  </div>

@endsection