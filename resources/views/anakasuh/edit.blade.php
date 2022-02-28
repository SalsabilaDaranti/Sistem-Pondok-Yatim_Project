@extends('layouts.app', ['activePage' => 'anakasuh', 'titlePage' => __('Anak Asuh')])

@section('content')
<!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Anak Asuh</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('anakasuh.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama_anak') is-invalid @enderror"
                                    name="nama_anak" value="{{ old('nama_anak', $dat->nama_anak) }}" required>
                                <!-- error message -->
                                @error('nama_anak')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Tgl Lahir') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                    name="tgl_lahir" value="{{ old('tgl_lahir', $dat->tgl_lahir) }}" required>
                                @error('tgl_lahir')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Jenis Kelamin') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-Laki" {{ $dat->jenis_kelamin == "Laki-Laki" ? 'selected':'' }}>Laki-Laki</option>
                                    <option value="Perempuan" {{ $dat->jenis_kelamin == "Perempuan" ? 'selected':'' }}>Perempuan</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Pendidikan') }}</label>
                          <div class="col-sm-2">
                            <div class="form-group">
                                <select name="pendidikan" class="form-control" required>
                                    <option value="--" {{ $dat->pendidikan == "--" ? 'selected':'' }}>--</option>
                                    <option value="TK" {{ $dat->pendidikan == "TK" ? 'selected':'' }}>TK</option>
                                    <option value="SD" {{ $dat->pendidikan == "SD" ? 'selected':'' }}>SD</option>
                                    <option value="SMP" {{ $dat->pendidikan == "SMP" ? 'selected':'' }}>SMP</option>
                                    <option value="SMA" {{ $dat->pendidikan == "SMA" ? 'selected':'' }}>SMA</option>
                                </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Orang Tua/Wali') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama_ortu_wali') is-invalid @enderror"
                                    name="nama_ortu_wali" value="{{ old('nama_ortu_wali', $dat->nama_ortu_wali) }}" required>
                                <!-- error message -->
                                @error('nama_ortu_wali')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('anakasuh.index') }}" class="btn btn-md btn-secondary">Kembali</a>
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