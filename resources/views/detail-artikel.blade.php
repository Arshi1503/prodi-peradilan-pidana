@extends('layouts.app')
@section('title', 'Detail Artikel')
@section('content')
        <!-- start header --> 
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark cover-background" style="background-color: #0D1B2A; padding-top: 10px; padding-bottom: 10px;">
                <div class="container-fluid">
                    <div class="row align-items-center m-0">
                        <div class="col-6 d-flex align-items-center">
                            <a href="#" class="text-white me-3">
                                <img src="{{asset('images/flag-id.png')}}" alt="IDN" width="20"> IDN
                            </a>
                            <a href="#" class="text-white me-3">
                                <img src="{{asset('images/flag-uk.png')}}" alt="ENG" width="20"> ENG
                            </a>
                            <a href="#" class="text-white">
                                <img src="{{asset('images/flag-kr.png')}}" alt="KR" width="20"> KR
                            </a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="https://elearning.iwu.ac.id/" class="text-white me-3">
                                <i class="bi bi-person"></i> LMS IWU
                            </a>
                            <a href="https://siakad.iwu.ac.id/login" class="text-white me-3">
                                <i class="bi bi-bookmark-check"></i> Dashboard Mahasiswa
                            </a>
                            <a href="https://pmb.iwu.ac.id/" class="text-white">
                                <i class="bi bi-person-fill"></i> PMB IWU
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
                <div class="container">
                    <a class="navbar-brand" href="international-women-university-beranda.html">
                        <img src="{{asset('images/Iwu.png')}}" data-at2x="{{asset('images/Iwu.png')}}" alt="Logo" class="default-logo">
                        <span class="brand-text text-black">Peradilan Pidana</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                        <ul class="navbar-nav text-center"> 
                            <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/tentang" class="nav-link">Tentang Kami</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/tentang"><i class="bi bi-info-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Tentang Peradilan Pidana</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/visi-misi-tujuan"><i class="bi bi-flag"></i>
                                            <div class="submenu-icon-content">
                                                <span>Visi, Misi dan Tujuan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/struktur-organisasi"><i class="bi bi-diagram-3"></i>
                                            <div class="submenu-icon-content">
                                                <span>Struktur Organisasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/fasilitas"><i class="bi bi-house-door"></i>
                                            <div class="submenu-icon-content">
                                                <span>Fasilitas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/dosen"><i class="bi bi-person-fill"></i>
                                            <div class="submenu-icon-content">
                                                <span>Dosen</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/akreditasi"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Akreditasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/karir"><i class="bi bi-briefcase"></i>
                                            <div class="submenu-icon-content">
                                                <span>Karir</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/kurikulum" class="nav-link">Akademik</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/kurikulum"><i class="bi bi-journal-bookmark"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kurikulum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/profil-lulusan"><i class="bi bi-person-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Profil Lulusan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/artikel" class="nav-link">Publikasi</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="/artikel"><i class="bi bi-journal"></i>
                                            <div class="submenu-icon-content">
                                                <span>Artikel</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/berita"><i class="bi bi-newspaper"></i>
                                            <div class="submenu-icon-content">
                                                <span>Berita</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kegiatan"><i class="bi bi-calendar-check"></i>
                                            <div class="submenu-icon-content">
                                                <span>Kegiatan</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="https://pmb.iwu.ac.id/" class="nav-link">Daftar Sekarang</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="https://pmb.iwu.ac.id/"><i class="bi bi-pencil-square"></i>
                                            <div class="submenu-icon-content">
                                                <span>Pendaftaran</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/jadwal-penerimaan"><i class="bi bi-calendar-event"></i>
                                            <div class="submenu-icon-content">
                                                <span>Jadwal Penerimaan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/persyaratan-masuk"><i class="bi bi-check-circle"></i>
                                            <div class="submenu-icon-content">
                                                <span>Persyaratan Masuk</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="page-title-section" style="padding-top: 120px; padding-bottom: 0px;">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-10 col-lg-11 text-center position-relative page-title-extra-large"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        
                        @if ($publikasi && $publikasi->judul)
                        <h1 class="fw-700 text-dark-gray ls-minus-2px mb-3" style="word-break: break-word;">
                            {!! $publikasi->judul !!}
                        </h1>
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                    <!-- Foto -->
                    @if ($publikasi && $publikasi->gambar)
                    <div class="image-container mb-3">
                        <img src="{{ asset('storage/' . $publikasi->gambar) }}" alt="{{ $publikasi->gambar }}" class="img-fluid">
                    </div>
                    @endif

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">{{ \Carbon\Carbon::parse($publikasi->waktu)->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
                    <!-- Kata Sambutan (Full-width) -->
                    <div class="col-12">
                        @if ($publikasi && $publikasi->deskripsi)
                        <p class="section-text text-left">{!! $publikasi->deskripsi !!}</p>
                        @endif
                    </div>
            </div>
        </div>
        <!-- end section -->
        <!-- start footer -->
@endsection