@extends('layouts.app', ['activePage' => 'laporan', 'titlePage' => __('laporan')])

@section('content')
  <!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Laporan</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('laporan.create') }}" class="btn btn-sm btn-primary">Tambah Laporan</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <tr>
                  <th>Tanggal Awal</th>
                    <th>tanggal Akhir</th>
                   
                    <th></th>
                  </tr></thead>
                  <tbody>
                  @php $i=1; @endphp
                  @forelse ($laporan as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->tanggal_awal }}</td>
                                    <td>{{ $dat->tanggal_akhir }}</td>
                                  
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('laporan.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('laporan.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6">Data Laporan Tidak Tersedia.</td>
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