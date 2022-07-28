@extends('layouts.backend')

@section('title')
    Music | {{ config('app.name') }}
@endsection

@section('title-page')
    Play Music
@endsection

@section('content-header')
<div class="row">
    @include('components.menu')
</div>
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center" >
                        <div class="video-player">
                            <video class="video w-100 border-radius-lg shadow-sm">
                                <source src="{{ asset('upload') }}/{{ $data->video }}" class="mt-8">
                            </video>
                            <div class="col-xl-12 col-sm-6">
                                Volume :<input id="volume" type="range" class="volume mx-3" min="0" max="1" step="0.01" value="1">
                            </div>
                            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto ">
                                <div class="nav-wrapper position-relative end-0">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item">
                                            <div class="player-controls">
                                                <button class="play-button mb-0 px-0 py-1 px-5 btn btn-primary mb-2" href="{{ route('posting.index') }}" >
                                                    <span class="ms-2">Play</span>
                                                </button>
                                                <a href="{{ route('posting.fullscreen', $data->id) }}" class="mb-0 px-0 py-1 px-5 btn btn-warning mb-2" href="{{ route('posting.index') }}" >
                                                    <span class="ms-2">Full Screen</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
              <img src="{{ asset('image') }}/{{ $data->bands->image }}" alt="Image placeholder" class="card-img-top">
              <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                  <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                    <a href="javascript:;">
                      <img src="{{ asset('thumbnail') }}/{{ $data->bands->thumbnail }}" class="rounded-circle img-fluid border border-2 border-white">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <div class="text-center mt-4">
                  <div class="h6 font-weight-300">
                    {{ $data->nama }} - {{ $data->bands->nama }}
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i>{!! $data->deskripsi !!}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
@section('sidebar-song')
<div class="sidenav-footer">
    @include('components.dashboard.genre')
</div>
@endsection

@section('sidebar-genre')
<div class="sidenav-footer">
    @include('components.dashboard.song')
</div>
@endsection
