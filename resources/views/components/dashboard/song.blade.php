
<div class="card card-plain shadow-none" id="sidenavCard">
    <div class="card-body text-center my-3  w-100 pt-0">
        <span class=" font-weight-bold">Choose Genre</span>
          <div class="docs-info">
              @foreach ($genres as $item)
              <a class="nav-link" href="{{ route('genres.bands', ['id' => $item->id]) }}">
                  <span class="nav-link-text ms-1">{{ $item->nama }}</span>
              </a>
              @endforeach
          </div>
    </div>
</div>
