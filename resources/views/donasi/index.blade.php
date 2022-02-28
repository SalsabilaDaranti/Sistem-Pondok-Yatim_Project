@extends('layouts.app', ['activePage' => 'donasi', 'titlePage' => __('donasi')])

@section('content')
  <!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar Donasi</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('donasi.create') }}" class="btn btn-sm btn-primary">Tambah Donasi</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <tr>
                    <th>No.</th>
                    <th>Donatur</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th></th>
                  </tr></thead>
                  <tbody>
                  @php $i=1; @endphp
                  @forelse ($donasi as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->nama_donatur }}</td>
                                    <td>{{ $dat->jumlah }}</td>
                                    <td>{{ $dat->tanggal }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('donasi.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('donasi.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-confirm">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6">Data Donasi tidak tersedia.</td>
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