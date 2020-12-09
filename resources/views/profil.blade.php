@extends('layouts.temp')

@section('judul', 'Profil')
@section('judul1', 'Profil Pengguna')

@section('content')
<div class="page-section mt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{ session('status') }}
                </div>
            @endif
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">{{Auth::user()->username}}</h6>
                                <p>{{Auth::user()->name}}</p> <a href="{{url('profil/edit')}}"><i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Profil</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Kota</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->kota}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Tanggal Lahir</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->tanggal}}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Jenis Kelamin</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->jenis_kelamin}}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">membership</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Status Member</p>
                                        <h6 class="text-muted f-w-400">
                                        @if(Auth::user()->status_id == 2)
                                            {{"Member"}}
                                        @else
                                            {{"Non Member"}}
                                        @endif
                                        </h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Data member</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">nim</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->nim}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Jurusan</p>
                                        <h6 class="text-muted f-w-400">{{Auth::user()->jurusan}}</h6>
                                    </div>
                                </div>
                                <!-- <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection