@extends('layouts.backend')

@section('title')
    Bands | {{ config('app.name') }}
@endsection

@section('title-page')
   Edit Bands
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
        <h6 class="mb-2">Edit - {{ $data->nama }} </h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
        @include('components.data.band.edit-form-control')
   </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault
    });
</script>
@endsection
