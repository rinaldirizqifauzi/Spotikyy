@extends('layouts.backend')

@section('title')
    Music | {{ config('app.name') }}
@endsection

@section('title-page')
   Add Music
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
        <h6 class="mb-2">Form Tambah Data Music</h6>
      </div>
    </div>
    {{-- Form --}}
   <div class="container">
        @include('components.data.post.create-form-control')
   </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault
    });
</script>
@endsection
