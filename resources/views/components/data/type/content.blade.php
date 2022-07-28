<table class="table align-items-center mb-0">
    <thead>
    <tr>
        <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No</th>
        <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Type Song</th>
        <th class="text-secondary opacity-7">Manage</th>
    </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
            @foreach ($data as $field)
            <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm text-center">{{ $no++ }}</h6>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm text-center">{{ $field->nama }}</h6>
                    </div>
                </td>

                <td>
                    <a href="{{ route('type.edit', $field->id) }}" class="btn btn-xs mb-1 btn-warning">Edit </a>
                    <a href="{{ route('type.delete', $field->id) }}" class="btn btn-xs mb-1 btn-danger" onclick="return confirm('Apa Kamu Yakin Menghapus Data Ini')">Hapus</a>
                </td>
            <tr>
            @endforeach
    </tbody>
</table>
