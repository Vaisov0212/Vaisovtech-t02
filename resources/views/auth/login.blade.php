{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #000;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
            position: relative;
        }

        /* Yulduzlar uchun canvas */
        #stars-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .login-container {
            background: rgba(20, 20, 30, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.5), 0 0 60px rgba(102, 126, 234, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.8s ease-out;
            position: relative;
            z-index: 2;
            backdrop-filter: blur(20px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .login-header {
            background: linear-gradient(135deg, rgba(34, 193, 195, 0.85) 0%, rgba(253, 187, 45, 0.85) 100%);
            padding: 45px 35px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .login-header h1 {
            font-size: 32px;
            margin-bottom: 10px;
            animation: slideDown 0.8s ease-out;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header p {
            font-size: 15px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .login-form {
            padding: 40px 35px;
        }

        .form-group {
            margin-bottom: 25px;
            animation: slideUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .form-group:nth-child(1) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.3s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.4s;
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

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s ease;
            outline: none;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .form-group input:focus {
            border-color: #22c1c3;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(34, 193, 195, 0.15);
        }

        .form-group input:hover {
            border-color: rgba(255, 255, 255, 0.25);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.8);
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #22c1c3;
        }

        .forgot-password {
            color: #5dd9db;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            color: #22c1c3;
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #22c1c3 0%, #fdbb2d 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(34, 193, 195, 0.4);
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(34, 193, 195, 0.5);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .signup-link {
            text-align: center;
            margin-top: 25px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        .signup-link a {
            color: #5dd9db;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #22c1c3;
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                max-width: 100%;
            }

            .login-header {
                padding: 35px 25px;
            }

            .login-form {
                padding: 30px 25px;
            }
        }
    </style>
</head>
<body>
    <canvas id="stars-canvas"></canvas>

    <div class="login-container">
        <div class="login-header">
            <h1>Xush kelibsiz</h1>
            <p>Hisobingizga kiring</p>
        </div>

        <form class="login-form" method="POST" action="{{ route('login') }}">
            <!-- CSRF token Laravel uchun -->
            @csrf

            <div class="form-group">
                <label for="email">Email manzil</label>
                <input type="email" id="email" name="email" required autocomplete="email" placeholder="email@example.com">
            </div>

            <div class="form-group">
                <label for="password">Parol</label>
                <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Parolingizni kiriting">
            </div>

            <div class="remember-forgot">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Eslab qolish</span>
                </label>
                 @if (Route::has('password.request'))
                    <a href="/forgot-password" class="forgot-password"> {{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <button type="submit" class="btn-login">Kirish</button>

            <div class="signup-link">
                Hisobingiz yo'qmi? <a href="/register">Ro'yxatdan o'tish</a>
            </div>
        </form>
    </div>

    <script>
        const canvas = document.getElementById('stars-canvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const stars = [];
        const starCount = 300;
        const maxDistance = 100;

        class Star {
            constructor() {
                // Ekranni sektorlarga bo'lib, har sektordan 1 ta yulduz
                const sector = stars.length;
                const cols = Math.ceil(Math.sqrt(starCount));
                const rows = Math.ceil(starCount / cols);
                const sectorWidth = canvas.width / cols;
                const sectorHeight = canvas.height / rows;
                const col = sector % cols;
                const row = Math.floor(sector / cols);

                // Har sektor ichida random pozitsiya
                this.x = col * sectorWidth + Math.random() * sectorWidth;
                this.y = row * sectorHeight + Math.random() * sectorHeight;

                // Random yo'nalish va tezlik
                this.vx = (Math.random() - 0.5) * 0.4;
                this.vy = (Math.random() - 0.5) * 0.4;
                // Turli o'lchamdagi yulduzlar
                this.radius = Math.random() * 1.5 + 0.5;
                // Yulduzlarning porloqligi
                this.opacity = Math.random() * 0.5 + 0.5;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                // Chegaralardan chiqsa qarama-qarshi tomonga sakrash
                if (this.x < 0) this.x = canvas.width;
                if (this.x > canvas.width) this.x = 0;
                if (this.y < 0) this.y = canvas.height;
                if (this.y > canvas.height) this.y = 0;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.fill();

                // Yulduzlarga halo effekti
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius + 1, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity * 0.2})`;
                ctx.fill();
            }
        }

        // 300 ta yulduz yaratish
        for (let i = 0; i < starCount; i++) {
            stars.push(new Star());
        }

        function connectStars() {
            for (let i = 0; i < stars.length; i++) {
                for (let j = i + 1; j < stars.length; j++) {
                    const dx = stars[i].x - stars[j].x;
                    const dy = stars[i].y - stars[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < maxDistance) {
                        const opacity = 1 - distance / maxDistance;
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(255, 255, 255, ${opacity * 0.3})`;
                        ctx.lineWidth = 0.8;
                        ctx.moveTo(stars[i].x, stars[i].y);
                        ctx.lineTo(stars[j].x, stars[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            stars.forEach(star => {
                star.update();
                star.draw();
            });

            connectStars();

            requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>
</html>
