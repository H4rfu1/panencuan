@extends('layouts.dash')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="">
        <h3>Kelola Akun Pemateri</h3>
        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                  <a class="btn btn-primary" href="{{url('buatakun')}}">Tambah Pemateri</a>
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
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">username</th>
                            <th class="column-title">Email </th>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $p)
                          @if($loop->iteration % 2 == 1)
                          <tr class="even pointer" onclick="window.location='{{url('profil/'.$p->id)}}';" style="cursor: pointer;">
                            <td>{{ $loop->iteration }}</td>
                            <td class=" ">{{ $p->name }}</td>
                            <td class=" ">{{ $p->jenis_kelamin }}</td>
                            <td class=" ">{{ $p->username }}</td>
                            <td class=" ">{{ $p->email }}</td>
                            </td>
                          </tr>
                          @else
                          <tr class="odd pointer" onclick="window.location='{{url('profil/'.$p->id)}}';" style="cursor: pointer;">
                            <td>{{ $loop->iteration }}</td>
                            <td class=" ">{{ $p->name }}</td>
                            <td class=" ">{{ $p->jenis_kelamin }}</td>
                            <td class=" ">{{ $p->username }}</td>
                            <td class=" ">{{ $p->email }}</td>
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
