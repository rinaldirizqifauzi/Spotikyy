<form action="{{ route('posting.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Nama Lagu</label>
                <input type="text" value="{{ old('nama', $data->nama) }}" class="form-control @error('nama') is-invalid @enderror"  id="nama" name="nama">
                @error('nama')
                        <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_band">Choose Band</label>
                <select name="id_band" id="id_band" class="form-control">
                    <option selected disabled>Choose Band</option>
                    @foreach ($bands as $item )
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_type">Choose Type Song</label>
                <select name="id_type" id="id_type" class="form-control">
                    <option selected disabled>Choose Type Song</option>
                    @foreach ($types as $item)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_genre">Choose Genre</label>
                <select name="id_genre" id="id_genre" class="form-control">
                    <option selected disabled>Choose Genre</option>
                    @foreach ($genres as $item)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input id="deskripsi" type="hidden" name="deskripsi">
                <trix-editor input="deskripsi">{!! $data->deskripsi !!}</trix-editor>
                @error('deskripsi')
                        <label style="color: red">{{ $message }}</label>
                @enderror
            </div>
        </div>
      </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('posting.index') }}" class="btn btn-dark btn-sm mb-2 me-2"> Kembali</a>
        <button type="submit" class="btn btn-warning btn-sm mb-2"> Edit</button>
    </div>
</form>
