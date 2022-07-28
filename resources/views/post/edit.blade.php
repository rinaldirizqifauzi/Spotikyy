@extends('layouts.backend')

@section('title')
    Posting | {{ config('app.name') }}
@endsection

@section('title-page')
   Tambah Posting
@endsection

@section('content-header')
<div class="row">
    @include('components.content-header')
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header  pb-0 p-3">
      <div class="d-flex justify-content-center">
        <h6 class="mb-2 text-center">Edit - {{ $data->nama }} </h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
        @include('components.data.post.edit-form-control')
   </div>
</div>
@endsection
