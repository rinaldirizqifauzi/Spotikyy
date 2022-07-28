@extends('layouts.backend')

@section('title')
    Music | {{ config('app.name') }}
@endsection

<style>
    .scroll{
        width: 100%;
        padding: 10px;
        overflow: scroll;
        height: 430px;
    }
</style>

@section('title-page')
    Music
@endsection

@section('content-header')
<div class="row">
    @include('components.content-header')
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Choose Music</h6>
        <a href="{{ route('posting.create') }}"  class="btn btn-primary btn-sm mb-0"> Tambah Data</a>
      </div>
    </div>
    <div class="scroll">

        @include('components.data.post.content')
    </div>
  </div>
@endsection
