@extends('layouts.backend')

@section('title')
    Content | {{ config('app.name') }}
@endsection

<style>
    .scroll{
        width: 100%;
        overflow: scroll;
        height: 485px;
    }
</style>

@section('title-page')
    Content
@endsection

@section('content-header')
    @include('components.menu')
@endsection

@section('content')
<div class="card ">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Choose Albums</h6>
      </div>
    </div>
    <div class="scroll">
        @include('components.dashboard.album')
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
