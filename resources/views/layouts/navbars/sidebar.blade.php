<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-4.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="" class="simple-text logo-normal">
      {{ __('Pondok Yatim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">

      @if(auth()->user()->email == 'admin@pondok.com')
      <!-- Menu Admin -->
            <li class="nav-item{{ $activePage == 'pengasuh' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pengasuh.index') }}">
              <i class="material-icons">person</i>
              <p>{{ __('Pengasuh') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'anakasuh' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('anakasuh.index') }}">
                  <i class="material-icons">person</i>
                    <span class="sidebar-normal"> {{ __('Anak Asuh') }} </span>
                  </a>
            </li>
            <li class="nav-item{{ $activePage == 'kebutuhan' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('kebutuhan.index') }}">
              <i class="material-icons">person</i>
              <p>{{ __('kebutuhan') }}</p>
              </a>
            </li>

      @else
      <!-- Menu User -->
            <li class="nav-item{{ $activePage == 'donasi' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('donasi.index') }}">
              <i class="material-icons">content_copy</i>
              <p>{{ __('donasi') }}</p>
              </a>
            </li>

<!-- Menu laporan
            <li class="nav-item{{ $activePage == 'laporan' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('laporan.index') }}">
              <i class="material-icons">content_copy</i>
              <p>{{ __('laporan') }}</p>
              </a>
            </li>
 -->

      @endif
    </ul>
  </div>
</div>
