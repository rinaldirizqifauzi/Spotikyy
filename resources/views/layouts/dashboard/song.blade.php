{{-- @extends('layouts.backend')

@section('title')
    Song | {{ config('app.name') }}
@endsection

<style>
    .scroll{
        width: 100%;
        overflow: scroll;
        height: 485px;
    }
</style>

@section('title-page')
    Song
@endsection

@section('content-header')
    @include('components.menu')
@endsection

@section('content')
<div class="card ">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Choose Music</h6>
      </div>
    </div>@extends('layouts.backend')

    @section('title')
        Types | {{ config('app.name') }}
    @endsection

    <style>
        .scroll{
            width: 100%;
            padding: 10px;
            overflow: scroll;
            height: 485px;
        }
    </style>

    @section('title-page')
        Types
    @endsection

    @section('content-header')
        @include('components.menu')
    @endsection

    @section('content')
    <div class="card ">
        <div class="card-header  pb-0 p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-2"> Type - {{ $type->nama }}</h6>
            <a href="{{ route('dashboard.index') }}"  class="btn btn-primary btn-sm mb-0"> Choose Type</a>
          </div>
        </div>
        <div class="scroll">
            @include('components.dashboard.type')
        </div>
    </div>
    @endsection

    @section('sidebar-genre')
    <div class="sidenav-footer">
        @include('components.dashboard.genre')
    </div>
    @endsection

    <div class="scroll">
        @include('components.dashboard.song')
    </div>
  </div>
@endsection

@section('sidebar-genre')
<div class="sidenav-footer">
    @include('components.dashboard.genre')
</div>
@endsection

@section('sidebar-song')
<div class="sidenav-footer">
    @include('components.dashboard.genre')
</div>
@endsection --}}

Tes
