<div class="table-responsive">
    <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Nama Video</th>
            <th class="text-secondary opacity-7">Manage</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @forelse ($posts as $post)
            <tr>
              <td>
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm text-center">{{ $no++ }}</h6>
                </div>
              </td>
              <td>
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm text-center">{{ $post->nama }}</h6>
                </div>
              </td>

              <td>
                <a href="{{ route('posting.show', $post->id) }}" class="btn btn-xs mb-1 btn-info">Show </a>
              </td>
            <tr>
            @endforeach
        </tbody>
    </table>
</div>
