@extends('layouts.backend')

@section('title')
    Album | {{ config('app.name') }}
@endsection

<style>
    .scroll{
        width: 100%;
        overflow: scroll;
        height: 485px;
    }
</style>

@section('title-page')
    Album
@endsection

@section('content-header')
    @include('components.menu')
@endsection

@section('content')
<div class="card">
    <div class="scroll">
        @include('components.dashboard.content')
    </div>
</div>
@endsection

@section('sidebar-genre')
<div class="sidenav-footer">
    @include('components.dashboard.song')
</div>
@endsection

@section('sidebar-song')
<div class="sidenav-footer">
    @include('components.dashboard.genre')
</div>
@endsection
