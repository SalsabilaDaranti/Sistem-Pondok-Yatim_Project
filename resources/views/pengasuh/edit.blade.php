@extends('layouts.app', ['activePage' => 'pengasuh', 'titlePage' => __('pengasuh')])

@section('content')
<!-- content -->

  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Data Pengasuh</h4>
            </div>
            <div class="card-body">
              
<!--   isi   -->
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pengasuh.update', $dat->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                          <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama', $dat->nama) }}" required>
                                <!-- error message -->
                                @error('nama')
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
                          <label class="col-sm-2 col-form-label">{{ __('Umur') }}</label>
                          <div class="col-sm-1">
                            <div class="form-group">
                                <input type="text" class="form-control @error('umur') is-invalid @enderror"
                                    name="umur" value="{{ old('umur', $dat->umur) }}" required>
                                <!-- error message -->
                                @error('umur')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                          </div>
                        </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('pengasuh.index') }}" class="btn btn-md btn-secondary">Kembali</a>
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