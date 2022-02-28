@extends('layouts.app', ['activePage' => 'anakasuh', 'titlePage' => __('Anak Asuh')])

@section('content')
<!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Anak Asuh</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('anakasuh.create') }}" class="btn btn-sm btn-primary">Tambah Anak Asuh</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>Ortu Wali</th>
                    <th></th>
                  </tr></thead>
                  <tbody>
                @php $i=1; @endphp
                  @forelse ($anakasuh as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->nama_anak }}</td>
                                    <td>{{ $dat->tgl_lahir }}</td>
                                    <td>{{ $dat->jenis_kelamin }}</td>
                                    <td>{{ $dat->pendidikan }}</td>
                                    <td>{{ $dat->nama_ortu_wali }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('anakasuh.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('anakasuh.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="7">Data Anak Asuh tidak tersedia.</td>
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