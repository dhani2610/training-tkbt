<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator | Training Confined Space</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: #06241b;
            background-image: 
                radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, rgba(5, 150, 105, 0.12) 0%, transparent 40%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            width: 100%;
            max-width: 440px;
            border-radius: 16px;
            padding: 40px 32px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .brand-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 52px;
            height: 52px;
            background: #10b981;
            color: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin: 0 auto 14px;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35);
        }

        .brand-header h1 {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .brand-header p {
            font-size: 0.8rem;
            color: #64748b;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 0.8rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 11px 14px 11px 40px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.9rem;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
        }

        .btn-login {
            width: 100%;
            background: #064e3b;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 0.92rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 8px;
        }

        .btn-login:hover {
            background: #047857;
            transform: translateY(-1px);
        }

        .demo-box {
            background: #ecfdf5;
            border: 1px dashed #a7f3d0;
            border-radius: 8px;
            padding: 12px 14px;
            margin-top: 24px;
            font-size: 0.78rem;
            color: #065f46;
        }

        .demo-box strong {
            color: #0f172a;
        }

        .btn-fill-demo {
            display: inline-block;
            margin-top: 6px;
            background: #10b981;
            color: #ffffff;
            border: none;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.72rem;
            font-weight: 700;
            cursor: pointer;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 0.8rem;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="brand-header">
            <div class="brand-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h1>ADMIN CONFINED SPACE</h1>
            <p>Silakan masuk menggunakan akun resmi administrator</p>
        </div>

        @if($errors->any())
            <div class="alert-error">
                <i class="bi bi-exclamation-circle-fill"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Email Administrator *</label>
                <div class="input-group">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', 'admin@confinedspace.com') }}" required placeholder="admin@confinedspace.com">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Password *</label>
                <div class="input-group">
                    <i class="bi bi-key"></i>
                    <input type="password" name="password" id="password" class="form-control" value="admin123" required placeholder="Masukkan password">
                </div>
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; font-size: 0.8rem;">
                <label style="display: flex; align-items: center; gap: 6px; color: #64748b; cursor: pointer;">
                    <input type="checkbox" name="remember"> Ingat saya
                </label>
            </div>

            <button type="submit" class="btn-login">
                <i class="bi bi-box-arrow-in-right"></i> Masuk ke Panel Kontrol
            </button>
        </form>

        <div class="demo-box">
            <div><strong>Akun Default:</strong></div>
            <div style="margin-top: 2px;">Email: <code>admin@confinedspace.com</code></div>
            <div>Password: <code>admin123</code></div>
            <button type="button" class="btn-fill-demo" onclick="fillDemo()">
                <i class="bi bi-magic"></i> Isi Otomatis
            </button>
        </div>
    </div>

    <script>
        function fillDemo() {
            document.getElementById('email').value = 'admin@confinedspace.com';
            document.getElementById('password').value = 'admin123';
        }
    </script>
</body>
</html>
