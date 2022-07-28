@extends('layouts.backend')

@section('title')
    Bands | {{ config('app.name') }}
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
    Bands
@endsection

@section('content-header')
<div class="row">
    @include('components.content-header')
</div>
@endsection

@section('content')
<div class="card ">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Choose Band</h6>
        <a href="{{ route('band.create') }}"  class="btn btn-primary btn-sm mb-0"> Tambah Data</a>
      </div>
    </div>
    <div class="scroll">
        @include('components.data.band.content')
    </div>
</div>
@endsection
