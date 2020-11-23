@extends('layouts.temp')

@section('judul1', 'Analisis Emiten Perusahaan')
@section('judul', 'Analisis Emiten')

@section('content')
  <div class="page-section">
  <div class="container bg-white">
					<div class="col col-md-12 pt-3">
						<div class="row ">
							<card class="col col-md-6">
								<h4>Analisis emiten perusahaan BRI:</h4>
										Health<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-info" role="progressbar" aria-valuenow="15"aria-valuemin="0" aria-valuemax="100" style="width:15%">1.5</div>
										</div>
										Growth<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100" style="width:80%">8</div>
										</div>
									
										Value<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:12%">1.2</div>
										</div>
              </card>
              <card class="col col-md-6 mb-3">
								<h4>Analisis emiten perusahaan BNI:</h4>
										Health<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-info" role="progressbar" aria-valuenow="15"aria-valuemin="0" aria-valuemax="100" style="width:15%">1.5</div>
										</div>
										Growth<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"aria-valuemin="0" aria-valuemax="100" style="width:80%">8</div>
										</div>
									
										Value<span class="pull-right strong"></span>
										 <div class="progress">
											<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:12%">1.2</div>
										</div>
              </card>
						</div>
					</div>
        </div>

  </div>

@endsection