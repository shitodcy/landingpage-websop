<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sop Iga Awawantie — Kelezatan Iga Khas Klaten</title>
    <meta name="description" content="Sop Iga Awawantie — Resep autentik keluarga, kelezatan iga yang khas di Klaten. Nikmati sop iga, iga bakar, iga penyet dengan sajian mulai Rp 20.000.">
    <meta name="keywords" content="sop iga klaten, iga bakar klaten, rumah makan klaten, sop iga awawantie, kuliner klaten">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body antialiased bg-off-white text-gray-800 overflow-x-hidden">

    <!--  NAVBAR  -->
    <nav id="navbar" class="navbar fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                {{-- Logo --}}
                <a href="#beranda" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo_bersih.webp') }}"
                         alt="Logo Sop Iga Awawantie"
                         class="w-10 h-10 rounded-full object-cover shadow-md group-hover:scale-110 transition-transform">
                    <span class="font-heading font-bold text-lg tracking-tight text-dark">
                        SOP IGA <span class="text-primary">AWAWANTIE</span>
                    </span>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#beranda" class="nav-link active-link">Home</a>
                    <a href="#menu" class="nav-link">Menu</a>
                    <a href="#lokasi" class="nav-link">Lokasi</a>
                    <a href="#kontak" class="nav-link">Kontak</a>
                </div>

                {{-- Mobile Hamburger --}}
                <button id="hamburger" class="md:hidden flex flex-col gap-1.5 p-2 -mr-2" aria-label="Toggle menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="mobile-menu md:hidden bg-cream/95 backdrop-blur-lg border-t border-cream-dark">
            <div class="px-4 py-6 flex flex-col gap-4">
                <a href="#beranda" class="text-dark font-medium py-2 hover:text-primary transition">Home</a>
                <a href="#menu" class="text-dark font-medium py-2 hover:text-primary transition">Menu</a>
                <a href="#lokasi" class="text-dark font-medium py-2 hover:text-primary transition">Lokasi</a>
                <a href="#kontak" class="text-dark font-medium py-2 hover:text-primary transition">Kontak</a>
            </div>
        </div>
    </nav>


    <!-- HERO SECTION -->
    <section id="beranda" class="relative pt-28 pb-16 lg:pt-36 lg:pb-24 bg-cream overflow-hidden">
        {{-- Decorative elements --}}
        <div class="hero-decoration w-[400px] h-[400px] -top-40 -right-20"></div>
        <div class="hero-decoration w-[300px] h-[300px] bottom-0 left-10 opacity-5"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                {{-- Text Content --}}
                <div class="reveal-left">
                    <h1 class="font-heading text-4xl sm:text-5xl lg:text-[3.5rem] xl:text-6xl font-bold leading-[1.15] text-dark mb-6">
                        Resep Autentik<br>
                        Keluarga,<br>
                        <span class="text-primary">Kelezatan Iga</span><br>
                        yang Khas di Klaten<span class="text-primary">.</span>
                    </h1>
                    <p class="text-warm-gray text-base lg:text-lg mb-3 max-w-lg leading-relaxed">
                        Nikmati Sop Iga Mantap, Sop Bahan Ungkap,
                        Sop Iga Perkes dengan Sajian Mulai
                    </p>
                    <p class="text-dark font-bold text-lg mb-8">
                        Rp 30.000,-
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#menu" class="btn-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            Lihat Menu
                        </a>
                        <a href="#kontak" class="btn-outline">
                            Tentang Usaha
                        </a>
                    </div>
                </div>

                {{-- Hero Image --}}
                <div class="reveal-right relative">
                    <div class="relative z-10 rounded-2xl lg:rounded-3xl overflow-hidden shadow-2xl">
                        <div class="parallax-bg">
                            <img
                                src="{{ asset('images/sop_buntut (1).webp') }}"
                                alt="Sop Iga Awawantie - Sajian Sop Buntut Khas Klaten"
                                class="w-full h-[350px] sm:h-[450px] lg:h-[520px] object-cover"
                                loading="eager"
                            >
                        </div>
                    </div>
                    {{-- Floating decoration --}}
                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-primary/10 rounded-full animate-float hidden lg:block"></div>
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-secondary/10 rounded-full animate-float hidden lg:block" style="animation-delay: -2s"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- MENU ANDALAN KAMI -->
    <section id="menu-andalan" class="py-16 lg:py-24 bg-off-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-14 reveal">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark mb-3">Menu Andalan Kami</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-warm-gray max-w-xl mx-auto">
                    Resep Otentik Sejak Lama — Dimasak dengan Cinta & Rempah Pilihan
                </p>
            </div>

            {{-- 3 Featured Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                {{-- Sop Iga --}}
                <div class="reveal stagger-1 card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100/60">
                    <div class="img-zoom-wrapper aspect-[4/3]">
                        <img src="{{ asset('images/sop_iga.webp') }}"
                             alt="Sop Iga" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Sop Iga</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp25.000</p>
                    </div>
                </div>

                {{-- Iga Bakar --}}
                <div class="reveal stagger-2 card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100/60">
                    <div class="img-zoom-wrapper aspect-[4/3]">
                        <img src="{{ asset('images/iga_bakar.webp') }}"
                             alt="Iga Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Iga Bakar</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp20.000</p>
                    </div>
                </div>

                {{-- Iga Penyet --}}
                <div class="reveal stagger-3 card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100/60">
                    <div class="img-zoom-wrapper aspect-[4/3]">
                        <img src="{{ asset('images/iga_penyet.webp') }}"
                             alt="Iga Penyet" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Iga Penyet</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp20.000</p>
                    </div>
                </div>
            </div>

            {{-- CTA Button --}}
            <div class="text-center reveal">
                <a href="#menu" class="btn-green-outline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    Lihat Seluruh Menu
                </a>
            </div>
        </div>
    </section>


    <!-- MENU LENGKAP — TAB FILTER -->
    <section id="menu" class="py-16 lg:py-24 bg-cream-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Tab Filter --}}
            <div class="flex flex-wrap justify-center gap-3 mb-14 reveal">
                <button class="tab-btn active" data-filter="semua">Semua</button>
                <button class="tab-btn" data-filter="makanan">Makanan</button>
                <button class="tab-btn" data-filter="minuman">Minuman</button>
            </div>


            <!-- ===== MAKANAN SECTION ===== -->
            <div class="menu-section mb-16" data-category="makanan">
                {{-- Section Label --}}
                <div class="flex items-center gap-4 mb-8 reveal">
                    <span class="section-label">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        Makanan
                    </span>
                    <div class="flex-1 h-px bg-gray-300/50"></div>
                </div>

                {{-- Makanan Grid --}}
                <div class="bg-cream rounded-2xl p-6 lg:p-8 shadow-sm">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-6">
                        {{-- Item 1: Iga Bakar --}}
                        <div class="reveal stagger-1 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/iga_bakar.webp') }}"
                                     alt="Iga Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Bakar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp25.000</p>
                            </div>
                        </div>

                        {{-- Item 2: Sop Iga --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/sop_iga.webp') }}"
                                     alt="Sop Iga" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Iga</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp25.000</p>
                            </div>
                        </div>

                        {{-- Item 3: Sop Balungan --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/sop_balungan.webp') }}"
                                     alt="Sop Balungan" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Balungan</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp22.000</p>
                            </div>
                        </div>

                        {{-- Item 4: Sop Buntut --}}
                        <div class="reveal stagger-4 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/sop_buntut.webp') }}"
                                     alt="Sop Buntut" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Buntut</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp30.000</p>
                            </div>
                        </div>

                        {{-- Item 5: Sop Kaki Sapi --}}
                        <div class="reveal stagger-5 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/sop_kakisapi.webp') }}"
                                     alt="Sop Kaki Sapi" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Kaki Sapi</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp25.000</p>
                            </div>
                        </div>

                        {{-- Item 6: Sop Ikan Nila --}}
                        <div class="reveal stagger-6 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/sop_ikannila.webp') }}"
                                     alt="Sop Ikan Nila" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Ikan Nila</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp22.000</p>
                            </div>
                        </div>

                        {{-- Item 7: Iga Penyet --}}
                        <div class="reveal stagger-7 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/iga_penyet.webp') }}"
                                     alt="Iga Penyet" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Penyet</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp20.000</p>
                            </div>
                        </div>

                        {{-- Item 8: Iga Steak --}}
                        <div class="reveal stagger-8 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/iga_steak.webp') }}"
                                     alt="Iga Steak" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Steak</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp28.000</p>
                            </div>
                        </div>

                        {{-- Item 9: Ayam Goreng --}}
                        <div class="reveal stagger-1 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/ayam_goreng.webp') }}"
                                     alt="Ayam Goreng" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Goreng</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp19.000</p>
                            </div>
                        </div>

                        {{-- Item 10: Ayam Bakar --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/ayam_bakar.webp') }}"
                                     alt="Ayam Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Bakar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp19.000</p>
                            </div>
                        </div>

                        {{-- Item 11: Ayam Kampung --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/ayam_kampung.webp') }}"
                                     alt="Ayam Kampung" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Kampung</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp22.000</p>
                            </div>
                        </div>

                        {{-- Item 12: Ikan Nila Bakar --}}
                        <div class="reveal stagger-4 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/Ikannila_bakar.webp') }}"
                                     alt="Ikan Nila Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ikan Nila Bakar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp25.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===== MINUMAN SECTION ===== -->
            <div class="menu-section" data-category="minuman">
                {{-- Section Label --}}
                <div class="flex items-center gap-4 mb-8 reveal">
                    <span class="section-label">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Minuman
                    </span>
                    <div class="flex-1 h-px bg-gray-300/50"></div>
                </div>

                {{-- Minuman Grid --}}
                <div class="bg-cream rounded-2xl p-6 lg:p-8 shadow-sm">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-6">
                        {{-- Minuman 1: Es Teh --}}
                        <div class="reveal stagger-1 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/es_teh.webp') }}"
                                     alt="Es Teh" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Es Teh</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>

                        {{-- Minuman 2: Es Jeruk --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/es_jeruk.webp') }}"
                                     alt="Es Jeruk" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Es Jeruk</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>

                        {{-- Minuman 3: Es Milo --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/es_milo.webp') }}"
                                     alt="Es Milo" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Es Milo</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp8.000</p>
                            </div>
                        </div>

                        {{-- Minuman 4: Teh Hangat --}}
                        <div class="reveal stagger-4 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/teh_hangat.webp') }}"
                                     alt="Teh Hangat" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Teh Hangat</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp4.000</p>
                            </div>
                        </div>

                        {{-- Minuman 5: Jeruk Hangat --}}
                        <div class="reveal stagger-5 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="{{ asset('images/jeruk_hangat.webp') }}"
                                     alt="Jeruk Hangat" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Jeruk Hangat</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- LOKASI & JAM BUKA -->
    <section id="lokasi" class="py-16 lg:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section Header --}}
            <div class="text-center mb-14 reveal">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark tracking-wide">LOKASI & JAM BUKA</h2>
                <div class="section-divider mt-4"></div>
            </div>

            {{-- Map + Info --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-10">
                {{-- Google Maps --}}
                <div class="lg:col-span-3 reveal-left">
                    <div class="map-container h-[350px] lg:h-[420px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21721.72335305433!2d110.55748866629479!3d-7.726068631580709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a45094bb04323%3A0x5a754e31f576377f!2sWARUNG%20SOPIGAAWAWANTIE%20-%20Danguran!5e1!3m2!1sid!2sid!4v1781366721409!5m2!1sid!2sid"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi Sop Iga Awawantie"
                        ></iframe>
                    </div>
                </div>

                {{-- Info Card --}}
                <div class="lg:col-span-2 reveal-right">
                    <div class="info-card h-full flex flex-col justify-center">
                        <div class="mb-6">
                            <h3 class="font-heading font-bold text-xl text-dark mb-1">SOP IGA AWAWANTIE</h3>
                            <p class="text-primary font-medium text-sm">Klaten, Jawa Tengah</p>
                        </div>

                        <div class="space-y-5">
                            {{-- Address --}}
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary/10 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-dark leading-relaxed">
                                        Jl. Ki Pandanaran No.146, <br>
                                        Senden, Danguran, Klaten Sel., <br>
                                        Kabupaten Klaten, Jawa Tengah <br>
                                        <span class="text-warm-gray">Kode Pos 57425</span>
                                    </p>
                                </div>
                            </div>

                            {{-- Operating Hours --}}
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary/10 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-dark">09.00 — 21.00</p>
                                    <p class="text-xs text-warm-gray">(Setiap Hari)</p>
                                </div>
                            </div>
                        </div>

                        {{-- CTA Button --}}
                        <div class="mt-8">
                            <a href="https://maps.app.goo.gl/Esph7K2X7pfBPPFq5" target="_blank" rel="noopener"
                               class="btn-primary w-full justify-center text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Buka di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA SECTION -->
    <section id="kontak" class="cta-section py-20 lg:py-28 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <p class="text-primary-light font-medium text-sm uppercase tracking-widest mb-4">Sop Iga Awawantie</p>
                <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Rumah Makan Keluarga<br>
                    untuk Semua Momen <span class="text-primary-light">Spesial</span>
                </h2>
                <p class="text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                    Tempatnya menikmati masakan rumah yang berbeda dengan yang lain di
                    Sop Iga Awawantie. Ajak keluarga dan orang tersayang untuk menikmati
                    kehangatan sajian kami dengan suasana yang nyaman.
                </p>
                <a href="https://maps.google.com/?q=Klaten+Jawa+Tengah" target="_blank" rel="noopener"
                   class="btn-primary text-base px-10 py-4">
                    Datang Langsung
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer-bg text-white/80 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo_bersih.webp') }}"
                             alt="Logo Sop Iga Awawantie"
                             class="w-10 h-10 rounded-full object-cover">
                        <span class="font-heading font-bold text-lg text-white">
                            SOP IGA <span class="text-primary-light">AWAWANTIE</span>
                        </span>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed max-w-xs">
                        Menyajikan kelezatan sop iga dan hidangan khas Jawa Tengah dengan resep autentik keluarga sejak lama.
                    </p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="font-heading font-bold text-white text-base mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="text-sm text-white/60 hover:text-primary-light transition">Home</a></li>
                        <li><a href="#menu" class="text-sm text-white/60 hover:text-primary-light transition">Menu</a></li>
                        <li><a href="#lokasi" class="text-sm text-white/60 hover:text-primary-light transition">Lokasi</a></li>
                        <li><a href="#kontak" class="text-sm text-white/60 hover:text-primary-light transition">Kontak</a></li>
                    </ul>
                </div>

                {{-- Contact Info --}}
                <div>
                    <h4 class="font-heading font-bold text-white text-base mb-4">Hubungi Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 text-sm text-white/60">
                            <svg class="w-4 h-4 text-primary-light flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Jl. Pandanaran No. 163, Klaten
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/60">
                            <svg class="w-4 h-4 text-primary-light flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            09.00 — 21.00 Setiap Hari
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Divider + Copyright --}}
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-xs text-white/40">
                    &copy; {{ date('Y') }} Sop Iga Awawantie — Klaten, Jawa Tengah. Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
