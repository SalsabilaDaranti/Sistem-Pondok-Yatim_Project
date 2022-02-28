@extends('layouts.app', ['activePage' => 'laporan', 'titlePage' => __('laporan')])

@section('content')
  <!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Laporan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('laporan.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Tanggal Awal') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                                <input type="date" class="form-control @error('tanggal_awal') is-invalid @enderror"
                                    name="tanggal_awal" value="{{ old('nama_barang', $dat->tanggal_awal) }}" required>
                                <!-- error message -->
                                @error('tanggal_awal')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Tanggal Akhir') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror"
                                    name="jumlah_barang" value="{{ old('tanggal_akhir', $dat->tanggal_akhir) }}" required>
                                <!-- error message -->
                                @error('tanggal_akhir')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection