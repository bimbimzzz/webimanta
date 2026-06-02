<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Webimanta Solusi Digital — Jasa Pembuatan Website & Aplikasi Custom profesional di Semarang. Solusi SaaS terlengkap: HRIS Gajiku, E-Ticketing Ticketku, POS Kasirku, Laundryku, dan Apotekku untuk UMKM & Korporasi seluruh Indonesia.">
    <meta name="keywords"
        content="Jasa Pembuatan Website Semarang, Bikin Aplikasi Android iOS, Software House Indonesia, Jasa Web Custom, Webimanta, Solusi Digital, SaaS Indonesia, HRIS Gajiku, E-Ticketing Ticketku, POS Kasirku, Aplikasi Laundry Laundryku, Aplikasi Apotek Apotekku, Website Murah UMKM">
    <meta name="author" content="Webimanta Solusi Digital">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://webimanta.id">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://webimanta.id">
    <meta property="og:title" content="Webimanta Solusi Digital — Penyedia Aplikasi SaaS & Jasa Web Terbaik Indonesia">
    <meta property="og:description"
        content="Platform SaaS terlengkap untuk bisnis Anda: HRIS, E-Ticketing, POS Kasir, Laundry, dan Apotek. Plus jasa pembuatan website & aplikasi custom berkualitas tinggi.">
    <meta property="og:image" content="{{ asset('images/hero_dashboard.png') }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Webimanta Solusi Digital">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Webimanta Solusi Digital — Penyedia Aplikasi SaaS & Jasa Web Terbaik Indonesia">
    <meta name="twitter:description"
        content="Platform SaaS terlengkap untuk bisnis Anda: HRIS, E-Ticketing, POS Kasir, Laundry, dan Apotek.">
    <meta name="twitter:image" content="{{ asset('images/hero_dashboard.png') }}">

    <title>Webimanta Solusi Digital — Jasa Pembuatan Website & Aplikasi SaaS Terbaik di Indonesia</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": ["Organization", "ProfessionalService"],
        "name": "Webimanta Solusi Digital",
        "url": "https://webimanta.id",
        "logo": "{{ asset('images/logo.svg') }}",
        "image": "{{ asset('images/hero_dashboard.png') }}",
        "description": "Penyedia Jasa Pembuatan Website, Aplikasi Custom, dan Platform SaaS (HRIS, E-Ticketing, POS, Laundry, Apotek) terbaik di Indonesia. Berlokasi di Semarang, Jawa Tengah.",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Semarang",
            "addressLocality": "Semarang",
            "addressRegion": "Jawa Tengah",
            "postalCode": "50000",
            "addressCountry": "ID"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": "-7.0717701",
            "longitude": "110.4320309"
        },
        "hasMap": "https://maps.app.goo.gl/Gqwwp7ncG1D8oU7W6",
        "areaServed": {
            "@@type": "Country",
            "name": "Indonesia"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+62-856-3020-305",
            "contactType": "customer service",
            "availableLanguage": "Indonesian"
        },
        "sameAs": [
            "https://www.facebook.com/profile.php?id=61565691971885",
            "https://www.instagram.com/webimanta/"
        ],
        "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "17:00"
        },
        "priceRange": "$$"
    }
    </script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- --- HEADER / NAVIGATION --- -->
    <header class="navbar" id="navbar">
        <div class="container">
            <a href="#" class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo Webimanta" class="logo-icon">
                <span class="logo-text">webimanta</span>
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="#tentang" class="nav-link">Tentang</a>
                <a href="#produk" class="nav-link">Produk</a>
                <a href="#jasa-web" class="nav-link">Jasa Web</a>
                <a href="#keunggulan" class="nav-link">Keunggulan</a>
                <a href="#kontak" class="nav-link">Kontak</a>
                <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20digital%20bisnis%20saya."
                    target="_blank" class="btn btn-primary btn-sm nav-cta-mobile">Konsultasi Sekarang</a>
            </nav>

            <div class="nav-cta">
                <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20digital%20bisnis%20saya."
                    target="_blank" class="btn btn-primary btn-sm">Konsultasi Sekarang</a>
            </div>

            <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- --- HERO SECTION --- -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <span class="badge-tag">SaaS Provider Indonesia</span>
                    <h1 class="hero-title">Solusi Digital Terjangkau untuk <span>Pertumbuhan Bisnis</span> Anda</h1>
                    <p class="hero-subtitle">Membantu UMKM dan korporasi go-digital dengan platform HRIS, Ticketing, dan
                        POS Kasir berkualitas tinggi tanpa biaya investasi infrastruktur IT yang besar.</p>
                    <div class="hero-ctas">
                        <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20digital%20bisnis%20saya."
                            target="_blank" class="btn btn-primary">
                            Konsultasi Sekarang
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="#produk" class="btn btn-outline-white">Jelajahi Produk</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="visual-backdrop"></div>
                    <img src="{{ asset('images/hero_dashboard.png') }}" alt="Dashboard Webimanta Preview"
                        class="hero-illustration" id="heroIllustration">
                </div>
            </div>
        </div>
    </section>

    <!-- --- ABOUT SECTION --- -->
    <section class="about section-padding" id="tentang">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset('images/about_team.png') }}" alt="Kolaborasi Tim Webimanta" class="w-full">
                    <div class="about-badge">
                        <h4>100%</h4>
                        <p>Komitmen mendorong digitalisasi bisnis lokal Indonesia</p>
                    </div>
                </div>
                <div class="about-content">
                    <span class="about-tag">Siapa Kami</span>
                    <h2 class="about-title">Dari Pelosok untuk Indonesia: Menembus Batas Digital</h2>
                    <p class="about-desc">
                        Webimanta Solusi Digital lahir dari visi untuk meratakan akses teknologi di seluruh Indonesia.
                        Kami percaya bahwa setiap bisnis, baik UMKM di daerah maupun korporasi menengah di kota besar,
                        berhak menikmati kemudahan teknologi modern untuk meningkatkan efisiensi dan daya saing.
                    </p>
                    <div class="vision-mission">
                        <div class="vm-card">
                            <h4>Visi Kami</h4>
                            <p>Menjadi mitra digital terdepan yang mendemokrasikan solusi IT berkualitas tinggi agar
                                mudah diakses oleh seluruh skala usaha di Indonesia.</p>
                        </div>
                        <div class="vm-card accent">
                            <h4>Misi Kami</h4>
                            <p>Mengembangkan aplikasi SaaS yang user-friendly, andal, dan ekonomis guna mempermudah
                                operasional harian pelaku usaha.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --- PRODUCTS SECTION --- -->
    <section class="products section-padding" id="produk">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Produk Unggulan Kami</h2>
                <p class="section-subtitle">Rangkaian solusi digital Webimanta yang dirancang khusus untuk memecahkan
                    tantangan operasional harian bisnis Anda.</p>
            </div>

            <div class="products-grid">
                <!-- Gajiku -->
                <div class="product-card gajiku">
                    <div class="product-icon-wrapper">
                        <!-- Custom HR/Payroll SVG Icon -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <span class="product-badge-ui">Aplikasi HRIS</span>
                    <h3 class="product-title">Gajiku</h3>
                    <p class="product-desc">Solusi terintegrasi untuk pengelolaan administrasi karyawan, kehadiran
                        online, slip gaji, serta penghitungan pajak/BPJS secara instan.</p>
                    <ul class="product-features">
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Absensi Online GPS & Selfie
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Penghitungan Gaji Otomatis
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Manajemen Cuti & Reimbursement
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Slip Gaji Digital (PDF)
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2">
                                </rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            Terintegrasi Mobile App Android
                        </li>
                    </ul>
                    <a href="https://gajiku.webimanta.id" target="_blank" class="product-link">
                        Masuk Gajiku
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- Ticketku -->
                <div class="product-card ticketku">
                    <div class="product-icon-wrapper">
                        <!-- Custom Ticket/Helpdesk SVG Icon -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <span class="product-badge-ui">Sistem E-Ticketing</span>
                    <h3 class="product-title">Ticketku</h3>
                    <p class="product-desc">Sistem manajemen tiket pintar untuk tempat wisata, wahana hiburan, dan
                        event. Percepat antrean dengan validasi QR Code dan pencetakan thermal.</p>
                    <ul class="product-features">
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Penjualan Tiket Online & Offline
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Validasi Cepat via QR Code
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Manajemen Kuota & Vouchering
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Laporan Pengunjung Real-time
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2">
                                </rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            Terintegrasi Mobile App Android
                        </li>
                    </ul>
                    <a href="https://ticketku.webimanta.id" target="_blank" class="product-link">
                        Masuk Ticketku
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- Kasirku -->
                <div class="product-card kasirku">
                    <div class="product-icon-wrapper">
                        <!-- Custom Shopping/POS SVG Icon -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    <span class="product-badge-ui">Point of Sale (POS)</span>
                    <h3 class="product-title">Kasirku</h3>
                    <p class="product-desc">Aplikasi kasir digital untuk mempercepat transaksi penjualan, pencatatan
                        inventory real-time, laporan keuangan, serta multi-cabang.</p>
                    <ul class="product-features">
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Transaksi Offline & Online
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Manajemen Inventori & Stok
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Dukungan QRIS & E-Wallet
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Laporan Penjualan Harian & Bulanan
                        </li>
                        <li class="product-feature-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2">
                                </rect>
                                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                            </svg>
                            Terintegrasi Mobile App Android
                        </li>
                    </ul>
                    <a href="https://kasirku.webimanta.id" target="_blank" class="product-link">
                        Masuk Kasirku
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- --- GATEWAY (PLATFORM ACCESS) SECTION --- -->
    <section class="gateway section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Gerbang Akses Layanan</h2>
                <p class="section-subtitle">Klik di bawah ini untuk mengakses dashboard masing-masing aplikasi
                    sub-domain Webimanta.</p>
            </div>

            <div class="gateway-cards">
                <!-- Gajiku Gateway -->
                <div class="gateway-card">
                    <div class="gateway-icon">💼</div>
                    <h3>Gajiku HRIS</h3>
                    <div class="gateway-domain">gajiku.webimanta.id</div>
                    <p class="gateway-desc">Kelola administrasi staf, penggajian bulanan, BPJS, dan rekap absensi
                        harian dalam satu dashboard terpadu.</p>
                    <a href="https://gajiku.webimanta.id" target="_blank" class="btn btn-primary gateway-btn"
                        style="background-color: #4f46e5;">Buka Dashboard</a>
                </div>

                <!-- Ticketku Gateway -->
                <div class="gateway-card">
                    <div class="gateway-icon">🎟️</div>
                    <h3>Ticketku E-Ticketing</h3>
                    <div class="gateway-domain">ticketku.webimanta.id</div>
                    <p class="gateway-desc">Kelola penjualan tiket wisata, event, manajemen kuota pengunjung, dan
                        validasi QR Code secara instan.</p>
                    <a href="https://ticketku.webimanta.id" target="_blank" class="btn btn-primary gateway-btn"
                        style="background-color: #0ea5e9;">Buka Dashboard</a>
                </div>

                <!-- Kasirku Gateway -->
                <div class="gateway-card">
                    <div class="gateway-icon">🛒</div>
                    <h3>Kasirku POS</h3>
                    <div class="gateway-domain">kasirku.webimanta.id</div>
                    <p class="gateway-desc">Pencatatan kasir kas, hitung transaksi toko, kelola gudang inventori, dan
                        cetak struk penjualan langsung.</p>
                    <a href="https://kasirku.webimanta.id" target="_blank" class="btn btn-primary gateway-btn"
                        style="background-color: #f59e0b;">Buka Dashboard</a>
                </div>

                <!-- Laundryku Gateway -->
                <div class="gateway-card">
                    <div class="gateway-icon">🧺</div>
                    <h3>Laundryku</h3>
                    <div class="gateway-domain">laundry.webimanta.id</div>
                    <p class="gateway-desc">Kelola operasional laundry kiloan & satuan, tracking cucian pelanggan,
                        notifikasi selesai, serta laporan pendapatan harian.</p>
                    <a href="https://laundry.webimanta.id" target="_blank" class="btn btn-primary gateway-btn"
                        style="background-color: #06b6d4;">Buka Dashboard</a>
                </div>

                <!-- Apotekku Gateway -->
                <div class="gateway-card">
                    <div class="gateway-icon">💊</div>
                    <h3>Apotekku</h3>
                    <div class="gateway-domain">apotik.webimanta.id</div>
                    <p class="gateway-desc">Manajemen stok obat, pencatatan resep dokter, alert kedaluwarsa otomatis,
                        serta laporan penjualan apotek terintegrasi.</p>
                    <a href="https://apotik.webimanta.id" target="_blank" class="btn btn-primary gateway-btn"
                        style="background-color: #10b981;">Buka Dashboard</a>
                </div>
            </div>
        </div>
    </section>

    <!-- --- CUSTOM DEVELOPMENT SECTION --- -->
    <section class="custom-dev section-padding" id="jasa-web">
        <div class="container">
            <div class="custom-dev-card">
                <div class="custom-dev-content">
                    <span class="product-badge-ui"
                        style="background: rgba(0, 168, 204, 0.15); color: #00a8cc; margin-bottom: 1rem;">Software
                        House & Custom Development</span>
                    <h2 class="custom-dev-title">Punya Konsep Website atau Aplikasi Sendiri?</h2>
                    <p class="custom-dev-desc">Jika bisnis Anda membutuhkan sistem yang sangat spesifik, kami
                        menyediakan <strong>Jasa Pembuatan Website & Aplikasi Android/iOS Custom</strong>. Mulai dari
                        Company Profile eksklusif, E-Commerce, ERP, Sistem Rumah Sakit, hingga Marketplace. Kami bantu
                        wujudkan dengan arsitektur teknologi terkini yang super cepat dan sangat <em>SEO Friendly</em>
                        untuk menjamin bisnis Anda mudah ditemukan di Google.</p>
                    <ul class="custom-dev-features">
                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00a8cc"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg> Desain UI/UX Premium & Eksklusif</li>
                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00a8cc"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg> Struktur SEO Friendly Super Tinggi</li>
                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00a8cc"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg> Performa Cepat, Aman & Bebas Bug</li>
                    </ul>
                    <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20tertarik%20dengan%20Jasa%20Pembuatan%20Website/Aplikasi%20Custom."
                        target="_blank" class="btn btn-primary custom-dev-btn"
                        style="background-color: #002d5b; border-color: #002d5b;">Konsultasi Project Custom
                        Sekarang</a>
                </div>
                <div class="custom-dev-image">
                    <svg viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="20" y="40" width="360" height="220" rx="12" fill="#002d5b" />
                        <rect x="20" y="40" width="360" height="40" rx="12" fill="#031e3b" />
                        <circle cx="45" cy="60" r="6" fill="#ef4444" />
                        <circle cx="65" cy="60" r="6" fill="#f59e0b" />
                        <circle cx="85" cy="60" r="6" fill="#10b981" />
                        <rect x="40" y="100" width="200" height="20" rx="4"
                            fill="rgba(255,255,255,0.1)" />
                        <rect x="40" y="140" width="140" height="15" rx="4"
                            fill="rgba(255,255,255,0.05)" />
                        <rect x="40" y="170" width="160" height="15" rx="4"
                            fill="rgba(255,255,255,0.05)" />
                        <rect x="280" y="100" width="80" height="120" rx="8"
                            fill="rgba(0,168,204,0.2)" />
                        <!-- Floating phone -->
                        <rect x="210" y="130" width="80" height="150" rx="12" fill="#ffffff"
                            stroke="#e2e8f0" stroke-width="4" />
                        <rect x="220" y="150" width="60" height="10" rx="3" fill="#00a8cc" />
                        <rect x="220" y="170" width="60" height="90" rx="4" fill="#f1f5f9" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- --- WHY US (BENEFITS) SECTION --- -->
    <section class="why-us section-padding" id="keunggulan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Mengapa Memilih Webimanta?</h2>
                <p class="section-subtitle">Kami menghapus segala hambatan teknologi tradisional agar Anda fokus
                    mengembangkan bisnis inti.</p>
            </div>

            <div class="why-grid">
                <!-- Benefit 1 -->
                <div class="why-card">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="why-title">Tanpa Instalasi Rumit</h3>
                    <p class="why-desc">Sistem berbasis Cloud (SaaS) sepenuhnya. Cukup mendaftar, buka browser, dan
                        aplikasi siap digunakan kapan saja.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="why-card">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="why-title">Hemat & Efisien</h3>
                    <p class="why-desc">Sistem langganan bulanan terjangkau yang ramah kantong pelaku bisnis. Tak perlu
                        beli server fisik yang mahal.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="why-card">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 class="why-title">Aman & Terjamin</h3>
                    <p class="why-desc">Enkripsi data berlapis dan backup cloud terjadwal untuk menjamin rahasia
                        internal bisnis Anda aman terjaga.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="why-card">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="why-title">Dukungan Responsif</h3>
                    <p class="why-desc">Tim support lokal Indonesia siap membantu implementasi awal dan penyelesaian
                        masalah teknis secara tanggap.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- --- CONTACT SECTION --- -->
    <section class="contact section-padding" id="kontak">
        <div class="container">
            <div class="contact-grid">
                <!-- Info Block -->
                <div class="contact-info-block">
                    <div class="contact-info-top">
                        <h3>Hubungi Kami</h3>
                        <p>Mari diskusikan transformasi digital bisnis Anda bersama tim konsultan ahli Webimanta Solusi
                            Digital.</p>

                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon-wrapper">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-item-text">
                                    <h5>WhatsApp</h5>
                                    <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20digital%20bisnis%20saya."
                                        target="_blank">0856-3020-305</a>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon-wrapper">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="contact-item-text">
                                    <h5>Email</h5>
                                    <a href="mailto:webimanta@gmail.com">webimanta@gmail.com</a>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon-wrapper">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="contact-item-text">
                                    <h5>Lokasi</h5>
                                    <p>Semarang, Jawa Tengah, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-socials">
                        <a href="https://www.facebook.com/profile.php?id=61565691971885" target="_blank"
                            class="social-link" aria-label="Facebook Profile"><svg width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg></a>
                        <a href="https://www.instagram.com/webimanta/" target="_blank" class="social-link"
                            aria-label="Instagram Profile"><svg width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg></a>
                    </div>
                </div>

                <!-- Form Block -->
                <div class="contact-form-block">
                    <h3>Kirim Pesan</h3>
                    <p>Punya pertanyaan spesifik? Hubungi kami langsung menggunakan formulir elektronik berikut ini.</p>

                    <form id="contactForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="formName">Nama Lengkap</label>
                                <input type="text" id="formName" class="form-control" placeholder="Nama Anda"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="formEmail">Alamat Email</label>
                                <input type="email" id="formEmail" class="form-control"
                                    placeholder="nama@perusahaan.com" required>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <label for="formCompany">Nama Perusahaan / Toko</label>
                            <input type="text" id="formCompany" class="form-control"
                                placeholder="PT. Contoh Bisnis Jaya">
                        </div>

                        <div class="form-group" style="margin-bottom: 2rem;">
                            <label for="formMessage">Pesan / Konsultasi Kebutuhan</label>
                            <textarea id="formMessage" class="form-control"
                                placeholder="Tuliskan kebutuhan IT atau pertanyaan Anda tentang Gajiku, Ticketku, atau Kasirku..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan
                            Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Google Maps Embed - Lokasi Semarang, Jawa Tengah -->
            <div class="map-wrapper">
                <iframe
                    src="https://maps.google.com/maps?q=Webimanta+-+Jasa+Pembuatan+Website+%26+Aplikasi+Semarang&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="350"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Webimanta Solusi Digital - Semarang, Jawa Tengah, Indonesia">
                </iframe>
            </div>
        </div>
    </section>

    <!-- --- FOOTER --- -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Info -->
                <div class="footer-about">
                    <div class="logo">
                        <img src="{{ asset('images/logo.svg') }}" alt="Logo Webimanta" class="logo-icon">
                        <span class="logo-text">webimanta</span>
                    </div>
                    <p class="footer-desc">Penyedia aplikasi berbasis web (SaaS) berkualitas tinggi yang dikembangkan
                        dari pelosok negeri untuk mendorong pemerataan kemajuan digital bisnis di Indonesia.</p>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="footer-title">Navigasi Cepat</h4>
                    <ul class="footer-links">
                        <li><a href="#tentang" class="footer-link"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> Tentang Kami</a></li>
                        <li><a href="#produk" class="footer-link"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> Produk SaaS</a></li>
                        <li><a href="#jasa-web" class="footer-link"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> Jasa Web & Aplikasi</a></li>
                        <li><a href="#keunggulan" class="footer-link"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> Keunggulan Kami</a></li>
                        <li><a href="#kontak" class="footer-link"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> Kontak</a></li>
                    </ul>
                </div>

                <!-- SaaS Domain Links -->
                <div>
                    <h4 class="footer-title">Platform SaaS</h4>
                    <ul class="footer-links">
                        <li><a href="https://gajiku.webimanta.id" target="_blank" class="footer-link"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg> Gajiku (HRIS)</a></li>
                        <li><a href="https://ticketku.webimanta.id" target="_blank" class="footer-link"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg> Ticketku (Ticketing)</a></li>
                        <li><a href="https://kasirku.webimanta.id" target="_blank" class="footer-link"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg> Kasirku (POS Kasir)</a></li>
                        <li><a href="https://laundry.webimanta.id" target="_blank" class="footer-link"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg> Laundryku (Laundry)</a></li>
                        <li><a href="https://apotik.webimanta.id" target="_blank" class="footer-link"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg> Apotekku (Apotek)</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">&copy; 2026 Webimanta Solusi Digital. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="footer-bottom-links">
                    <a href="{{ route('privacy') }}" class="footer-bottom-link">Kebijakan Privasi</a>
                    <a href="{{ route('terms') }}" class="footer-bottom-link">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- --- FLOATING WHATSAPP CTA --- -->
    <a href="https://wa.me/628563020305?text=Halo%20Webimanta,%20saya%20ingin%20berkonsultasi%20mengenai%20solusi%20digital%20bisnis%20saya."
        target="_blank" class="whatsapp-float" aria-label="Konsultasi via WhatsApp">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top: 2px;">
            <path
                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
            </path>
        </svg>
        <span class="whatsapp-badge-pulse"></span>
    </a>

    <!-- --- INTERACTIVE JAVASCRIPT --- -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');

            if (menuToggle && navLinks) {
                menuToggle.addEventListener('click', function() {
                    menuToggle.classList.toggle('active');
                    navLinks.classList.toggle('active');
                });

                // Close menu when clicking link
                const links = document.querySelectorAll('.nav-link');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        menuToggle.classList.remove('active');
                        navLinks.classList.remove('active');
                    });
                });
            }

            // Scrollspy - Highlight active nav item
            const sections = document.querySelectorAll('section');
            const navItems = document.querySelectorAll('.nav-link');

            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (window.scrollY >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });

                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href').slice(1) === current) {
                        item.classList.add('active');
                    }
                });
            });

            // Contact Form Interactive Behavior
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const name = document.getElementById('formName').value;
                    const email = document.getElementById('formEmail').value;
                    const company = document.getElementById('formCompany').value;
                    const message = document.getElementById('formMessage').value;

                    // Build WhatsApp URL
                    const waNumber = '628563020305';
                    const text =
                        `Halo Webimanta, saya ingin berkonsultasi.%0A%0ANama: ${name}%0AEmail: ${email}%0APerusahaan: ${company ? company : '-'}%0A%0APesan:%0A${message}`;
                    const waUrl = `https://wa.me/${waNumber}?text=${text}`;

                    // Open WhatsApp in a new tab
                    window.open(waUrl, '_blank');

                    // Reset Form
                    contactForm.reset();
                });
            }
        });
    </script>
</body>

</html>
