<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sop Iga Awawantie — Kelezatan Iga Khas Klaten</title>
    <meta name="description" content="Sop Iga Awawantie — Resep autentik keluarga, kelezatan iga yang khas di Klaten. Nikmati sop iga, iga bakar, iga penyet dengan sajian mulai Rp 20.000.">
    <meta name="keywords" content="sop iga klaten, iga bakar klaten, rumah makan klaten, sop iga awawantie, kuliner klaten">
    <meta name="author" content="Sop Iga Awawantie">
    <meta name="theme-color" content="#5B7A3D">
    <meta name="robots" content="index, follow">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url('/') }}">

    {{-- Favicon --}}


    {{-- Open Graph Meta Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Sop Iga Awawantie">
    <meta property="og:title" content="Sop Iga Awawantie — Kelezatan Iga Khas Klaten">
    <meta property="og:description" content="Resep autentik keluarga, kelezatan iga yang khas di Klaten. Nikmati sop iga, iga bakar, iga penyet dengan sajian mulai Rp 20.000.">
    <meta property="og:url" content="{{ url('/') }}">
    <link rel="icon" href="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534629/logo_bersih_ftedg9.webp" type="image/x-icon">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Sop Iga Awawantie - Sajian Sop Iga Khas Klaten">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sop Iga Awawantie — Kelezatan Iga Khas Klaten">
    <meta name="twitter:description" content="Resep autentik keluarga, kelezatan iga yang khas di Klaten. Nikmati sop iga, iga bakar, iga penyet dengan sajian mulai Rp 20.000.">
    <meta name="twitter:image" content="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_buntut_hero_ykqehm.webp">
    <meta name="twitter:image:alt" content="Sop Iga Awawantie - Sajian Sop Iga Khas Klaten">

    {{-- JSON-LD Structured Data: Restaurant --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Restaurant',
        'name' => 'Sop Iga Awawantie',
        'image' => 'https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_buntut_hero_ykqehm.webp',
        'url' => url('/'),
        'description' => 'Resep autentik keluarga, kelezatan iga yang khas di Klaten. Nikmati sop iga, iga bakar, iga penyet dengan sajian mulai Rp 30.000.',
        'servesCuisine' => 'Indonesian',
        'priceRange' => 'Rp 10.000 - Rp 30.000',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Ki Pandanaran No.146, Senden, Danguran',
            'addressLocality' => 'Klaten Selatan',
            'addressRegion' => 'Jawa Tengah',
            'postalCode' => '57425',
            'addressCountry' => 'ID',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -7.726068,
            'longitude' => 110.557489,
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
            'opens' => '09:00',
            'closes' => '21:00',
        ],
        'menu' => url('/').'#menu',
        'hasMenu' => [
            '@type' => 'Menu',
            'hasMenuSection' => [
                [
                    '@type' => 'MenuSection',
                    'name' => 'Makanan',
                    'hasMenuItem' => [
                        ['@type' => 'MenuItem', 'name' => 'Sop Iga', 'offers' => ['@type' => 'Offer', 'price' => '25000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Iga Bakar', 'offers' => ['@type' => 'Offer', 'price' => '25000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Iga Penyet', 'offers' => ['@type' => 'Offer', 'price' => '20000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Sop Balungan', 'offers' => ['@type' => 'Offer', 'price' => '22000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Sop Buntut', 'offers' => ['@type' => 'Offer', 'price' => '30000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Sop Kaki Sapi', 'offers' => ['@type' => 'Offer', 'price' => '25000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Sop Ikan Nila', 'offers' => ['@type' => 'Offer', 'price' => '22000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Iga Steak', 'offers' => ['@type' => 'Offer', 'price' => '28000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Ayam Goreng', 'offers' => ['@type' => 'Offer', 'price' => '19000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Ayam Bakar', 'offers' => ['@type' => 'Offer', 'price' => '19000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Ayam Kampung', 'offers' => ['@type' => 'Offer', 'price' => '22000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Ikan Nila Bakar', 'offers' => ['@type' => 'Offer', 'price' => '25000', 'priceCurrency' => 'IDR']],
                    ],
                ],
                [
                    '@type' => 'MenuSection',
                    'name' => 'Minuman',
                    'hasMenuItem' => [
                        ['@type' => 'MenuItem', 'name' => 'Es Teh', 'offers' => ['@type' => 'Offer', 'price' => '5000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Es Jeruk', 'offers' => ['@type' => 'Offer', 'price' => '5000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Es Milo', 'offers' => ['@type' => 'Offer', 'price' => '8000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Teh Hangat', 'offers' => ['@type' => 'Offer', 'price' => '4000', 'priceCurrency' => 'IDR']],
                        ['@type' => 'MenuItem', 'name' => 'Jeruk Hangat', 'offers' => ['@type' => 'Offer', 'price' => '5000', 'priceCurrency' => 'IDR']],
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body antialiased bg-off-white text-gray-800 overflow-x-hidden">

    <!--  NAVBAR  -->
    <header>
    <nav id="navbar" class="navbar fixed w-full z-50 top-0" aria-label="Navigasi utama">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                {{-- Logo --}}
                <a href="#beranda" class="flex items-center gap-3 group">
                    <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534629/logo_bersih_ftedg9.webp"
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
    </header>

    <main>
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

                {{-- Hero Image Slideshow --}}
                <div class="reveal-right relative">
                    <div class="relative z-10 rounded-2xl lg:rounded-3xl overflow-hidden shadow-2xl">
                        <div id="hero-slideshow" class="hero-slideshow">
                            <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/iga_bakar_ligetc.webp" alt="Iga Bakar - Menu Andalan Sop Iga Awawantie" class="hero-slide active" loading="eager" fetchpriority="high">
                            <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_iga_duxfnl.webp" alt="Sop Iga - Sajian Khas Klaten" class="hero-slide" loading="lazy">
                            <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_balungan_hmlufi.webp" alt="Sop Balungan - Resep Autentik Keluarga" class="hero-slide" loading="lazy">
                            <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_buntut_hero_ykqehm.webp" alt="Sop Buntut - Kelezatan Premium" class="hero-slide" loading="lazy">
                            <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534632/sop_kaki_sapi_oz2dpd.webp" alt="Sop Kaki Sapi - Sajian Istimewa" class="hero-slide" loading="lazy">
                            {{-- Slide indicators --}}
                            <div class="hero-slide-indicators">
                                <button class="hero-dot active" data-slide="0" aria-label="Slide 1"></button>
                                <button class="hero-dot" data-slide="1" aria-label="Slide 2"></button>
                                <button class="hero-dot" data-slide="2" aria-label="Slide 3"></button>
                                <button class="hero-dot" data-slide="3" aria-label="Slide 4"></button>
                                <button class="hero-dot" data-slide="4" aria-label="Slide 5"></button>
                            </div>
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
                        <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_iga_duxfnl.webp"
                             alt="Sop Iga" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Sop Iga</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp30.000</p>
                    </div>
                </div>

                {{-- Iga Bakar --}}
                <div class="reveal stagger-2 card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100/60">
                    <div class="img-zoom-wrapper aspect-[4/3]">
                        <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/iga_bakar_ligetc.webp"
                             alt="Iga Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Iga Bakar</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp30.000</p>
                    </div>
                </div>

                {{-- Iga Penyet --}}
                <div class="reveal stagger-3 card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100/60">
                    <div class="img-zoom-wrapper aspect-[4/3]">
                        <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534628/iga_penyet_zisiza.webp"
                             alt="Iga Penyet" class="img-zoom w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="font-heading font-bold text-lg text-dark mb-1">Iga Penyet</h3>
                        <p class="price-tag text-primary font-bold text-lg">Rp32.000</p>
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
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/iga_bakar_ligetc.webp"
                                     alt="Iga Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Bakar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp30.000</p>
                            </div>
                        </div>

                        {{-- Item 2: Sop Iga --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_iga_duxfnl.webp"
                                     alt="Sop Iga" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Iga</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp30.000</p>
                            </div>
                        </div>

                        {{-- Item 3: Sop Balungan --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_balungan_hmlufi.webp"
                                     alt="Sop Balungan" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Balungan</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp18.000</p>
                            </div>
                        </div>

                        {{-- Item 4: Sop Buntut --}}
                        <div class="reveal stagger-4 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534631/sop_buntut_hero_ykqehm.webp"
                                     alt="Sop Buntut" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Buntut</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp38.000</p>
                            </div>
                        </div>

                        {{-- Item 5: Sop Kaki Sapi --}}
                        <div class="reveal stagger-5 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534632/sop_kaki_sapi_oz2dpd.webp"
                                     alt="Sop Kaki Sapi" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Sop Kaki Sapi</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp30.000</p>
                            </div>
                        </div>

                        {{-- Item 6: Sop Ikan Nila --}}
                        <div class="reveal stagger-6 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534633/sop_ikannila_eh5lpl.webp"
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
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534628/iga_penyet_zisiza.webp"
                                     alt="Iga Penyet" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Penyet</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp32.000</p>
                            </div>
                        </div>

                        {{-- Item 8: Iga Steak --}}
                        <div class="reveal stagger-8 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534628/iga_steak_dtzny9.webp"
                                     alt="Iga Steak" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Iga Bakar Steak</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp32.000</p>
                            </div>
                        </div>

                        {{-- Item 9: Ayam Goreng --}}
                        <div class="reveal stagger-1 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534625/ayam_goreng_cmfmgf.webp"
                                     alt="Ayam Goreng" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Goreng Kecil</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp10.000</p>
                            </div>
                        </div>

                        {{-- Item 10: Ayam Bakar --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534625/ayam_bakar_p3dvch.webp"
                                     alt="Ayam Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Bakar Kecil</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp10.000</p>
                            </div>
                        </div>

                        {{-- Item 11: Ayam Kampung --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/ayam_kampung_cby6cz.webp"
                                     alt="Ayam Kampung" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ayam Goreng Besar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp20.000</p>
                            </div>
                        </div>

                        {{-- Item 12: Ikan Nila Bakar --}}
                        <div class="reveal stagger-4 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534628/Ikannila_bakar_vrjhop.webp"
                                     alt="Ikan Nila Bakar" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Ikan Nila Bakar</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp15.000</p>
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
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/es_teh_oyojjp.webp"
                                     alt="Es Teh" class="img-zoom w-full h-full object-cover" loading="lazy">
                                <span class="badge-panas">Panas/Dingin</span>
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Teh</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp3.000</p>
                            </div>
                        </div>

                        {{-- Minuman 2: Es Jeruk --}}
                        <div class="reveal stagger-2 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534625/es_jeruk_aos26e.webp"
                                     alt="Es Jeruk" class="img-zoom w-full h-full object-cover" loading="lazy">
                                <span class="badge-panas">Panas/Dingin</span>
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Jeruk</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp4.000</p>
                            </div>
                        </div>

                        {{-- Minuman 3: Es Milo --}}
                        <div class="reveal stagger-3 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/es_milo_nc0w3r.webp"
                                     alt="Milo" class="img-zoom w-full h-full object-cover" loading="lazy">
                                <span class="badge-panas">Panas/Dingin</span>
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Milo</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>

                        <div class="reveal stagger-5 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534626/es_sirup_watsd4.webp"
                                     alt="Es Sirup" class="img-zoom w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Es Sirup</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>

                        <div class="reveal stagger-6 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534625/chocolatos_xw1ql1.webp"
                                     alt="Chocolatos" class="img-zoom w-full h-full object-cover" loading="lazy">
                                <span class="badge-panas">Panas/Dingin</span>
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Chocolatos</h4>
                                <p class="price-tag text-sm sm:text-base mt-1">Rp5.000</p>
                            </div>
                        </div>

                        <div class="reveal stagger-7 card-hover bg-white rounded-xl overflow-hidden shadow-sm">
                            <div class="img-zoom-wrapper aspect-square relative">
                                <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534628/kopi_hsmjak.webp"
                                     alt="Kopi Hitam" class="img-zoom w-full h-full object-cover" loading="lazy">
                                <span class="badge-panas">Panas/Dingin</span>
                            </div>
                            <div class="p-3 sm:p-4">
                                <h4 class="font-heading font-semibold text-sm sm:text-base text-dark leading-tight">Kopi Hitam</h4>
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
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi Sop Iga Awawantie di Google Maps - Jl. Ki Pandanaran No.146, Klaten"
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
                                    <p class="text-sm font-semibold text-dark">09.00 — 17.00</p>
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
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="reveal">
                <div class="flex items-center justify-center gap-3 mb-6">
                    <div class="w-2 h-2 rotate-45 bg-[#b5a38a]"></div>
                    <p class="text-[#b5a38a] font-medium text-xs sm:text-sm uppercase tracking-[0.25em]">Pesan Sekarang</p>
                    <div class="w-2 h-2 rotate-45 bg-[#b5a38a]"></div>
                </div>
                
                <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-8 text-[#e6ddc5]">
                    Rumah Makan Keluarga<br>
                    untuk Semua Momen Spesial
                </h2>
                
                <p class="text-[#e6ddc5] max-w-3xl mx-auto mb-6 text-base sm:text-lg leading-relaxed">
                    Dari makan siang keluarga hingga acara kantor besar — kami siap melayani 
                    <span class="font-bold">pesanan catering</span> dengan menu lengkap pilihan. Sop Iga, Iga Bakar, dan Iga 
                    Penyet tersedia dalam porsi besar untuk kebutuhan Anda.
                </p>
                
                <p class="text-[#b5a38a] italic max-w-2xl mx-auto mb-12 text-sm sm:text-base">
                    "Variasi menu kami dirancang untuk memenuhi selera semua kalangan — dari anak-anak hingga orang tua."
                </p>
                
                <!-- 3 Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
                    <!-- Card 1 -->
                    <div class="bg-[#ffffff08] border border-white/10 rounded-sm p-6 sm:p-8 text-left backdrop-blur-sm">
                        <h3 class="text-[#e6ddc5] font-bold text-sm tracking-wider uppercase mb-3">Dine-in Nyaman</h3>
                        <p class="text-[#b5a38a] text-sm leading-relaxed">Suasana warung keluarga yang hangat & ramah.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-[#ffffff08] border border-white/10 rounded-sm p-6 sm:p-8 text-left backdrop-blur-sm">
                        <h3 class="text-[#e6ddc5] font-bold text-sm tracking-wider uppercase mb-3">Booking Pesanan</h3>
                        <p class="text-[#b5a38a] text-sm leading-relaxed">Anda bisa reservasi tempat untuk mendapatkan tempat yang sesuai</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-[#ffffff08] border border-white/10 rounded-sm p-6 sm:p-8 text-left backdrop-blur-sm">
                        <h3 class="text-[#e6ddc5] font-bold text-sm tracking-wider uppercase mb-3">Antar via Ojol</h3>
                        <p class="text-[#b5a38a] text-sm leading-relaxed">Tersedia di GoFood, GrabFood dan ShopeeFood</p>
                    </div>
                </div>

                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-3 bg-[#25D366] hover:bg-[#1ebd5a] text-white font-bold text-sm sm:text-base px-8 py-4 rounded-sm transition-all border-b-4 border-[#1b9a4b] active:border-b-0 active:translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                    HUBUNGI VIA WHATSAPP
                </a>
            </div>
        </div>
    </section>
    </main>


    <!-- FOOTER -->
    <footer class="footer-bg text-white/80 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-16">
                {{-- Brand & Copyright --}}
                <div class="flex flex-col h-full">
                    <div class="flex items-center gap-3 mb-6">
                        <img src="https://res.cloudinary.com/dbdmqec1q/image/upload/v1781534629/logo_bersih_ftedg9.webp"
                             alt="Logo Sop Iga Awawantie"
                             class="w-12 h-12 rounded-full object-cover">
                        <span class="font-heading font-bold text-xl text-white tracking-wide">
                            SOP IGA <span class="text-primary-light">AWAWANTIE</span>
                        </span>
                    </div>
                    <p class="text-[15px] text-white/60 leading-relaxed mb-16">
                        Menyajikan kelezatan sop iga dengan resep autentik keluarga sejak lama.
                    </p>
                    
                    <div class="mt-auto border-t border-white/10 pt-6">
                        <p class="text-sm text-white/40">
                            &copy; 2026 Sop Iga Awawantie.
                        </p>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div class="lg:pl-8">
                    <h4 class="font-heading font-semibold text-white text-xl mb-5 tracking-wide">Navigasi</h4>
                    <ul class="grid grid-cols-2 gap-x-8 gap-y-3">
                        <li><a href="#beranda" class="text-[15px] text-white/60 hover:text-white transition">Home</a></li>
                        <li><a href="#lokasi" class="text-[15px] text-white/60 hover:text-white transition">Lokasi</a></li>
                        <li><a href="#menu" class="text-[15px] text-white/60 hover:text-white transition">Menu</a></li>
                        <li><a href="#kontak" class="text-[15px] text-white/60 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                {{-- Lokasi --}}
                <div class="lg:pl-4">
                    <h4 class="font-heading font-semibold text-white text-xl mb-5 tracking-wide">Lokasi</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-4 text-[15px] text-white/60 leading-relaxed">
                            <svg class="w-5 h-5 text-primary-light flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Jl. Pandanaran No. 163, Klaten</span>
                        </li>
                        <li class="flex items-start gap-4 text-[15px] text-white/60 leading-relaxed">
                            <svg class="w-5 h-5 text-primary-light flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>09.00 — 21.00 Setiap Hari</span>
                        </li>
                    </ul>
                </div>

                {{-- Hubungi Kami --}}
                <div>
                    <h4 class="font-heading font-semibold text-white text-xl mb-5 tracking-wide">Hubungi Kami</h4>
                    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="inline-flex items-center gap-4 text-[15px] text-white/80 hover:text-[#25D366] transition-colors group">
                        <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-[#25D366] transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                        </div>
                        <span>Chat WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
