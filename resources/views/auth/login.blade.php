<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Koperasi Pramatech</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            scroll-behavior: smooth;
        }
        
        :root {
            --bg-primary: #f0fdf4;
            --bg-secondary: #ffffff;
            --bg-tertiary: #f9fafb;
            --text-primary: #1f2937;
            --text-secondary: #4b5563;
            --text-tertiary: #6b7280;
            --accent: #10b981;
            --accent-dark: #059669;
            --card-bg: #ffffff;
            --border-color: #e5e7eb;
            --shadow: rgba(16, 185, 129, 0.2);
            --input-bg: #f9fafb;
            --input-focus-bg: #ffffff;
            --modal-bg: #ffffff;
            --loading-bg: rgba(255, 255, 255, 0.95);
        }

        [data-theme="dark"] {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-tertiary: #334155;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-tertiary: #94a3b8;
            --accent: #34d399;
            --accent-dark: #10b981;
            --card-bg: #1e293b;
            --border-color: #334155;
            --shadow: rgba(0, 0, 0, 0.3);
            --input-bg: #334155;
            --input-focus-bg: #1e293b;
            --modal-bg: #1e293b;
            --loading-bg: rgba(30, 41, 59, 0.95);
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden; /* Mencegah scrolling */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 50%, var(--bg-primary) 100%);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Decorative Elements */
        .decorative-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            z-index: 0;
            opacity: 0.6;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, var(--accent), var(--accent-dark));
            top: -100px;
            left: -100px;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, var(--accent-dark), var(--accent));
            bottom: -50px;
            right: -50px;
        }

        .circle-3 {
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, #6ee7b7, var(--accent));
            top: 50%;
            right: 10%;
        }

        /* Animasi */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(16, 185, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        @keyframes fadeInScale {
            from { 
                opacity: 0; 
                transform: scale(0.8); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .animate-slideUp {
            animation: slideUp 0.6s ease-out forwards;
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

        /* Form Container */
        .form-container {
            background: var(--card-bg);
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px var(--shadow);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 10;
            overflow: hidden;
        }

        .form-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--accent), var(--accent-dark), var(--accent));
            background-size: 200% 100%;
            animation: gradient 3s ease infinite;
        }

        /* Input Styles */
        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-input {
            width: 92%;
            padding: 0.875rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--input-bg);
            color: var(--text-primary);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
            background-color: var(--input-focus-bg);
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-primary);
            font-size: 0.875rem;
        }

        /* Button Styles */
        .btn-primary {
            display: inline-block;
            padding: 0.875rem 1.5rem;
            border-radius: 0.75rem;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: white;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
            box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
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

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.4);
        }

        /* Checkbox Styles */
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-checkbox {
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 0.375rem;
            border: 2px solid var(--border-color);
            background-color: var(--input-bg);
            transition: all 0.2s ease;
            cursor: pointer;
            position: relative;
        }

        .form-checkbox:checked {
            background-color: var(--accent);
            border-color: var(--accent);
        }

        .form-checkbox:checked::after {
            content: "";
            position: absolute;
            top: 3px;
            left: 6px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        /* Link Styles */
        .form-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 0.875rem;
        }

        .form-link:hover {
            color: var(--accent-dark);
            text-decoration: underline;
        }

        /* Form Footer */
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        /* Theme Toggle */
        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 26px;
            background-color: var(--bg-tertiary);
            border-radius: 26px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: 1px solid var(--border-color);
            z-index: 20;
        }

        .theme-toggle-slider {
            position: absolute;
            top: 3px;
            left: 3px;
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50%;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        [data-theme="dark"] .theme-toggle-slider {
            transform: translateX(24px);
            background-color: #1e293b;
        }

        .theme-toggle-icon {
            font-size: 10px;
            color: var(--accent);
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color: var(--modal-bg);
            border-radius: 1rem;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            transform: scale(0.9);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .modal-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ef4444, #f87171);
        }

        .modal-overlay.active .modal-content {
            transform: scale(1);
        }

        .modal-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            background-color: #fee2e2;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .modal-icon i {
            color: #ef4444;
            font-size: 1.75rem;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .modal-body {
            margin-bottom: 2rem;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
        }

        .modal-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 0.875rem;
        }

        .modal-btn-primary {
            background-color: #ef4444;
            color: white;
            border: none;
        }

        .modal-btn-primary:hover {
            background-color: #dc2626;
        }

        /* Loading Overlay - Enhanced */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: var(--loading-bg);
            border-radius: 1.5rem;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
            animation: fadeInScale 0.5s ease-out;
        }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(16, 185, 129, 0.2);
            border-top-color: var(--accent);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .loading-spinner::after {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 3px solid transparent;
            border-top-color: var(--accent-dark);
            border-radius: 50%;
            animation: spin 0.8s linear infinite reverse;
        }

        .loading-text {
            color: var(--text-primary);
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .loading-subtext {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background-color: var(--border-color);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--accent), var(--accent-dark));
            border-radius: 3px;
            width: 0%;
            transition: width 0.3s ease;
        }

        .success-icon {
            width: 50px;
            height: 50px;
            background-color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeIn 0.5s ease-out 1.5s forwards;
        }

        .success-icon i {
            color: white;
            font-size: 1.5rem;
            animation: checkmark 0.5s ease-out 1.7s forwards;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .form-container {
                padding: 2rem;
            }
            
            .form-footer {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
            
            .loading-container {
                padding: 2rem;
            }
            
            .theme-toggle {
                top: 15px;
                right: 15px;
                width: 44px;
                height: 22px;
            }
            
            .theme-toggle-slider {
                width: 18px;
                height: 18px;
                top: 2px;
                left: 2px;
            }
            
            [data-theme="dark"] .theme-toggle-slider {
                transform: translateX(22px);
            }
        }
    </style>
</head>
<body data-theme="light">
    <!-- Theme Toggle -->
    <div class="theme-toggle" id="themeToggle">
        <div class="theme-toggle-slider">
            <i class="fas fa-sun theme-toggle-icon" id="themeIcon"></i>
        </div>
    </div>

    <!-- Decorative Circles -->
    <div class="decorative-circle circle-1 animate-float"></div>
    <div class="decorative-circle circle-2 animate-float" style="animation-delay: 1s;"></div>
    <div class="decorative-circle circle-3 animate-float" style="animation-delay: 2s;"></div>

    <!-- Modal Error -->
    <div id="validationErrorsModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3 class="modal-title">Login Error</h3>
            </div>
            <div class="modal-body">
                <div id="errorMessages" class="text-sm" style="color: var(--text-secondary);"></div>
            </div>
            <div class="modal-footer">
                <button id="closeModal" class="modal-btn modal-btn-primary">OK</button>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay">
        <div class="loading-container">
            <div class="loading-spinner"></div>
            <p class="loading-text">Memproses Login</p>
            <p class="loading-subtext">Mohon tunggu sebentar...</p>
            <div class="progress-bar">
                <div class="progress-fill" id="progressFill"></div>
            </div>
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <div class="form-container animate-slideUp">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold gradient-text mb-2">Koperasi Pramatech</h1>
            <p style="color: var(--text-secondary);">Masuk ke akun Anda</p>
        </div>

        <!-- Form Login -->
        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="input-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="checkbox-group">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <label for="remember_me" class="ml-2 text-sm" style="color: var(--text-secondary);">Ingat saya</label>
            </div>

            <div class="mb-6">
                <button type="submit" class="btn-primary">
                    Masuk
                </button>
            </div>

            <div class="form-footer">
                @if (Route::has('password.request'))
                    <a class="form-link" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="form-link" href="{{ route('register') }}">
                        Daftar akun
                    </a>
                @endif
            </div>
        </form>
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

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const modal = document.getElementById('validationErrorsModal');
            const errorMessages = document.getElementById('errorMessages');
            const closeModalBtn = document.getElementById('closeModal');
            const loadingOverlay = document.getElementById('loadingOverlay');
            const progressFill = document.getElementById('progressFill');

            function showErrorModal(errors) {
                errorMessages.innerHTML = '';
                const list = document.createElement('ul');
                list.className = 'list-disc text-left text-red-500 pl-5 space-y-1';
                errors.forEach(err => {
                    const li = document.createElement('li');
                    li.textContent = err;
                    list.appendChild(li);
                });
                errorMessages.appendChild(list);
                modal.classList.add('active');
            }

            function hideModal() {
                modal.classList.remove('active');
            }

            closeModalBtn.addEventListener('click', hideModal);
            modal.addEventListener('click', e => { 
                if (e.target === modal) hideModal(); 
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                const url = form.getAttribute('action');

                fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (response.redirected) {
                            // Tampilkan loading overlay
                            loadingOverlay.classList.add('active');
                            
                            // Reset progress bar
                            progressFill.style.width = '0%';
                            
                            // Simulasi progress bar yang bergerak secara bertahap
                            let progress = 0;
                            const interval = setInterval(() => {
                                progress += 5;
                                if (progress > 100) {
                                    clearInterval(interval);
                                    return;
                                }
                                progressFill.style.width = progress + '%';
                            }, 100);
                            
                            // Redirect setelah 2.5 detik
                            setTimeout(() => {
                                window.location.href = response.url;
                            }, 2500);
                            return;
                        }
                        if (!response.ok) return response.json().then(data => { throw data; });
                        return response.json();
                    })
                    .catch(error => {
                        if (error.errors) {
                            const messages = Object.values(error.errors).flat();
                            showErrorModal(messages);
                        } else if (error.message) {
                            showErrorModal([error.message]);
                        } else {
                            showErrorModal(['Login gagal. Coba lagi.']);
                        }
                    });
            });
        });
    </script>
</body>
</html>