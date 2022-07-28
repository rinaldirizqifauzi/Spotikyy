@extends('layouts.backend')

@section('title')
    Type | {{ config('app.name') }}
@endsection

@section('title-page')
   Edit Type
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
        <h6 class="mb-2">Form Edit Type Song</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
        @include('components.data.type.edit-form-control')
   </div>
</div>
@endsection
