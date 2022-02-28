@extends('layouts.app', ['activePage' => 'kebutuhan', 'titlePage' => __('kebutuhan')])

@section('content')
  <!-- content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Kebutuhan</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('kebutuhan.create') }}" class="btn btn-sm btn-primary">Tambah Kebutuhan</a>
                </div>
              </div>
<!--   isi   -->

              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <tr>
                  <th>No.</th>
                    <th>Nama_Barang</th>
                    <th>Jumlah_Barang</th>
                    <th>Harga_Barang</th>
                    <th></th>
                  </tr></thead>
                  <tbody>
                  @php $i=1; @endphp
                  @forelse ($kebutuhan as $dat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $dat->nama_barang }}</td>
                                    <td>{{ $dat->jumlah_barang }}</td>
                                    <td>{{ $dat->harga_barang }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('kebutuhan.destroy', $dat->id) }}" method="POST">
                                            <a href="{{ route('kebutuhan.edit', $dat->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6">Data Kebutuhan tidak tersedia.</td>
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