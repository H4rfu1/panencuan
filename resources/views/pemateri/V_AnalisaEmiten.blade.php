@extends('layouts.dash')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="">
        <h3>Kelola Emiten</h3>
        <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                    @if(Auth::user()->role_id == 3)
                    <a class="btn btn-primary" href="{{url('tambahemiten')}}">Tambah Analisa Emiten</a>
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
                            <th class="column-title">Nama Pemateri</th>
                            <th class="column-title">Kode saham </th>
                            <th class="column-title">Health</th>
                            <th class="column-title">Growth</th>
                            <th class="column-title">Value</th>
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
                            <td class=" ">{{ $p->kode_saham }}</td>
                            <td class=" ">{{ $p->health }}</td>
                            <td class=" ">{{ $p->growth }}</td>
                            <td class=" ">{{ $p->value }}</td>
                            <td class=" last">
                              <a href="{{url('emiten/'.$p->id_emiten)}}/edit"><span class="badge badge-warning" style="font-size: 1em;">Edit</span></a>
                              <button data-id="{{$p->id_emiten}}" data-toggle="modal" data-target="#delModal"  class="badge badge-danger mt-2 send_btn" style="font-size: 1em; border: none;">Hapus</button>
                            </td>
                          </tr>
                          @else
                          <tr class="odd pointer">
                          <td>{{ $loop->iteration }}</td>
                            <td class=" ">{{ $p->name }}</td>
                            <td class=" ">{{ $p->kode_saham }}</td>
                            <td class=" ">{{ $p->health }}</td>
                            <td class=" ">{{ $p->growth }}</td>
                            <td class=" ">{{ $p->value }}</td>
                            <td class=" last">
                              <a href="{{url('emiten/'.$p->id_emiten)}}/edit"><span class="badge badge-warning" style="font-size: 1em;">Edit</span></a>
                              <button data-id="{{$p->id_emiten}}" data-toggle="modal" data-target="#delModal" class="badge badge-danger mt-2 send_btn" style="font-size: 1em; border: none;">Hapus</button>
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
<!-- Modal -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="delete-form" action="" method="POST" >
      @csrf 
      @method('delete')
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tetap ingin menghapus?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Ya</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $('.send_btn').on('click', function (e) {
          e.preventDefault();
          let id = $(this).data('id');
          console.log(id);
          $("#delete-form").attr('action', "{{url('emiten')}}/"+id);
        });
</script>


@endsection
