<div class="row">
    @foreach ($data as $field)
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 p-4">
            <div class="card card-profile">
            <img src="{{ asset('image') }}/{{ $field->image }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                    <a href="javascript:;">
                    <img src="{{ asset('thumbnail') }}/{{ $field->thumbnail }}" class="rounded-circle img-fluid border border-2 border-white">
                    </a>
                </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row gx-4">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $field->nama }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="h-100">
                            <a href="{{ route('band.edit', $field->id) }}" class="btn btn-xs mb-1 btn-warning">Edit </a>
                            <a href="{{ route('band.delete', $field->id) }}" class="btn btn-xs mb-1 btn-danger" onclick="return confirm('Apa Kamu Yakin Menghapus Data Ini')">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
