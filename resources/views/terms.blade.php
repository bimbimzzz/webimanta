<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Syarat dan Ketentuan Webimanta Solusi Digital.">
    <title>Syarat & Ketentuan — Webimanta Solusi Digital</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .page-content {
            padding-top: 120px;
            padding-bottom: 60px;
            min-height: 70vh;
        }
        .page-header {
            margin-bottom: 3rem;
            text-align: center;
        }
        .prose {
            max-width: 800px;
            margin: 0 auto;
            color: var(--gray-600);
            line-height: 1.8;
        }
        .prose h2 {
            color: var(--gray-900);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        .prose p {
            margin-bottom: 1rem;
        }
        .prose ul {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .prose li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>

    <!-- --- HEADER / NAVIGATION --- -->
    <header class="navbar" id="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo Webimanta" class="logo-icon">
                <span class="logo-text">webimanta</span>
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="{{ route('home') }}#tentang" class="nav-link">Tentang</a>
                <a href="{{ route('home') }}#produk" class="nav-link">Produk</a>
                <a href="{{ route('home') }}#jasa-web" class="nav-link">Jasa Web</a>
                <a href="{{ route('home') }}#keunggulan" class="nav-link">Keunggulan</a>
                <a href="{{ route('home') }}#kontak" class="nav-link">Kontak</a>
            </nav>

            <div class="nav-cta">
                <a href="{{ route('home') }}" class="btn btn-primary btn-sm">Kembali ke Beranda</a>
            </div>
        </div>
    </header>

    <!-- --- CONTENT --- -->
    <main class="page-content">
        <div class="container">
            <div class="page-header">
                <span class="badge-tag">Informasi Legal</span>
                <h1 class="section-title">Syarat & Ketentuan</h1>
                <p class="section-subtitle">Pembaruan Terakhir: {{ date('d F Y') }}</p>
            </div>
            
            <div class="prose">
                <h2>1. Penerimaan Syarat</h2>
                <p>Dengan mengakses atau menggunakan situs web dan layanan dari Webimanta Solusi Digital, Anda setuju untuk terikat oleh Syarat dan Ketentuan ini. Jika Anda tidak setuju dengan bagian mana pun dari syarat ini, Anda dilarang menggunakan atau mengakses situs ini dan layanan kami.</p>

                <h2>2. Penggunaan Layanan</h2>
                <p>Webimanta menyediakan berbagai produk SaaS (Software as a Service) dan jasa pengembangan website/aplikasi custom. Anda setuju untuk menggunakan layanan ini hanya untuk tujuan yang sah dan dengan cara yang tidak melanggar hak orang lain, atau membatasi atau menghalangi penggunaan dan penikmatan layanan oleh siapa pun.</p>

                <h2>3. Kekayaan Intelektual</h2>
                <p>Kecuali dinyatakan lain, Webimanta Solusi Digital dan/atau pemberi lisensinya memiliki hak kekayaan intelektual untuk semua materi di situs web dan platform SaaS yang kami sediakan. Semua hak kekayaan intelektual dilindungi undang-undang. Anda dapat mengakses ini dari Webimanta untuk penggunaan pribadi/bisnis Anda sendiri yang tunduk pada batasan yang ditetapkan dalam syarat dan ketentuan ini.</p>

                <h2>4. Akun Pengguna</h2>
                <p>Jika Anda membuat akun di salah satu platform kami, Anda bertanggung jawab untuk menjaga keamanan akun Anda dan Anda sepenuhnya bertanggung jawab atas semua aktivitas yang terjadi di bawah akun tersebut dan tindakan lain yang diambil sehubungan dengannya.</p>

                <h2>5. Batasan Tanggung Jawab</h2>
                <p>Dalam keadaan apa pun Webimanta, maupun direktur, karyawan, mitra, agen, pemasok, atau afiliasinya, tidak akan bertanggung jawab atas kerugian tidak langsung, insidental, khusus, konsekuensial, atau hukuman, termasuk namun tidak terbatas pada, kehilangan keuntungan, data, penggunaan, itikad baik, atau kerugian tak berwujud lainnya, yang dihasilkan dari (i) akses Anda ke atau penggunaan atau ketidakmampuan untuk mengakses atau menggunakan Layanan; (ii) setiap perilaku atau konten dari pihak ketiga mana pun di Layanan.</p>

                <h2>6. Revisi dan Errata</h2>
                <p>Materi yang muncul di situs web Webimanta dapat mencakup kesalahan teknis, tipografi, atau fotografi. Webimanta tidak menjamin bahwa materi apa pun di situs webnya akurat, lengkap, atau terkini. Webimanta dapat membuat perubahan pada materi yang terkandung di situs webnya kapan saja tanpa pemberitahuan.</p>

                <h2>7. Perubahan Syarat</h2>
                <p>Webimanta dapat merevisi syarat penggunaan untuk situs web dan layanannya kapan saja tanpa pemberitahuan. Dengan menggunakan situs web ini, Anda setuju untuk terikat oleh versi saat ini dari Syarat dan Ketentuan Penggunaan ini.</p>

                <h2>8. Hukum yang Berlaku</h2>
                <p>Syarat dan ketentuan ini diatur oleh dan ditafsirkan sesuai dengan hukum yang berlaku di Republik Indonesia, dan Anda tunduk secara tidak dapat ditarik kembali ke yurisdiksi eksklusif pengadilan di lokasi tersebut.</p>

                <h2>9. Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan tentang Syarat & Ketentuan ini, silakan hubungi kami di:</p>
                <p>
                    <strong>Webimanta Solusi Digital</strong><br>
                    Semarang, Jawa Tengah, Indonesia<br>
                    WhatsApp: +62-856-3020-305
                </p>
            </div>
        </div>
    </main>

    <!-- --- FOOTER --- -->
    <footer class="footer">
        <div class="container">
            <div class="footer-bottom" style="border-top: none; padding-top: 0;">
                <p class="copyright">&copy; {{ date('Y') }} Webimanta Solusi Digital. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="footer-bottom-links">
                    <a href="{{ route('privacy') }}" class="footer-bottom-link">Kebijakan Privasi</a>
                    <a href="{{ route('terms') }}" class="footer-bottom-link">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
