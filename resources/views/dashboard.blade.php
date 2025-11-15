<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- Theme Toggle -->
            <div class="theme-toggle" id="themeToggle">
                <div class="theme-toggle-slider">
                    <i class="fas fa-sun theme-toggle-icon" id="themeIcon"></i>
                </div>
            </div>
        </div>
    </x-slot>

    <style>
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
        }

        body {
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            background-color: var(--card-bg);
            border-color: var(--border-color);
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px var(--shadow);
        }

        .stat-card {
            background: linear-gradient(135deg, var(--card-bg) 0%, var(--bg-tertiary) 100%);
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .stat-content h3 {
            color: var(--text-secondary);
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .stat-content .value {
            color: var(--text-primary);
            font-size: 1.75rem;
            font-weight: 700;
        }

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

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideUp {
            animation: slideUp 0.6s ease-out forwards;
        }
    </style>

    <div class="py-12" style="background-color: var(--bg-secondary);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="mb-8 animate-slideUp" style="animation-delay: 0s;">
                <h3 class="text-3xl font-bold gradient-text mb-2">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p style="color: var(--text-secondary);">Kelola akun koperasi Anda dengan mudah</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="stat-card animate-slideUp" style="animation-delay: 0.1s;">
                    <div>
                        <h3>Saldo Simpanan</h3>
                        <div class="value">Rp 5.000.000</div>
                    </div>
                    <div class="stat-icon"
                        style="background: linear-gradient(135deg, var(--accent), var(--accent-dark));">
                        <i class="fas fa-wallet"></i>
                    </div>
                </div>

                <div class="stat-card animate-slideUp" style="animation-delay: 0.2s;">
                    <div>
                        <h3>Pinjaman Aktif</h3>
                        <div class="value">Rp 10.000.000</div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </div>

                <div class="stat-card animate-slideUp" style="animation-delay: 0.3s;">
                    <div>
                        <h3>Bunga Diterima</h3>
                        <div class="value">Rp 250.000</div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>

                <div class="stat-card animate-slideUp" style="animation-delay: 0.4s;">
                    <div>
                        <h3>Transaksi Bulan Ini</h3>
                        <div class="value">12</div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #ec4899, #be185d);">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Recent Transactions -->
                <div class="card-hover rounded-2xl shadow-lg overflow-hidden border animate-slideUp"
                    style="animation-delay: 0.5s;">
                    <div
                        style="background: linear-gradient(135deg, var(--accent), var(--accent-dark)); padding: 1.5rem;">
                        <h4 class="text-xl font-bold text-white flex items-center gap-2">
                            <i class="fas fa-history"></i> Transaksi Terbaru
                        </h4>
                    </div>
                    <div style="padding: 1.5rem;">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between pb-4"
                                style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div
                                        style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), var(--accent-dark)); display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class="fas fa-arrow-down text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold" style="color: var(--text-primary);">Setoran Simpanan
                                        </p>
                                        <p style="font-size: 0.875rem; color: var(--text-tertiary);">15 Nov 2025</p>
                                    </div>
                                </div>
                                <p class="font-bold" style="color: var(--accent);">+ Rp 1.000.000</p>
                            </div>

                            <div class="flex items-center justify-between pb-4"
                                style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div
                                        style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #3b82f6, #1d4ed8); display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class="fas fa-arrow-up text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold" style="color: var(--text-primary);">Pembayaran Pinjaman
                                        </p>
                                        <p style="font-size: 0.875rem; color: var(--text-tertiary);">10 Nov 2025</p>
                                    </div>
                                </div>
                                <p class="font-bold" style="color: #ef4444;">- Rp 500.000</p>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), var(--accent-dark)); display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class="fas fa-gift text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold" style="color: var(--text-primary);">Bunga Simpanan</p>
                                        <p style="font-size: 0.875rem; color: var(--text-tertiary);">05 Nov 2025</p>
                                    </div>
                                </div>
                                <p class="font-bold" style="color: var(--accent);">+ Rp 25.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card-hover rounded-2xl shadow-lg overflow-hidden border animate-slideUp"
                    style="animation-delay: 0.6s;">
                    <div style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); padding: 1.5rem;">
                        <h4 class="text-xl font-bold text-white flex items-center gap-2">
                            <i class="fas fa-bolt"></i> Aksi Cepat
                        </h4>
                    </div>
                    <div style="padding: 1.5rem;">
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="p-4 rounded-xl text-center hover:shadow-lg transition-all"
                                style="background: linear-gradient(135deg, var(--accent), var(--accent-dark)); color: white; text-decoration: none;">
                                <i class="fas fa-plus text-2xl mb-2 block"></i>
                                <p class="font-semibold text-sm">Setoran</p>
                            </a>
                            <a href="#" class="p-4 rounded-xl text-center hover:shadow-lg transition-all"
                                style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; text-decoration: none;">
                                <i class="fas fa-minus text-2xl mb-2 block"></i>
                                <p class="font-semibold text-sm">Penarikan</p>
                            </a>
                            <a href="#" class="p-4 rounded-xl text-center hover:shadow-lg transition-all"
                                style="background: linear-gradient(135deg, #8b5cf6, #6d28d9); color: white; text-decoration: none;">
                                <i class="fas fa-hand-holding-usd text-2xl mb-2 block"></i>
                                <p class="font-semibold text-sm">Pinjam</p>
                            </a>
                            <a href="#" class="p-4 rounded-xl text-center hover:shadow-lg transition-all"
                                style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; text-decoration: none;">
                                <i class="fas fa-file-invoice-dollar text-2xl mb-2 block"></i>
                                <p class="font-semibold text-sm">Laporan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcement Section -->
            <div class="mt-8 card-hover rounded-2xl shadow-lg p-6 border animate-slideUp"
                style="animation-delay: 0.7s;">
                <h4 class="text-xl font-bold mb-4 flex items-center gap-2" style="color: var(--text-primary);">
                    <i class="fas fa-bullhorn" style="color: var(--accent);"></i> Pengumuman
                </h4>
                <div
                    style="background: linear-gradient(135deg, var(--bg-tertiary), var(--bg-secondary)); padding: 1rem; border-radius: 0.75rem; border-left: 4px solid var(--accent);">
                    <p style="color: var(--text-primary); font-weight: 500;">Rapat Anggota Tahunan</p>
                    <p style="color: var(--text-secondary); font-size: 0.875rem; margin-top: 0.5rem;">
                        Rapat Anggota Tahunan akan diselenggarakan pada tanggal 25 November 2025 pukul 10:00 WIB di
                        Kantor Koperasi.
                    </p>
                </div>
            </div>
        </div>
    </div>

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
    </script>
</x-app-layout>