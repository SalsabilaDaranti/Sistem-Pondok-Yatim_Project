@extends('layouts.app', ['activePage' => 'kegiatan', 'titlePage' => __('kegiatan')])

@section('content')
  <!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Kegiatan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('kegiatan.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Judul') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ old('judul', $dat->judul) }}" required>
                                <!-- error message -->
                                @error('nama_barang')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                    name="keterangan" value="{{ old('keterangan', $dat->keterangan) }}" required>
                                <!-- error message -->
                                @error('judul')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="img" class="form-control @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ old('foto', $dat->foto) }}" required>
                                <!-- error message -->
                                @error('foto')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
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