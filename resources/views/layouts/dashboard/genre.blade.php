@extends('layouts.backend')

@section('title')
    Genres | {{ config('app.name') }}
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
    Genres
@endsection

@section('content-header')
    @include('components.menu')
@endsection

@section('content')
<div class="card ">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2"> Genre - {{ $genre->nama }}</h6>
        <a href="{{ route('dashboard.index') }}"  class="btn btn-primary btn-sm mb-0"> Choose Genre</a>
      </div>
    </div>
    <div class="scroll">
        @include('components.genre.content')
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


