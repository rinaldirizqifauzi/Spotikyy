<form action="{{ route('posting.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama">Nama Lagu</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}" id="nama" name="nama">
                   @error('nama')
                        <label style="color: red">{{ $message }}</label>
                   @enderror
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label for="video">Video</label>
            <div class="form-group">
              <input type="file" class="form-control @error('video') is-invalid @enderror"  id="video" name="video">
               @error('video')
                    <label style="color: red">{{ $message }}</label>
               @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="id_type">Choose Type Song</label>
            <select name="id_type" id="id_type" class="form-control @error('id_type') is-invalid @enderror">
                <option selected disabled>Choose Type Song</option>
                @foreach ($types as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('id_type')
                <label style="color: red">{{ $message }}</label>
            @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="id_genre">Choose Genre</label>
            <select name="id_genre" id="id_genre" class="form-control @error('id_genre') is-invalid @enderror">
                <option selected disabled>Choose Genre</option>
                @foreach ($genres as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('id_genre')
                <label style="color: red">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_band">Choose Band</label>
            <select name="id_band" id="id_band" class="form-control @error('id_band') is-invalid @enderror">
                <option selected disabled>Choose Band</option>
                @foreach ($bands as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('id_band')
                <label style="color: red">{{ $message }}</label>
            @enderror
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input id="deskripsi" type="hidden" name="deskripsi">
                <trix-editor input="deskripsi">{!! old('deskripsi') !!}</trix-editor>
                @error('deskripsi')
                        <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('posting.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
        <button type="submit" class="btn btn-primary btn-sm mb-2"> Simpan</button>
    </div>
</form>
