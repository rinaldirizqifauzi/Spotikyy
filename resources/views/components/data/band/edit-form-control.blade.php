<form action="{{ route('band.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            <label for="nama">Nama Band</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $data->nama) }}" id="nama" name="nama">
               @error('nama')
                    <label style="color: red">{{ $message }}</label>
               @enderror
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Logo</label>
                    <div class="form-group">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                            <label style="color: red">{{ $message }}</label>
                    @enderror
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="thumbnail">Gambar</label>
                    <div class="form-group">
                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"  id="thumbnail" name="thumbnail">
                    @error('thumbnail')
                            <label style="color: red">{{ $message }}</label>
                    @enderror
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('band.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
        <button type="submit" class="btn btn-primary btn-sm mb-2"> Edit</button>
    </div>
</form>
