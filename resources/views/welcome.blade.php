<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Pramatech</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        * {
            scroll-behavior: smooth;
        }

        :root {
            --bg-primary: #ffffff;
            --bg-secondary: #f3f4f6;
            --bg-tertiary: #f9fafb;
            --text-primary: #1f2937;
            --text-secondary: #4b5563;
            --text-tertiary: #6b7280;
            --accent: #10b981;
            --accent-dark: #059669;
            --card-bg: #ffffff;
            --border-color: #e5e7eb;
            --shadow: rgba(0, 0, 0, 0.1);
            --navbar-bg: rgba(255, 255, 255, 0.9);
            --navbar-text: #1f2937;
            --hero-bg-from: #f0fdf4;
            --hero-bg-via: #ffffff;
            --hero-bg-to: #dcfce7;
            --hero-text: #1f2937;
        }

        [data-theme="dark"] {
            --bg-primary: #111827;
            --bg-secondary: #1f2937;
            --bg-tertiary: #374151;
            --text-primary: #f9fafb;
            --text-secondary: #e5e7eb;
            --text-tertiary: #d1d5db;
            --accent: #34d399;
            --accent-dark: #10b981;
            --card-bg: #1f2937;
            --border-color: #374151;
            --shadow: rgba(0, 0, 0, 0.3);
            --navbar-bg: rgba(17, 24, 39, 0.9);
            --navbar-text: #f9fafb;
            --hero-bg-from: #0f172a;
            --hero-bg-via: #1e293b;
            --hero-bg-to: #111827;
            --hero-text: #f9fafb;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Animasi */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(16, 185, 129, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Hover Effects */
        .card-hover {
            transition: all 0.3s ease;
            background-color: var(--card-bg);
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px var(--shadow);
        }

        /* Button Effects */
        .btn-primary {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }

        .btn-primary:hover:before {
            transform: translateX(0);
        }

        /* Map Container */
        .map-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            height: 400px;
            box-shadow: 0 10px 30px var(--shadow);
        }

        /* Social Media Icons */
        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.2) rotate(5deg);
        }

        /* Parallax Effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Feature Card */
        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Mobile Menu */
        .mobile-menu {
            transition: all 0.3s ease;
            background-color: var(--bg-primary);
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--accent-dark));
            z-index: 1000;
            transition: width 0.3s ease;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: relative;
            width: 60px;
            height: 30px;
            background-color: var(--bg-tertiary);
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .theme-toggle-slider {
            position: absolute;
            top: 3px;
            left: 3px;
            width: 24px;
            height: 24px;
            background-color: white;
            border-radius: 50%;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        [data-theme="dark"] .theme-toggle-slider {
            transform: translateX(30px);
            background-color: #1f2937;
        }

        .theme-toggle-icon {
            font-size: 12px;
            color: var(--accent);
        }

        /* Navbar Styles */
        .navbar-link {
            color: var(--navbar-text);
            transition: color 0.3s ease;
        }

        .navbar-link:hover {
            color: var(--accent);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            .mobile-menu {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                box-shadow: 0 10px 30px var(--shadow);
                padding: 20px;
                transform: translateY(-150%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 40;
            }

            .mobile-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .mobile-menu ul {
                flex-direction: column;
                gap: 15px;
            }

            .mobile-menu a {
                display: block;
                padding: 10px 0;
                border-bottom: 1px solid var(--border-color);
                color: var(--text-primary);
            }
        }
    </style>
</head>

<body class="transition-colors duration-500" data-theme="light">

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 md:px-8 py-4 shadow-lg backdrop-blur-md sticky top-0 z-50 transition-all duration-300"
        id="navbar">
        <div class="flex items-center gap-4">
            <h1 class="text-2xl font-bold gradient-text">Koperasi Pramatech</h1>
        </div>

        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="#home" class="navbar-link hover:text-emerald-600 transition-colors duration-300">Home</a></li>
            <li><a href="#about" class="navbar-link hover:text-emerald-600 transition-colors duration-300">Tentang</a></li>
            <li><a href="#features" class="navbar-link hover:text-emerald-600 transition-colors duration-300">Layanan</a></li>
            <li><a href="#contact" class="navbar-link hover:text-emerald-600 transition-colors duration-300">Kontak</a></li>
        </ul>

        <div class="flex items-center gap-3">
            <!-- Theme Toggle -->
            <div class="theme-toggle" id="themeToggle">
                <div class="theme-toggle-slider">
                    <i class="fas fa-sun theme-toggle-icon" id="themeIcon"></i>
                </div>
            </div>
            
            <a href="{{ route('login') }}"
                class="hidden md:block px-6 py-2.5 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 text-white hover:shadow-lg hover:scale-105 transition-all duration-300 btn-primary">Login</a>
            <a href="{{ route('register') }}"
                class="hidden md:block px-6 py-2.5 rounded-xl border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-50 transition-all duration-300">Daftar</a>

            <!-- Mobile Menu Button -->
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">

    </div>

    <!-- Hero Section -->
    <section id="home"
        class="relative text-center py-32 px-6 md:px-12 overflow-hidden"
        style="background: linear-gradient(to bottom right, var(--hero-bg-from), var(--hero-bg-via), var(--hero-bg-to));">

        <!-- Decorative Circles -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-emerald-300/20 rounded-full blur-3xl"></div>

        <!-- Gelombang di atas -->
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] rotate-180">
            <svg class="relative block w-[calc(100%+1.3px)] h-[120px]" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.19C181.34,72.39,0,120,0,120H1200V0S1070.55,44.3,910.74,55.05C755.55,65.51,604.66,39.99,321.39,56.19Z"
                    fill="#10b981" fill-opacity="0.3"></path>
            </svg>
        </div>

        <div class="relative z-10 animate-fadeInUp">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="gradient-text animate-gradient">Selamat Datang</span><br>
                <span style="color: var(--hero-text);">di Koperasi Simpan Pinjam Sejahtera</span>
            </h2>
            <p class="text-xl max-w-3xl mx-auto mb-10 leading-relaxed" style="color: var(--hero-text);">
                Bersama membangun kesejahteraan anggota melalui semangat gotong royong dan kepercayaan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#about"
                    class="inline-block px-8 py-4 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 btn-primary">
                    Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#contact"
                    class="inline-block px-8 py-4 rounded-xl border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-50 transition-all duration-300">
                    Hubungi Kami <i class="fas fa-phone ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 px-6 md:px-12" style="background-color: var(--bg-secondary);">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="animate-slideInLeft">
                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Koperasi"
                    class="w-full max-w-md mx-auto drop-shadow-2xl animate-float">
            </div>
            <div class="animate-slideInRight">
                <h3 class="text-4xl font-bold mb-6 gradient-text">Tentang Kami</h3>
                <p class="leading-relaxed text-lg mb-6" style="color: var(--text-secondary);">
                    KSP Sejahtera berdiri untuk membantu masyarakat dalam mengelola keuangan secara mandiri.
                    Kami menyediakan layanan simpanan, pinjaman, dan pembiayaan dengan prinsip koperasi: dari anggota,
                    oleh anggota, untuk anggota.
                </p>
                <div class="grid grid-cols-3 gap-6 mt-8">
                    <div class="text-center p-4 rounded-xl" style="background-color: var(--bg-tertiary);">
                        <div class="text-3xl font-bold" style="color: var(--accent);">500+</div>
                        <div class="text-sm" style="color: var(--text-tertiary);">Anggota</div>
                    </div>
                    <div class="text-center p-4 rounded-xl" style="background-color: var(--bg-tertiary);">
                        <div class="text-3xl font-bold" style="color: var(--accent);">10+</div>
                        <div class="text-sm" style="color: var(--text-tertiary);">Tahun</div>
                    </div>
                    <div class="text-center p-4 rounded-xl" style="background-color: var(--bg-tertiary);">
                        <div class="text-3xl font-bold" style="color: var(--accent);">5M+</div>
                        <div class="text-sm" style="color: var(--text-tertiary);">Dana Kelola</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 px-6 md:px-12" style="background-color: var(--bg-primary);">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-center mb-4 gradient-text">Layanan Kami</h3>
            <p class="text-center mb-16 max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Kami menyediakan berbagai layanan keuangan untuk membantu anggota mencapai kesejahteraan finansial.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover p-8 rounded-2xl shadow-xl">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 animate-pulse">
                        <i class="fas fa-piggy-bank text-white text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4" style="color: var(--text-primary);">Simpanan</h4>
                    <p class="mb-4" style="color: var(--text-secondary);">Kelola simpanan Anda dengan aman dan dapatkan keuntungan yang
                        kompetitif.</p>
                    <a href="#"
                        class="font-medium hover:text-emerald-700 transition-colors" style="color: var(--accent);">Pelajari
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="card-hover p-8 rounded-2xl shadow-xl">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-6 animate-pulse">
                        <i class="fas fa-hand-holding-usd text-white text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4" style="color: var(--text-primary);">Pinjaman</h4>
                    <p class="mb-4" style="color: var(--text-secondary);">Kami Proses cepat, bunga rendah, dan syarat yang mudah untuk anggota.
                    </p>
                    <a href="#"
                        class="font-medium hover:text-emerald-700 transition-colors" style="color: var(--accent);">Pelajari
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="card-hover p-8 rounded-2xl shadow-xl">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center mb-6 animate-pulse">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4" style="color: var(--text-primary);">Investasi</h4>
                    <p class="mb-4" style="color: var(--text-secondary);">Kembangkan dana Anda dengan program investasi yang menguntungkan.</p>
                    <a href="#"
                        class="font-medium hover:text-emerald-700 transition-colors" style="color: var(--accent);">Pelajari
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-24 px-6 md:px-12" style="background-color: var(--bg-secondary);">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-center mb-4 gradient-text">Testimoni Anggota</h3>
            <p class="text-center mb-16 max-w-2xl mx-auto" style="color: var(--text-secondary);">
                Dengarkan apa kata anggota kami tentang pengalaman mereka bersama Koperasi Pramatech.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl shadow-lg" style="background: linear-gradient(to right, var(--bg-tertiary), var(--bg-primary));">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimonial"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">AndiBelumMandi</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic" style="color: var(--text-secondary);">"Layanan pinjaman sangat membantu usaha saya berkembang. Prosesnya
                        cepat dan bunganya kompetitif."</p>
                </div>
                <div class="p-6 rounded-2xl shadow-lg" style="background: linear-gradient(to right, var(--bg-tertiary), var(--bg-primary));">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Testimonial"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">AndiBelumMakan</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic" style="color: var(--text-secondary);">"Simpanan di Koperasi Pramatech sangat aman dan menguntungkan.
                        Stafnya juga ramah dan profesional."</p>
                </div>
                <div class="p-6 rounded-2xl shadow-lg" style="background: linear-gradient(to right, var(--bg-tertiary), var(--bg-primary));">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Testimonial"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">AndiBelumTidur</h4>
                            <div class="text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="italic" style="color: var(--text-secondary);">"Program investasinya sangat bagus, membantu saya merencanakan
                        keuangan untuk masa depan keluarga."</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="py-24 px-6 md:px-12" style="background-color: var(--bg-primary);">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-4xl font-bold text-center mb-6 gradient-text">Hubungi Kami</h3>
            <p class="text-center mb-16 text-lg" style="color: var(--text-secondary);">
                Ada pertanyaan atau ingin bergabung dengan kami? Hubungi kami melalui kontak di bawah ini.
            </p>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-1" style="color: var(--text-primary);">Telepon</h4>
                            <p style="color: var(--text-secondary);">(021) 555-1234</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-1" style="color: var(--text-primary);">Email</h4>
                            <a href="mailto:info@kspsejahtera.id"
                                class="hover:text-emerald-700 transition-colors" style="color: var(--accent);">info@kspsejahtera.id</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-1" style="color: var(--text-primary);">Alamat</h4>
                            <p style="color: var(--text-secondary);">Jl. Merdeka No. 45, Jakarta</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="pt-6">
                        <h4 class="font-semibold text-lg mb-4" style="color: var(--text-primary);">Ikuti Kami</h4>
                        <div class="flex gap-4">
                            <a href="https://facebook.com" target="_blank"
                                class="social-icon w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white hover:shadow-lg">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="https://instagram.com" target="_blank"
                                class="social-icon w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center text-white hover:shadow-lg">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank"
                                class="social-icon w-12 h-12 bg-sky-500 rounded-xl flex items-center justify-center text-white hover:shadow-lg">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="social-icon w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center text-white hover:shadow-lg">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-container shadow-2xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666426996787!2d106.82493931476889!3d-6.175392395527205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const body = document.body;
        
        // Check for saved theme preference or default to light
        const currentTheme = localStorage.getItem('theme') || 'light';
        body.setAttribute('data-theme', currentTheme);
        
        // Update theme icon based on current theme
        if (currentTheme === 'dark') {
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        } else {
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }
        
        // Toggle theme
        themeToggle.addEventListener('click', () => {
            const theme = body.getAttribute('data-theme');
            
            if (theme === 'light') {
                body.setAttribute('data-theme', 'dark');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
                localStorage.setItem('theme', 'dark');
            } else {
                body.setAttribute('data-theme', 'light');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
                localStorage.setItem('theme', 'light');
            }
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');

            // Animate menu toggle
            const spans = menuToggle.querySelectorAll('span');
            if (mobileMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translateY(9px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translateY(-9px)';
            } else {
                spans[0].style.transform = 'rotate(0) translateY(0)';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'rotate(0) translateY(0)';
            }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');

                // Reset menu toggle
                const spans = menuToggle.querySelectorAll('span');
                spans[0].style.transform = 'rotate(0) translateY(0)';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'rotate(0) translateY(0)';
            });
        });

        // Smooth scroll enhancement
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card-hover, .animate-slideInLeft, .animate-slideInRight').forEach((el) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });

        // Navbar scroll effect with transparency
        const navbar = document.getElementById('navbar');
        const scrollProgress = document.getElementById('scrollProgress');
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercentage = (currentScroll / scrollHeight) * 100;

            // Update scroll progress bar
            scrollProgress.style.width = `${scrollPercentage}%`;

            // Navbar transparency effect
            if (currentScroll > 50) {
                navbar.classList.add('shadow-xl');
                navbar.style.backgroundColor = 'var(--navbar-bg)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.classList.remove('shadow-xl');
                navbar.style.backgroundColor = 'var(--navbar-bg)';
                navbar.style.backdropFilter = 'blur(5px)';
            }

            // Show/hide back to top button
            if (currentScroll > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        // Back to top functionality
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>
</html>