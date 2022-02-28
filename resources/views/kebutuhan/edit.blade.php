@extends('layouts.app', ['activePage' => 'kebutuhan', 'titlePage' => __('kebutuhan')])

@section('content')
  <!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Kebutuhan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('kebutuhan.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama Barang') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" value="{{ old('nama_barang', $dat->nama_barang) }}" required>
                                <!-- error message -->
                                @error('nama_barang')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Jumlah Barang') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('jumlah_barang') is-invalid @enderror"
                                    name="jumlah_barang" value="{{ old('jumlah_barang', $dat->jumlah_barang) }}" required>
                                <!-- error message -->
                                @error('jumlah_barang')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Harga Barang') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('harga_barang') is-invalid @enderror"
                                    name="harga_barang" value="{{ old('harga_barang', $dat->harga_barang) }}" required>
                                <!-- error message -->
                                @error('harga_barang')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>


                        <button type="submit" class="btn btn-md btn-primary">Update</button>
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