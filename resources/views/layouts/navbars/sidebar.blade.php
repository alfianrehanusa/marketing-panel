<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="#" style="margin-left:10%">
                <img src="{{asset('assets')}}/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item {{ $activepage == 'dashboard' ? ' active' : '' }}">
                        <a class="nav-link" href="/dashboard">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- Data Transaksi --}}
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text">{{ __('Data Transaksi Tahun 2019') }}</span>
                        </a>
                        <div class="collapse {{ $activepage == 'data_transaksi' ? ' show' : '' }}" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $activepage == 'data_trx_januari' ? ' active' : '' }}">
                                    <a class="nav-link" href="/datatrx/bulan/1">
                                        {{ __('Januari') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/2">
                                        {{ __('Februari') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/3">
                                        {{ __('Maret') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/4">
                                        {{ __('April') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/5">
                                        {{ __('Mei') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/6">
                                        {{ __('Juni') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/7">
                                        {{ __('Juli') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/8">
                                        {{ __('Agustus') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/9">
                                        {{ __('September') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/10">
                                        {{ __('Oktober') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/11">
                                        {{ __('November') }}
                                    </a>
                                    <a class="nav-link" href="/datatrx/bulan/12">
                                        {{ __('Desember') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <li class="nav-item {{ $activepage == 'rekapitulasi' ? ' active' : '' }}">
                            <a class="nav-link" href="/rekapitulasi/tampildata">
                                <i class="ni ni-ungroup text-primary"></i>
                                <span class="nav-link-text">Rekapitulasi Tahun 2019</span>
                            </a>
                        </li>

                        {{-- Data Product Terlaris --}}
                        <a class="nav-link" href="#data-product" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-product">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text">{{ __('Data Product Terlaris Tahun 2019') }}</span>
                        </a>
                        <div class="collapse {{ $activepage == 'data_product' ? ' show' : '' }}" id="data-product">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $activepage == 'data_product' ? ' active' : '' }}">
                                    <a class="nav-link" href="/dataproduct/1">
                                        {{ __('Januari') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/2">
                                        {{ __('Februari') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/3">
                                        {{ __('Maret') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/4">
                                        {{ __('April') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/5">
                                        {{ __('Mei') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/6">
                                        {{ __('Juni') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/7">
                                        {{ __('Juli') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/8">
                                        {{ __('Agustus') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/9">
                                        {{ __('September') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/10">
                                        {{ __('Oktober') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/11">
                                        {{ __('November') }}
                                    </a>
                                    <a class="nav-link" href="/dataproduct/12">
                                        {{ __('Desember') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- Data Vendor --}}
                        <a class="nav-link" href="#data-vendor" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-vendor">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text">{{ __('Data Vendor Terlaris Tahun 2019') }}</span>
                        </a>
                        <div class="collapse {{ $activepage == 'data_product' ? ' show' : '' }}" id="data-vendor">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $activepage == 'data_product' ? ' active' : '' }}">
                                    <a class="nav-link" href="/datavendor/1">
                                        {{ __('Januari') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/2">
                                        {{ __('Februari') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/3">
                                        {{ __('Maret') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/4">
                                        {{ __('April') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/5">
                                        {{ __('Mei') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/6">
                                        {{ __('Juni') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/7">
                                        {{ __('Juli') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/8">
                                        {{ __('Agustus') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/9">
                                        {{ __('September') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/10">
                                        {{ __('Oktober') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/11">
                                        {{ __('November') }}
                                    </a>
                                    <a class="nav-link" href="/datavendor/12">
                                        {{ __('Desember') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- Data Umur User --}}
                        <a class="nav-link" href="#data-umur" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-umur">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text">{{ __('Data Umur User') }}</span>
                        </a>
                        <div class="collapse {{ $activepage == 'data_umur' ? ' show' : '' }}" id="data-umur">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $activepage == 'data_umur' ? ' active' : '' }}">
                                    <a class="nav-link" href="/dataumur/0/17">
                                        {{ __('Umur 0 Sampai 17 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/18/24">
                                        {{ __('Umur 18 Sampai 24 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/25/34">
                                        {{ __('Umur 25 Sampai 34 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/35/44">
                                        {{ __('Umur 35 Sampai 44 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/45/54">
                                        {{ __('Umur 45 Sampai 54 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/55/64">
                                        {{ __('Umur 55 Sampai 64 Tahun') }}
                                    </a>
                                    <a class="nav-link" href="/dataumur/65/0">
                                        {{ __('Umur 65 Tahun keatas') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- Data Umur User --}}
                        <a class="nav-link" href="#data-type" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-type">
                            <i class="ni ni-ungroup text-orange"></i>
                            <span class="nav-link-text">{{ __('Data User berdasarkan Type') }}</span>
                        </a>
                        <div class="collapse {{ $activepage == 'data_umur' ? ' show' : '' }}" id="data-type">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $activepage == 'data_umur' ? ' active' : '' }}">
                                    <a class="nav-link" href="/typeuser/active">
                                        {{ __('User Active') }}
                                    </a>
                                    <a class="nav-link" href="/typeuser/block">
                                        {{ __('User Block') }}
                                    </a>
                                    <a class="nav-link" href="/typeuser/inactive">
                                        {{ __('User Inactive') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $activepage == 'dataasaluser' ? ' active' : '' }}">
                        <a class="nav-link" href="/data_asal_user">
                            <i class="ni ni-ungroup text-primary"></i>
                            <span class="nav-link-text">Data Asal User Tahun 2019</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $activepage == 'superactive' ? ' active' : '' }}">
                        <a class="nav-link" href="/super_active_member/tampildata">
                        {{-- <a class="nav-link" href="#"> --}}
                            <i class="ni ni-ungroup text-primary"></i>
                            <span class="nav-link-text">Super Active Member Tahun 2019 (<span class="text-danger">masih client-side</span>)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $activepage == 'pushactive' ? ' active' : '' }}">
                        <a class="nav-link" href="#">
                        {{-- <a class="nav-link" href="#"> --}}
                            <i class="ni ni-ungroup text-primary"></i>
                            <span class="nav-link-text">Push Active Member Tahun 2019 (<span class="text-danger">pending</span>)</span>
                        </a>
                    </li>
                    {{-- Data Member Register --}}
                    <a class="nav-link" href="#data-member" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="data-member">
                        <i class="ni ni-ungroup text-orange"></i>
                        <span class="nav-link-text">{{ __('Data Member Register') }}</span>
                    </a>
                    <div class="collapse {{ $activepage == 'registerdate' ? ' show' : '' }}" id="data-member">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ $activepage == 'registerdate' ? ' active' : '' }}">
                                <a class="nav-link" href="/register/tampildatamember/1">
                                    {{ __('Januari') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/2">
                                    {{ __('Februari') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/3">
                                    {{ __('Maret') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/4">
                                    {{ __('April') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/5">
                                    {{ __('Mei') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/6">
                                    {{ __('Juni') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/7">
                                    {{ __('Juli') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/8">
                                    {{ __('Agustus') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/9">
                                    {{ __('September') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/10">
                                    {{ __('Oktober') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/11">
                                    {{ __('November') }}
                                </a>
                                <a class="nav-link" href="/register/tampildatamember/12">
                                    {{ __('Desember') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
