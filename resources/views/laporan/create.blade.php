@extends('layouts.app', ['activePage' => 'laporan', 'titlePage' => __('laporan')])

@section('content')
  <!-- content -->
  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
               
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Tambah Data Laporan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <form action="{{ route('laporan.store') }}" method="POST">
                            @csrf
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Tanggal_Awal') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="date" class="form-control @error('jumlah_barang') is-invalid @enderror"
                                    name="nama" value="{{ old('tanggal_awal') }}" placeholder="{{ __('Tanggal Awal ') }}" required>
                                @error('tanggal')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __(Tanggal _Akhir') }}</label>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror"
                                    name="jumlah" value="{{ old('jumlah') }}" placeholder="{{ __('tanggal akhir (date)') }}" required>
                                @error('tanggal')
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