<div class="row">
    <div class="card mt-4 col-xl-12 col-sm-6 mb-xl-0 mb-4 shadow-lg  card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Choose Album
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 items-right my-sm-auto  me-sm-0 mx-auto mt-3">
                    <div class="col-auto my-auto">
                        <div class="row justify-content-center">
                            <div class="col-auto my-auto">
                                <div class="h-100">
                                    <h6 class="my-3">
                                        Choose Type
                                    </h6>
                                </div>
                            </div>
                            @foreach ($types as $field)
                            <div class="col-md-3">
                                <div class="h-100">
                                    <h5 class="mb-1">
                                        <center>
                                          <a href="{{ route('types.bands', ['id' => $field->id]) }}" class="btn btn-xs mb-1 btn-dark mt-3">{{ $field->nama }} </a>
                                        </center>
                                    </h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
