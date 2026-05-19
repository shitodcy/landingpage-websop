<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sop Iga Awawantie – Resep Autentik Keluarga, Klaten</title>
    <meta name="description" content="Sop Iga Awawantie – Nikmati Sop Iga Hangat, Iga Bakar Empuk, dan Iga Penyet Pedas dengan harga mulai Rp 20.000 di Klaten.">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts: Playfair Display (display) + Lora (body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        maroon:  { DEFAULT: '#7B1D1D', dark: '#5C1313', light: '#9B2C2C' },
                        amber:   { warm: '#D97706', light: '#FBBF24', glow: '#F59E0B' },
                        cream:   { DEFAULT: '#FDF6EC', dark: '#F5E8D0', muted: '#EDD9B8' },
                        bark:    { DEFAULT: '#3D1C0B', light: '#5C2E0E' },
                    },
                    fontFamily: {
                        display: ['"Playfair Display"', 'Georgia', 'serif'],
                        body:    ['"Lora"', 'Georgia', 'serif'],
                        accent:  ['"Barlow Condensed"', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        /* ── Base ── */
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Lora', Georgia, serif;
            background-color: #FDF6EC;
            color: #3D1C0B;
            overflow-x: hidden;
        }

        /* ── Noise / Grain texture overlay ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 9999;
            opacity: 0.35;
        }

        /* ── Navbar ── */
        #navbar {
            transition: background 0.4s ease, box-shadow 0.4s ease;
        }
        #navbar.scrolled {
            background: rgba(253, 246, 236, 0.97);
            box-shadow: 0 2px 24px rgba(123,29,29,0.12);
        }

        /* ── Nav links ── */
        .nav-link {
            position: relative;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-size: 0.85rem;
            color: #5C2E0E;
            transition: color 0.25s;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0; bottom: -3px;
            width: 0; height: 2px;
            background: #D97706;
            transition: width 0.3s ease;
        }
        .nav-link:hover { color: #7B1D1D; }
        .nav-link:hover::after { width: 100%; }

        /* ── Buttons ── */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #7B1D1D;
            color: #FDF6EC;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.75rem 1.75rem;
            border-radius: 2px;
            transition: background 0.25s, transform 0.2s, box-shadow 0.25s;
            box-shadow: 4px 4px 0 #3D1C0B;
        }
        .btn-primary:hover {
            background: #5C1313;
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 #3D1C0B;
        }
        .btn-primary:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 #3D1C0B;
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            color: #7B1D1D;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.7rem 1.75rem;
            border-radius: 2px;
            border: 2px solid #7B1D1D;
            transition: background 0.25s, color 0.25s, transform 0.2s, box-shadow 0.25s;
            box-shadow: 3px 3px 0 #D97706;
        }
        .btn-secondary:hover {
            background: #7B1D1D;
            color: #FDF6EC;
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0 #D97706;
        }

        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: #25D366;
            color: #fff;
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.85rem 2rem;
            border-radius: 2px;
            transition: background 0.25s, transform 0.2s, box-shadow 0.25s;
            box-shadow: 4px 4px 0 #128C4E;
        }
        .btn-whatsapp:hover {
            background: #1EBE5A;
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 #128C4E;
        }

        /* ── Hero ── */
        #home {
            min-height: 100svh;
            position: relative;
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #3D1C0B 0%, #7B1D1D 45%, #9B2C2C 70%, #D97706 100%);
            z-index: 0;
        }
        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 80% at 70% 50%, rgba(217,119,6,0.18) 0%, transparent 70%),
                radial-gradient(ellipse 40% 60% at 15% 80%, rgba(0,0,0,0.35) 0%, transparent 60%);
        }
        /* Decorative pattern overlay */
        .hero-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.06;
            background-image: repeating-linear-gradient(45deg, #fff 0, #fff 1px, transparent 0, transparent 50%);
            background-size: 20px 20px;
            z-index: 1;
        }

        .hero-img-placeholder {
            position: absolute;
            right: 0; top: 0; bottom: 0;
            width: 52%;
            z-index: 1;
            overflow: hidden;
        }
        @media (max-width: 1023px) {
            .hero-img-placeholder { display: none; }
        }
        .hero-img-inner {
            width: 100%; height: 100%;
            background:
                linear-gradient(to left, transparent 0%, rgba(61,28,11,0.6) 100%),
                url('https://placehold.co/900x900/7B1D1D/EDD9B8?text=📷+Foto+Sop+Iga') center/cover no-repeat;
        }

        /* ── Stars ── */
        .star { color: #FBBF24; }

        /* ── Menu cards ── */
        .menu-card {
            background: #fff;
            border: 1px solid #EDD9B8;
            border-radius: 4px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 12px rgba(123,29,29,0.06);
        }
        .menu-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(123,29,29,0.16);
        }
        .menu-card-img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            display: block;
        }
        .menu-badge {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.7rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            background: #7B1D1D;
            color: #FDF6EC;
            padding: 0.2rem 0.6rem;
            border-radius: 2px;
        }

        /* ── Section dividers ── */
        .section-ornament {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            justify-content: center;
            margin-bottom: 1rem;
        }
        .ornament-line {
            height: 1px;
            width: 48px;
            background: linear-gradient(to right, transparent, #D97706);
        }
        .ornament-line.rev {
            background: linear-gradient(to left, transparent, #D97706);
        }
        .ornament-diamond {
            width: 8px; height: 8px;
            background: #D97706;
            transform: rotate(45deg);
            flex-shrink: 0;
        }

        /* ── Location / iframe ── */
        .map-frame {
            width: 100%;
            height: 380px;
            border: 3px solid #EDD9B8;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 6px 6px 0 #EDD9B8;
        }

        /* ── Info card ── */
        .info-icon-wrap {
            width: 44px; height: 44px;
            background: #7B1D1D;
            border-radius: 2px;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        /* ── Footer ── */
        #footer {
            background: #3D1C0B;
            color: #EDD9B8;
        }
        .footer-social-link {
            width: 38px; height: 38px;
            border: 1px solid rgba(237,217,184,0.3);
            border-radius: 2px;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.25s, border-color 0.25s;
            color: #EDD9B8;
        }
        .footer-social-link:hover {
            background: #7B1D1D;
            border-color: #7B1D1D;
        }
        .footer-delivery-link {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 0.78rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            border: 1px solid rgba(237,217,184,0.25);
            padding: 0.35rem 0.75rem;
            border-radius: 2px;
            color: #EDD9B8;
            transition: background 0.25s, border-color 0.25s;
        }
        .footer-delivery-link:hover {
            background: rgba(217,119,6,0.25);
            border-color: #D97706;
        }

        /* ── Mobile menu ── */
        #mobile-menu {
            transform: translateY(-100%);
            transition: transform 0.35s cubic-bezier(0.4,0,0.2,1), opacity 0.3s;
            opacity: 0;
        }
        #mobile-menu.open {
            transform: translateY(0);
            opacity: 1;
        }

        /* ── Animations ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(32px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.7s ease both; }
        .delay-1 { animation-delay: 0.15s; }
        .delay-2 { animation-delay: 0.30s; }
        .delay-3 { animation-delay: 0.45s; }
        .delay-4 { animation-delay: 0.60s; }

        @keyframes shimmer {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.7; }
        }
        .shimmer-star { animation: shimmer 2s ease-in-out infinite; }
    </style>
</head>
<body>

{{-- ═══════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════ --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 py-4 px-4 md:px-8">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <a href="#home" class="flex items-center gap-3 group">
            <div class="w-10 h-10 bg-maroon rounded-sm flex items-center justify-center flex-shrink-0 shadow-md
                        group-hover:bg-maroon-dark transition-colors duration-300">
                <span class="text-cream text-lg font-display font-black leading-none">S</span>
            </div>
            <div class="hidden sm:block">
                <div class="font-display font-bold text-bark text-base leading-tight tracking-tight">Sop Iga</div>
                <div class="font-accent text-xs text-amber-warm font-semibold tracking-widest uppercase leading-none">Awawantie</div>
            </div>
        </a>

        {{-- Desktop Nav Links --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="#home"    class="nav-link">Home</a>
            <a href="#menu"    class="nav-link">Menu</a>
            <a href="#lokasi"  class="nav-link">Lokasi</a>
            <a href="#kontak"  class="nav-link">Kontak</a>
        </div>

        {{-- CTA Button + Hamburger --}}
        <div class="flex items-center gap-3">
            <a href="#menu" class="btn-primary text-sm hidden sm:inline-flex">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                Lihat Menu
            </a>

            {{-- Hamburger --}}
            <button id="hamburger" aria-label="Buka menu"
                    class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-sm
                           border border-cream-muted bg-cream hover:bg-cream-dark transition-colors">
                <span class="hamburger-line w-5 h-0.5 bg-bark transition-all duration-300"></span>
                <span class="hamburger-line w-5 h-0.5 bg-bark transition-all duration-300"></span>
                <span class="hamburger-line w-5 h-0.5 bg-bark transition-all duration-300"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
         class="md:hidden absolute top-full left-0 right-0 bg-cream border-t border-cream-muted shadow-xl">
        <div class="flex flex-col py-4 px-6 gap-1">
            <a href="#home"   class="nav-link py-3 border-b border-cream-muted" onclick="closeMobileMenu()">Home</a>
            <a href="#menu"   class="nav-link py-3 border-b border-cream-muted" onclick="closeMobileMenu()">Menu</a>
            <a href="#lokasi" class="nav-link py-3 border-b border-cream-muted" onclick="closeMobileMenu()">Lokasi</a>
            <a href="#kontak" class="nav-link py-3"                             onclick="closeMobileMenu()">Kontak</a>
            <div class="pt-3">
                <a href="#menu" class="btn-primary w-full justify-center text-sm" onclick="closeMobileMenu()">
                    Lihat Menu
                </a>
            </div>
        </div>
    </div>
</nav>


{{-- ═══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ --}}
<section id="home" class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <div class="hero-bg"></div>
    <div class="hero-pattern"></div>

    {{-- Right side image (desktop) --}}
    <div class="hero-img-placeholder">
        <div class="hero-img-inner"></div>
    </div>

    {{-- Decorative circle --}}
    <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full border border-amber-warm/10 z-[2] hidden lg:block"></div>
    <div class="absolute bottom-16 right-1/3 w-64 h-64 rounded-full border border-amber-warm/10 z-[2] hidden lg:block"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10 py-20 lg:py-32 w-full">
        <div class="max-w-2xl">

            {{-- Eyebrow --}}
            <div class="fade-up flex items-center gap-3 mb-6">
                <div class="h-px w-10 bg-amber-warm"></div>
                <span class="font-accent text-amber-light text-xs font-semibold tracking-[0.2em] uppercase">
                    Rumah Makan Keluarga · Klaten
                </span>
            </div>

            {{-- Headline --}}
            <h1 class="fade-up delay-1 font-display font-black text-cream leading-[1.1] mb-6"
                style="font-size: clamp(2rem, 5.5vw, 3.75rem);">
                Resep Autentik Keluarga,<br>
                <em class="not-italic text-amber-light">Kelezatan Iga</em><br>
                yang Khas di Klaten.
            </h1>

            {{-- Sub-headline --}}
            <p class="fade-up delay-2 font-body text-cream/75 text-base md:text-lg leading-relaxed mb-10 max-w-lg">
                Nikmati Sop Iga Hangat, Iga Bakar Empuk, dan Iga Penyet Pedas
                dengan Harga Mulai <strong class="text-amber-light font-semibold">Rp 20.000</strong>.
            </p>

            {{-- CTA --}}
            <div class="fade-up delay-3 flex flex-wrap items-center gap-4 mb-10">
                <a href="#menu" class="btn-primary text-base px-8 py-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Lihat Menu
                </a>
                <a href="#lokasi" class="font-accent font-semibold text-cream/70 hover:text-amber-light
                                         text-sm tracking-widest uppercase transition-colors duration-200 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Temukan Lokasi
                </a>
            </div>

            {{-- Trust / Rating --}}
            <div class="fade-up delay-4 flex items-center gap-4">
                <div class="flex items-center gap-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 shimmer-star {{ $i <= 4 ? 'text-amber-light' : 'text-amber-glow' }}"
                             style="animation-delay: {{ ($i - 1) * 0.1 }}s"
                             fill="{{ $i <= 4 ? 'currentColor' : 'url(#half)' }}" viewBox="0 0 20 20">
                            <defs>
                                <linearGradient id="half" x1="0" x2="1" y1="0" y2="0">
                                    <stop offset="50%" stop-color="currentColor"/>
                                    <stop offset="50%" stop-color="transparent"/>
                                </linearGradient>
                            </defs>
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462
                                     c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                                     1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1
                                     1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <div>
                    <span class="font-display font-bold text-cream text-lg">4.5</span>
                    <span class="font-accent text-cream/60 text-sm tracking-wide ml-1">/ 5.0</span>
                </div>
                <div class="h-6 w-px bg-cream/20"></div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cream/50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48
                                 10-10S17.52 2 12 2zm-1 15H9V8h2v9zm4 0h-2V8h2v9z"/>
                    </svg>
                    <span class="font-accent text-cream/60 text-xs tracking-wider uppercase">Google Maps Reviews</span>
                </div>
            </div>

        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 opacity-50">
        <span class="font-accent text-cream text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-cream/60 to-transparent animate-pulse"></div>
    </div>
</section>


{{-- ═══════════════════════════════════════════
     MENU SECTION
═══════════════════════════════════════════ --}}
<section id="menu" class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        {{-- Section header --}}
        <div class="text-center mb-16">
            <div class="section-ornament">
                <div class="ornament-line rev"></div>
                <div class="ornament-diamond"></div>
                <span class="font-accent text-amber-warm text-xs font-semibold tracking-[0.25em] uppercase">Pilihan Terbaik</span>
                <div class="ornament-diamond"></div>
                <div class="ornament-line"></div>
            </div>
            <h2 class="font-display font-black text-bark text-3xl md:text-4xl lg:text-5xl leading-tight mb-4">
                Menu Andalan Kami
            </h2>
            <p class="font-body italic text-bark/60 text-base md:text-lg">
                Resep Otentik Sejak Lama – Dimasak dengan Cinta & Rempah Pilihan
            </p>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

            {{-- Card 1: Sop Iga --}}
            <article class="menu-card">
                <div class="relative overflow-hidden" style="aspect-ratio:4/3;">
                    <img src="https://placehold.co/600x450/7B1D1D/EDD9B8?text=🍲+Sop+Iga"
                         alt="Sop Iga Awawantie"
                         class="menu-card-img transition-transform duration-500 hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="menu-badge">Best Seller</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display font-bold text-bark text-xl leading-tight">Sop Iga</h3>
                        <div class="text-right ml-3">
                            <div class="font-accent font-bold text-maroon text-xs tracking-wider uppercase">Mulai dari</div>
                            <div class="font-display font-black text-maroon text-lg">Rp 20.000</div>
                        </div>
                    </div>
                    <p class="font-body text-bark/65 text-sm leading-relaxed">
                        Kuah bening hangat nan gurih dengan daging iga sapi yang empuk hingga ke tulang.
                        Rempah pilihan meresap sempurna — cocok disantap pagi hari sebagai pengganjal semangat.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-xs font-accent font-semibold tracking-wide text-amber-warm border border-amber-warm/40 px-2 py-0.5 rounded-sm">Kuah Bening</span>
                        <span class="text-xs font-accent font-semibold tracking-wide text-amber-warm border border-amber-warm/40 px-2 py-0.5 rounded-sm">Iga Empuk</span>
                        <span class="text-xs font-accent font-semibold tracking-wide text-amber-warm border border-amber-warm/40 px-2 py-0.5 rounded-sm">Rempah Pilihan</span>
                    </div>
                </div>
            </article>

            {{-- Card 2: Iga Bakar --}}
            <article class="menu-card">
                <div class="relative overflow-hidden" style="aspect-ratio:4/3;">
                    <img src="https://placehold.co/600x450/5C1313/EDD9B8?text=🔥+Iga+Bakar"
                         alt="Iga Bakar Awawantie"
                         class="menu-card-img transition-transform duration-500 hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="menu-badge" style="background:#D97706;">Favorit</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display font-bold text-bark text-xl leading-tight">Iga Bakar</h3>
                    </div>
                    <p class="font-body text-bark/65 text-sm leading-relaxed">
                        Iga sapi pilihan dimarinasi bumbu rempah rahasia selama berjam-jam, lalu dibakar
                        di atas bara api hingga aroma asap meresap ke dalam daging yang empuk menggoda.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-xs font-accent font-semibold tracking-wide text-amber-warm border border-amber-warm/40 px-2 py-0.5 rounded-sm">Bumbu Meresap</span>
                        <span class="text-xs font-accent font-semibold tracking-wide text-amber-warm border border-amber-warm/40 px-2 py-0.5 rounded-sm">Aroma Bakar</span>
                    </div>
                </div>
            </article>

            {{-- Card 3: Iga Penyet --}}
            <article class="menu-card">
                <div class="relative overflow-hidden" style="aspect-ratio:4/3;">
                    <img src="https://placehold.co/600x450/9B2C2C/EDD9B8?text=🌶️+Iga+Penyet"
                         alt="Iga Penyet Awawantie"
                         class="menu-card-img transition-transform duration-500 hover:scale-105">
                    <div class="absolute top-3 left-3">
                        <span class="menu-badge" style="background:#991B1B;">Pedas 🌶</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display font-bold text-bark text-xl leading-tight">Iga Penyet</h3>
                    </div>
                    <p class="font-body text-bark/65 text-sm leading-relaxed">
                        Daging iga digoreng renyah lalu dipenyet bersama sambal korek pedas khas yang
                        terbuat dari cabai rawit segar. Sensasi pedas-gurih yang bikin ketagihan!
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-xs font-accent font-semibold tracking-wide text-maroon border border-maroon/30 px-2 py-0.5 rounded-sm">Sambal Korek</span>
                        <span class="text-xs font-accent font-semibold tracking-wide text-maroon border border-maroon/30 px-2 py-0.5 rounded-sm">Extra Pedas</span>
                    </div>
                </div>
            </article>

        </div>

        {{-- Repeat CTA --}}
        <div class="text-center">
            <a href="#kontak" class="btn-secondary inline-flex mx-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 10h16M4 14h8"/>
                </svg>
                Lihat Semua Varian Menu
            </a>
        </div>

    </div>
</section>


{{-- ═══════════════════════════════════════════
     LOKASI GMAPS SECTION
═══════════════════════════════════════════ --}}
<section id="lokasi" class="py-24 bg-cream-dark">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        {{-- Section header --}}
        <div class="text-center mb-14">
            <div class="section-ornament">
                <div class="ornament-line rev"></div>
                <div class="ornament-diamond"></div>
                <span class="font-accent text-amber-warm text-xs font-semibold tracking-[0.25em] uppercase">Temukan Kami</span>
                <div class="ornament-diamond"></div>
                <div class="ornament-line"></div>
            </div>
            <h2 class="font-display font-black text-bark text-3xl md:text-4xl leading-tight">
                Lokasi & Jam Buka
            </h2>
        </div>

        {{-- 2-column layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

            {{-- Map --}}
            <div class="map-frame">
                {{--
                    Ganti src di bawah ini dengan embed link Google Maps asli Anda.
                    Cara: Google Maps → Cari lokasi → Share → Embed a map → Copy iframe src
                --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1234567890!2d110.6012345!3d-7.7123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSop+Iga+Awawantie!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Sop Iga Awawantie di Google Maps">
                </iframe>
            </div>

            {{-- Info panel --}}
            <div class="flex flex-col gap-6">

                {{-- Decorative title --}}
                <div class="border-l-4 border-maroon pl-5">
                    <h3 class="font-display font-bold text-bark text-2xl mb-1">Sop Iga Awawantie</h3>
                    <p class="font-accent text-amber-warm text-sm font-semibold tracking-widest uppercase">Klaten, Jawa Tengah</p>
                </div>

                {{-- Address --}}
                <div class="flex items-start gap-4">
                    <div class="info-icon-wrap mt-0.5">
                        <svg class="w-5 h-5 text-cream" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-accent font-bold text-bark text-xs tracking-widest uppercase mb-1">Alamat</div>
                        <p class="font-body text-bark/75 text-sm leading-relaxed">
                            Jl. Ki Pandanaran No.146, Senden, Danguran,<br>
                            Kec. Klaten Selatan, Kabupaten Klaten,<br>
                            Jawa Tengah
                        </p>
                    </div>
                </div>

                {{-- Hours --}}
                <div class="flex items-start gap-4">
                    <div class="info-icon-wrap mt-0.5">
                        <svg class="w-5 h-5 text-cream" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-accent font-bold text-bark text-xs tracking-widest uppercase mb-1">Jam Operasional</div>
                        <div class="font-display font-bold text-bark text-xl">09.00 – 17.00 WIB</div>
                        <p class="font-body text-bark/60 text-xs mt-1 italic">Senin – Minggu (Termasuk Hari Libur)</p>
                        <div class="mt-2 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            <span class="font-accent text-green-700 text-xs font-semibold tracking-wider uppercase">Sedang Buka</span>
                        </div>
                    </div>
                </div>

                {{-- Phone (optional placeholder) --}}
                <div class="flex items-start gap-4">
                    <div class="info-icon-wrap mt-0.5">
                        <svg class="w-5 h-5 text-cream" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257
                                     1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1
                                     1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-accent font-bold text-bark text-xs tracking-widest uppercase mb-1">Hubungi Kami</div>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener"
                           class="font-body text-maroon font-semibold text-sm hover:text-maroon-dark transition-colors">
                            +62 812-XXXX-XXXX (WhatsApp)
                        </a>
                    </div>
                </div>

                {{-- Google Maps CTA --}}
                <div class="pt-2">
                    <a href="https://maps.google.com/?q=Jl.+Ki+Pandanaran+No.146+Klaten" target="_blank" rel="noopener"
                       class="btn-primary inline-flex text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0
                                     9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        Buka di Google Maps
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════
     KONTAK / CATERING SECTION
═══════════════════════════════════════════ --}}
<section id="kontak" class="py-24 bg-maroon relative overflow-hidden">

    {{-- Decorative bg pattern --}}
    <div class="absolute inset-0 opacity-5"
         style="background-image: repeating-linear-gradient(0deg, #fff 0, #fff 1px, transparent 0, transparent 40px),
                                  repeating-linear-gradient(90deg, #fff 0, #fff 1px, transparent 0, transparent 40px);"></div>
    <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-amber-warm/10 translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-bark/20 -translate-x-1/2 translate-y-1/2"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 md:px-10 text-center">

        {{-- Ornament --}}
        <div class="section-ornament mb-2">
            <div class="ornament-line rev" style="background: linear-gradient(to right, transparent, rgba(253,246,236,0.4));"></div>
            <div class="ornament-diamond" style="background: #FBBF24;"></div>
            <span class="font-accent text-amber-light text-xs font-semibold tracking-[0.25em] uppercase">Pesan Sekarang</span>
            <div class="ornament-diamond" style="background: #FBBF24;"></div>
            <div class="ornament-line" style="background: linear-gradient(to left, transparent, rgba(253,246,236,0.4));"></div>
        </div>

        <h2 class="font-display font-black text-cream text-3xl md:text-4xl lg:text-5xl leading-tight mb-6">
            Rumah Makan Keluarga<br>
            <em class="not-italic text-amber-light">untuk Semua Momen Spesial</em>
        </h2>

        <p class="font-body text-cream/75 text-base md:text-lg leading-relaxed mb-4 max-w-2xl mx-auto">
            Dari makan siang keluarga hingga acara kantor besar — kami siap melayani
            <strong class="text-cream font-semibold">pesanan catering</strong> dengan menu lengkap pilihan.
            Sop Iga, Iga Bakar, dan Iga Penyet tersedia dalam porsi besar untuk kebutuhan Anda.
        </p>

        <p class="font-body italic text-amber-light/80 text-sm mb-10">
            "Variasi menu kami dirancang untuk memenuhi selera semua kalangan — dari anak-anak hingga orang tua."
        </p>

        {{-- Feature list --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-12 text-left">
            @php
                $features = [
                    ['icon' => '🏠', 'title' => 'Dine-In Nyaman', 'desc' => 'Suasana warung keluarga yang hangat & ramah.'],
                    ['icon' => '📦', 'title' => 'Catering & Pesanan', 'desc' => 'Tersedia paket pesanan untuk kantor & acara keluarga.'],
                    ['icon' => '🛵', 'title' => 'Antar via Ojol', 'desc' => 'Tersedia di GoFood, GrabFood, dan ShopeeFood.'],
                ];
            @endphp
            @foreach ($features as $f)
            <div class="bg-cream/10 border border-cream/15 rounded-sm p-5 backdrop-blur-sm">
                <div class="text-2xl mb-3">{{ $f['icon'] }}</div>
                <div class="font-accent font-bold text-cream text-sm tracking-wider uppercase mb-1">{{ $f['title'] }}</div>
                <div class="font-body text-cream/65 text-xs leading-relaxed">{{ $f['desc'] }}</div>
            </div>
            @endforeach
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/6281234567890?text=Halo%20Sop%20Iga%20Awawantie,%20saya%20ingin%20memesan..."
               target="_blank" rel="noopener"
               class="btn-whatsapp text-base px-8 py-4 w-full sm:w-auto justify-center">
                {{-- WhatsApp icon --}}
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94
                             1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Hubungi via WhatsApp
            </a>
            <a href="mailto:sopigaawawantie@gmail.com"
               class="btn-secondary border-cream/50 text-cream hover:bg-cream hover:text-maroon hover:border-cream
                      text-base px-8 py-4 w-full sm:w-auto justify-center"
               style="box-shadow: 3px 3px 0 rgba(253,246,236,0.25);">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Kirim Email
            </a>
        </div>

    </div>
</section>


{{-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ --}}
<footer id="footer">

    {{-- Top divider --}}
    <div class="h-1 bg-gradient-to-r from-maroon via-amber-warm to-maroon"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-10 py-14">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-start">

            {{-- Col 1: Logo & Copyright --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-maroon rounded-sm flex items-center justify-center flex-shrink-0">
                        <span class="text-cream text-xl font-display font-black">S</span>
                    </div>
                    <div>
                        <div class="font-display font-bold text-cream text-lg leading-tight">Sop Iga Awawantie</div>
                        <div class="font-accent text-amber-warm text-xs font-semibold tracking-widest uppercase">Klaten, Jawa Tengah</div>
                    </div>
                </div>
                <p class="font-body text-cream/50 text-xs leading-relaxed mb-6">
                    Rumah makan keluarga dengan resep autentik yang telah dipercaya selama bertahun-tahun.
                    Kelezatan iga yang khas, harga yang bersahabat.
                </p>
                <div class="font-accent text-cream/40 text-xs tracking-wide">
                    &copy; {{ date('Y') }} Sop Iga Awawantie.<br>All rights reserved.
                </div>
            </div>

            {{-- Col 2: Social & Delivery --}}
            <div class="md:text-center">
                <div class="font-accent font-bold text-cream/50 text-xs tracking-[0.2em] uppercase mb-5">
                    Ikuti Kami
                </div>
                <div class="flex gap-3 mb-8 md:justify-center">
                    {{-- Instagram --}}
                    <a href="#" target="_blank" rel="noopener" aria-label="Instagram" class="footer-social-link">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058
                                     1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664
                                     4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849
                                     0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069
                                     4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98
                                     6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358
                                     2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014
                                     4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948
                                     0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0
                                     5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759
                                     6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4
                                     0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796
                                     0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="#" target="_blank" rel="noopener" aria-label="Facebook" class="footer-social-link">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125
                                     11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312
                                     0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532
                                     3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>

                <div class="font-accent font-bold text-cream/50 text-xs tracking-[0.2em] uppercase mb-4">
                    Pesan via Ojol
                </div>
                <div class="flex gap-2 md:justify-center flex-wrap">
                    <a href="#" target="_blank" rel="noopener" class="footer-delivery-link">🟢 GoFood</a>
                    <a href="#" target="_blank" rel="noopener" class="footer-delivery-link">🟢 GrabFood</a>
                    <a href="#" target="_blank" rel="noopener" class="footer-delivery-link">🟠 ShopeeFood</a>
                </div>
            </div>

            {{-- Col 3: Address & Hours --}}
            <div class="md:text-right">
                <div class="font-accent font-bold text-cream/50 text-xs tracking-[0.2em] uppercase mb-5">
                    Informasi
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="font-accent font-semibold text-amber-warm text-xs tracking-widest uppercase mb-1">Alamat</div>
                        <p class="font-body text-cream/65 text-xs leading-relaxed">
                            Jl. Ki Pandanaran No.146, Senden,<br>
                            Danguran, Kec. Klaten Selatan,<br>
                            Kabupaten Klaten, Jawa Tengah
                        </p>
                    </div>
                    <div>
                        <div class="font-accent font-semibold text-amber-warm text-xs tracking-widest uppercase mb-1">Jam Buka</div>
                        <p class="font-body text-cream/65 text-xs">
                            Setiap Hari: <strong class="text-cream/85">09.00 – 17.00 WIB</strong>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-cream/10">
        <div class="max-w-7xl mx-auto px-6 md:px-10 py-4 flex flex-col sm:flex-row items-center justify-between gap-2">
            <span class="font-accent text-cream/30 text-xs tracking-wide">
                Made with ❤️ for Sop Iga Awawantie
            </span>
            <span class="font-accent text-cream/30 text-xs tracking-wide">
                Klaten, Jawa Tengah · Indonesia
            </span>
        </div>
    </div>
</footer>


{{-- ═══════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════ --}}
<script>
    // ── Navbar scroll effect ──
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }, { passive: true });

    // ── Mobile menu toggle ──
    const hamburger    = document.getElementById('hamburger');
    const mobileMenu   = document.getElementById('mobile-menu');
    const hamburgerLines = document.querySelectorAll('.hamburger-line');
    let menuOpen = false;

    function openMobileMenu() {
        menuOpen = true;
        mobileMenu.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        // Animate hamburger to X
        hamburgerLines[0].style.transform = 'translateY(6px) rotate(45deg)';
        hamburgerLines[1].style.opacity   = '0';
        hamburgerLines[2].style.transform = 'translateY(-6px) rotate(-45deg)';
    }

    function closeMobileMenu() {
        menuOpen = false;
        mobileMenu.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburgerLines[0].style.transform = '';
        hamburgerLines[1].style.opacity   = '';
        hamburgerLines[2].style.transform = '';
    }

    hamburger.addEventListener('click', () => {
        if (menuOpen) closeMobileMenu();
        else openMobileMenu();
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (menuOpen && !navbar.contains(e.target)) {
            closeMobileMenu();
        }
    });

    // ── Intersection Observer: fade-up for non-hero elements ──
    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-8');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe menu cards, section titles, and info blocks
    document.querySelectorAll('.menu-card, #menu h2, #lokasi h2, #kontak h2').forEach(el => {
        el.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700', 'ease-out');
        observer.observe(el);
    });

    // ── Active nav link on scroll ──
    const sections = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            if (window.scrollY >= section.offsetTop - 100) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('text-maroon');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('text-maroon');
            }
        });
    }, { passive: true });
</script>

</body>
</html>