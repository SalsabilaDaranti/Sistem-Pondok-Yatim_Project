@extends('layouts.app', ['activePage' => 'donasi', 'titlePage' => __('donasi')])

@section('content')
  <!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Donasi</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('donasi.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Donatur') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama_donatur') is-invalid @enderror"
                                    name="nama_donatur" value="{{ old('nama_donatur', $dat->nama_donatur) }}" required>
                                <!-- error message -->
                                @error('nama_donatur')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Jumlah') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror"
                                    name="jumlah" value="{{ old('jumlah', $dat->jumlah) }}" required>
                                <!-- error message -->
                                @error('jumlah')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('tanggal') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ old('tanggal', $dat->tanggal) }}" required>
                                <!-- error message -->
                                @error('tanggal')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>


                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('donasi.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                        </form>
                    </div>
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