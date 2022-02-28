@extends('layouts.app', ['activePage' => 'pengasuh', 'titlePage' => __('pengasuh')])

@section('content')
<!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Pengasuh</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('pengasuh.create') }}" class="btn btn-sm btn-primary">Tambah Pengasuh</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
              <table class="table table-hover">
                  <thead class=" text-primary">
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>updated</th>
                    <th></th>
                  </tr></thead>
                  <tbody>
                  @php $i=1; @endphp
                  @forelse ($pengasuh as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->nama }}</td>
                                    <td>{{ $dat->jenis_kelamin }}</td>
                                    <td>{{ $dat->umur }}</td>
                                    <td>{{ $dat->updated_at }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('pengasuh.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('pengasuh.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6">Data Pengasuh tidak tersedia.</td>
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