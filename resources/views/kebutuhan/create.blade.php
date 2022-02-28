@extends('layouts.app', ['activePage' => 'kebutuhan', 'titlePage' => __('kebutuhan')])

@section('content')
  <!-- content -->
  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
               
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Tambah Data Kebutuhan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <form action="{{ route('kebutuhan.store') }}" method="POST">
                            @csrf
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama_barang') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror"
                                    name="nama" value="{{ old('Nama_barang') }}" placeholder="{{ __('Nama Barang ') }}" required>
                                @error('nama')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('jumlah') }}</label>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror"
                                    name="jumlah" value="{{ old('jumlah') }}" placeholder="{{ __('Jumlah Barang (IDR)') }}" required>
                                @error('jumlah')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Harga') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('Harga Barang') is-invalid @enderror"
                                    name="harga" value="{{ old('Harga') }}" placeholder="{{ __('Harga Barang(IDR) ') }}" required>
                                @error('harga')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('kebutuhan.index') }}" class="btn btn-md btn-secondary">Kembali</a>

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