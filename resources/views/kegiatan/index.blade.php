@extends('layouts.app', ['activePage' => 'kegiatan', 'titlePage' => __('kegiatan')])

@section('content')
  <!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Kegiatan</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-primary">Tambah Kegiatan</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <tr>
                  <th>No.</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th></th>
                  </tr></thead>
                  <tbody>
                  @php $i=1; @endphp
                  @forelse ($kegiatan as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->judul }}</td>
                                    <td>{{ $dat->keterangan }}</td>
                                    <td>{{ $dat->foto }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('kegiatan.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('kegiatan.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6">Data Kegiatan tidak tersedia.</td>
                                </tr>
                                @endforelse
                    </tbody>
                </table>
              </div>
<!--   isi   -->

</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection