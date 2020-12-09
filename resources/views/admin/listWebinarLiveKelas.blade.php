@extends('layouts.dash')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="">
        <h3>Kelola Video</h3>
        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                    @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 2 )
                      <a class="btn btn-primary" href="{{url('tambahwebinar')}}">Tambah Webinar / Live Kelas</a>
                    @endif
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
                            <th class="column-title">Pengelola </th>
                            <th class="column-title">Judul</th>
                            <th class="column-title">Opsi</th>
                            <th class="column-title">Waktu</th>
                            <th class="column-title">Harga</th>
                            <th class="column-title">Kuota</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($data as $p)
                          @if($loop->iteration % 2 == 1)
                          <tr class="even pointer">
                            <td>{{ $loop->iteration }}</td>
                            <td class=" ">{{ $p->name }}</td>
                            <td class=" ">{{ $p->judul }}</td>
                            <td class=" ">{{ $p->opsi }}</td>
                            <td class=" ">{{ substr($p->waktu,0,10) }}</td>
                            <td class=" ">{{ $p->harga }}</td>
                            <td class=" ">{{ $p->kuota }}</td>
                            <td class=" last">
                              <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}"><span class="badge badge-info" style="font-size: 1em;">Detail</span></a>
                              <!-- <a href="{{url('video/'.$p->id_video)}}/edit"><span class="badge badge-warning" style="font-size: 1em;">Edit</span></a> -->
                            </td>
                          </tr>
                          @else
                          <tr class="odd pointer">
                            <td>{{ $loop->iteration }}</td>
                            <td class=" ">{{ $p->name }}</td>
                            <td class=" ">{{ $p->judul }}</td>
                            <td class=" ">{{ $p->opsi }}</td>
                            <td class=" ">{{ substr($p->waktu,0,10) }}</td>
                            <td class=" ">{{ $p->harga }}</td>
                            <td class=" ">{{ $p->kuota }}</td>
                            <td class=" last">
                              <a href="{{url('webinar/'.$p->id_webinar_livekelas)}}"><span class="badge badge-info" style="font-size: 1em;">Detail</span></a>
                              <!-- <a href="{{url('video/'.$p->id_video)}}/edit"><span class="badge badge-warning" style="font-size: 1em;">Edit</span></a> -->
                            </td>                            
                          </tr>
                          @endif
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
