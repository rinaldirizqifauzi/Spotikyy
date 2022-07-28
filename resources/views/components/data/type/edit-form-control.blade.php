<form action="{{ route('type.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama">Song Type</label>
                  <input type="text"  class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama', $data->nama) }}" id="nama" name="nama">
                   @error('nama')
                        <label style="color: red">{{ $message }}</label>
                   @enderror
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('genre.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
        <button type="submit" class="btn btn-warning btn-sm mb-2"> Update</button>
    </div>
</form>
