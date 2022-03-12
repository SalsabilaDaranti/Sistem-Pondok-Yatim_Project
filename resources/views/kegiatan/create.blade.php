@extends('layouts.app', ['activePage' => 'kegiatan', 'titlePage' => __('kegiatan')])

@section('content')
  <!-- content -->
  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
               
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Tambah Data Kegiatan</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
 
                        <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Judul') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ old('judul_kegiatan') }}" placeholder="{{ __('judul_kegiatan ') }}" required>
                                @error('judul')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                    name="keterangan" value="{{ old('keterangan') }}" placeholder="{{ __('keterangan ') }}" required>
                                @error('keterangan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    name="img" value="{{ old('foto') }}" placeholder="{{ __('foto ') }}" required>
                                @error('foto')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                     
                          </div>
                        </div>

                        

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('kegiatan.index') }}" class="btn btn-md btn-secondary">Kembali</a>

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