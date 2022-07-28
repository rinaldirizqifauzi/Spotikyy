<div class="card card-plain shadow-none" id="sidenavCard">
    <div class="card-body text-center my-3  w-100 pt-0">
        <span class=" font-weight-bold">Choose Song</span>
          <div class="docs-info-song">
              @foreach ($songs as $item)
              <a class="nav-link" href="{{ route('posting.show', ['id' => $item->id]) }}">
                  <span class="nav-link-text ms-1">{{ $item->nama }}</span>
              </a>
              @endforeach
          </div>
    </div>
</div>
