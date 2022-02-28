@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'kegiatan', 'title' => __('Pondok Yatim')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">
            {{ __('kegiatan') }}
          </h1>
      </div>
  </div>
</div>
@endsection
