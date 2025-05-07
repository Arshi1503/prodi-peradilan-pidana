<header>
    <div class="tw-w-full tw-bg-primary tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">

        <!-- Kiri: Logo atau Judul -->
        
        <!-- Tengah: Menu Navigasi -->
        <div class="tw-hidden lg:tw-flex tw-gap-6">
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-mortarboard"></i> Dashboard
          </a>
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-journal-bookmark"></i> LMS IWU
          </a>
          <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-book"></i> PMB IWU
          </a>
        </div>
        
        <!-- Kanan: Pilihan Bahasa -->
        <div class="tw-hidden lg:tw-flex tw-gap-2">
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
        </div>
    </div>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent center-logo disable-fixed tw-mt-10">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 menu-logo">
                <div class="d-none d-lg-block">
                    <a href="tel:1800222000" class="widget-text text-white-hover fs-16 lg-fs-15"><i class="feather icon-feather-phone icon-small me-5px lg-me-2px"></i>1 800 222 000</a>
                </div> 
                <a class="navbar-brand tw-ml-8 tw-mr-8 tw-w-14" href="demo-spa-salon.html">
                    <img src="{{asset('images/gambar/logoiwu.png')}}"  alt="" class="default-logo">
                    <img src="{{asset('images/gambar/logoiwu.png')}}"  alt="" class="alt-logo">
                    <img src="{{asset('images/gambar/logoiwu.png')}}" alt="" class="mobile-logo">
                </a>   
            </div>
            <div class="col-auto col-lg-8 menu-order">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">  
                    <ul class="navbar-nav navbar-left justify-content-end"> 
                        <li class="nav-item"><a href="demo-spa-salon.html" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="demo-spa-salon-about.html" class="nav-link">Tentang Kami</a></li>
                        <li class="nav-item"><a href="demo-spa-salon-treatments.html" class="nav-link">Akademik</a></li> 
                    </ul>
                    <ul class="navbar-nav navbar-right justify-content-start"> 
                        <li class="nav-item"><a href="demo-spa-salon-packages.html" class="nav-link">Publikasi</a></li>
                        <li class="nav-item"><a href="demo-spa-salon-facility.html" class="nav-link">Fasilitas</a></li>
                        <li class="nav-item"><a href="demo-spa-salon-contact.html" class="nav-link">Daftar Sekarang !</a></li> 
                    </ul> 
                </div>
            </div> 
            <div class="col-auto col-lg-2 text-end">
                <div class="header-icon">  
                    <div class="header-social-icon icon">
                        <a href="http://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>