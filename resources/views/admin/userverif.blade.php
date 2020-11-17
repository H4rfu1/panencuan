@extends('layouts.dash')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="">
        <h3>Verifikasi User</h3>
        <div class="col-md-12 col-sm-12  ">
        @if (session('batal'))
            <div class="alert alert-success alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            {{ session('batal') }}
            </div>
        @endif
                <div class="x_panel">
                  <div class="x_content">
                  <!-- <a class="btn btn-primary" href="{{url('buatakun/3')}}">Tambah akun pimpinan</a> -->
                    @if (session('status'))
                      <div class="alert alert-success alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{ session('status') }}
                      </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Nama</th>
                            <th class="column-title">email </th>
                            <th class="column-title">status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($data as $d)
                        <tr class="even pointer" onclick="window.location='{{url('admin/'.$d->id_pembayaran)}}';" style="cursor: pointer;">
                            <td>{{$loop->count}}</td>
                            <td class=" ">{{$d->name}}</td>
                            <td class=" ">{{$d->email}}</td>
                            <td class=" ">{{$d->status_verif}}</td>
                            <td class=" last"><a href="{{url('admin/'.$d->id_pembayaran)}}"><span class="badge badge-info">Detail</span></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection
