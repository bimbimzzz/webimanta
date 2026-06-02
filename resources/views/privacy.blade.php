<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kebijakan Privasi Webimanta Solusi Digital.">
    <title>Kebijakan Privasi — Webimanta Solusi Digital</title>
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
                <h1 class="section-title">Kebijakan Privasi</h1>
                <p class="section-subtitle">Pembaruan Terakhir: {{ date('d F Y') }}</p>
            </div>
            
            <div class="prose">
                <h2>1. Pengumpulan Informasi</h2>
                <p>Kami di Webimanta Solusi Digital ("Kami", "Webimanta") mengumpulkan informasi yang Anda berikan secara langsung kepada kami, misalnya saat Anda mengisi formulir kontak, mendaftar untuk menggunakan produk SaaS kami (Gajiku, Ticketku, Kasirku, Laundryku, Apotekku), atau berkomunikasi dengan kami. Informasi ini mungkin termasuk nama, alamat email, nomor telepon, alamat, dan informasi bisnis lainnya.</p>

                <h2>2. Penggunaan Informasi</h2>
                <p>Informasi yang kami kumpulkan digunakan untuk berbagai tujuan, termasuk untuk:</p>
                <ul>
                    <li>Menyediakan, memelihara, dan meningkatkan layanan kami.</li>
                    <li>Memproses transaksi dan mengirimkan pemberitahuan terkait.</li>
                    <li>Menanggapi komentar, pertanyaan, dan permintaan layanan pelanggan.</li>
                    <li>Berkomunikasi dengan Anda tentang produk, layanan, penawaran, dan pembaruan.</li>
                    <li>Mendeteksi, menyelidiki, dan mencegah transaksi penipuan dan aktivitas ilegal lainnya.</li>
                </ul>

                <h2>3. Berbagi Informasi</h2>
                <p>Kami tidak menjual, memperdagangkan, atau menyewakan informasi identitas pribadi Anda kepada pihak lain. Kami dapat membagikan informasi demografis gabungan generik yang tidak terkait dengan informasi identitas pribadi apa pun mengenai pengunjung dan pengguna dengan mitra bisnis, afiliasi tepercaya, dan pengiklan kami.</p>

                <h2>4. Keamanan Data</h2>
                <p>Kami mengambil langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi Anda dari akses, perubahan, pengungkapan, atau penghancuran yang tidak sah. Namun, harap diingat bahwa tidak ada transmisi data melalui Internet yang 100% aman.</p>

                <h2>5. Hak-Hak Anda</h2>
                <p>Anda memiliki hak untuk meminta akses, koreksi, atau penghapusan informasi pribadi Anda. Jika Anda ingin menggunakan hak-hak ini, silakan hubungi kami melalui informasi kontak yang disediakan di bagian bawah kebijakan ini.</p>

                <h2>6. Perubahan Kebijakan Privasi</h2>
                <p>Webimanta berhak untuk memperbarui kebijakan privasi ini kapan saja. Saat kami melakukannya, kami akan merevisi tanggal pembaruan di bagian atas halaman ini. Kami mendorong Pengguna untuk sering memeriksa halaman ini untuk perubahan apa pun.</p>

                <h2>7. Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, praktik situs ini, atau transaksi Anda dengan situs ini, silakan hubungi kami di:</p>
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
