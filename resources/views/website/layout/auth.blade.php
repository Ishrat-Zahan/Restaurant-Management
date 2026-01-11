<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/assets/images/fav.svg') }}">

    <title>@yield('title', 'IJ Restaurant')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/bootstrap.min.css') }}">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        .auth-container {
            width: 100%;
            max-width: 400px;
        }

        .auth-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .auth-header {
            background: #fff;
            padding: 25px 20px 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .auth-header .logo-icon {
            width: 50px;
            height: 50px;
            background: #DD5903;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .auth-header .logo-icon i {
            font-size: 22px;
            color: #fff;
        }

        .auth-header h1 {
            color: #333;
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }

        .auth-header p {
            color: #888;
            font-size: 13px;
            margin-top: 4px;
            margin-bottom: 0;
        }

        .auth-body {
            padding: 20px 25px 25px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 5px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper .input-icon {
            position: absolute;
            left: 12px;
            color: #888;
            font-size: 14px;
            pointer-events: none;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            height: 42px;
            padding: 0 40px 0 38px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #fff;
        }

        .form-control:focus {
            outline: none;
            border-color: #DD5903;
            box-shadow: 0 0 0 3px rgba(221, 89, 3, 0.08);
        }

        .form-control:focus + .input-icon,
        .input-wrapper:focus-within .input-icon {
            color: #DD5903;
        }

        .form-control::placeholder {
            color: #aaa;
            font-size: 13px;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            padding: 0;
            font-size: 14px;
            z-index: 2;
        }

        .password-toggle:hover {
            color: #DD5903;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            margin: 0;
        }

        .remember-me input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #DD5903;
            cursor: pointer;
        }

        .remember-me span {
            font-size: 13px;
            color: #666;
        }

        .forgot-password {
            color: #DD5903;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
            color: #DD5903;
        }

        .btn-submit {
            width: 100%;
            height: 44px;
            background: #DD5903;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background: #c44d00;
        }

        .auth-divider {
            display: flex;
            align-items: center;
            margin: 18px 0;
        }

        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .auth-divider span {
            padding: 0 12px;
            color: #999;
            font-size: 12px;
        }

        .auth-footer {
            text-align: center;
        }

        .auth-footer p {
            color: #666;
            font-size: 13px;
            margin: 0;
        }

        .auth-footer a {
            color: #DD5903;
            font-weight: 600;
            text-decoration: none;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #666;
            font-size: 13px;
            text-decoration: none;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }

        .back-home:hover {
            color: #DD5903;
        }

        .error-message {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 6px;
            padding: 10px 12px;
            margin-bottom: 14px;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .error-message i {
            color: #dc2626;
            font-size: 14px;
            margin-top: 1px;
        }

        .error-message ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .error-message li {
            color: #b91c1c;
            font-size: 12px;
        }

        .success-message {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 6px;
            padding: 10px 12px;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #166534;
            font-size: 13px;
        }

        .success-message i {
            color: #16a34a;
        }

        .terms-group {
            margin-bottom: 16px;
        }

        .terms-group .remember-me span a {
            color: #DD5903;
            text-decoration: none;
        }

        .terms-group .remember-me span a:hover {
            text-decoration: underline;
        }

        @media (max-height: 650px) {
            .auth-header {
                padding: 18px 20px 12px;
            }
            
            .auth-header .logo-icon {
                width: 42px;
                height: 42px;
                margin-bottom: 8px;
            }
            
            .auth-header .logo-icon i {
                font-size: 18px;
            }
            
            .auth-header h1 {
                font-size: 18px;
            }
            
            .auth-body {
                padding: 15px 20px 20px;
            }
            
            .form-group {
                margin-bottom: 12px;
            }
            
            .form-control {
                height: 38px;
            }
            
            .btn-submit {
                height: 40px;
            }
            
            .auth-divider {
                margin: 14px 0;
            }
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <a href="{{ route('home') }}" class="back-home">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Home
        </a>

        @yield('content')
    </div>

    <script src="{{ asset('website/assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/plugins/bootstrap.min.js') }}"></script>
    
    <script>
        document.querySelectorAll('.password-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
    </script>
    
    @yield('scripts')
</body>

</html>
