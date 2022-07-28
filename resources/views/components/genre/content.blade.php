<div class="row">
    @foreach ($posts as $field)
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4 p-4">
            <div class="card card-profile">
            <img src="{{ asset('image') }}/{{ $field->bands->image }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                    <a href="javascript:;">
                    <img src="{{ asset('thumbnail') }}/{{ $field->bands->thumbnail }}" class="rounded-circle img-fluid border border-2 border-white">
                    </a>
                </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row gx-4">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <p class="mb-1">
                                {{ $field->nama }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="h-100">
                            <a href="{{ route('posting.show', $field->id) }}" class="btn btn-xs mb-1 btn-info">Show </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
