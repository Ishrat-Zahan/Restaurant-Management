@extends('website.layout.auth')

@section('title', 'Login - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-utensils"></i>
            </div>
            <h1>Welcome Back!</h1>
            <p>Sign in to your account</p>
        </div>
    </div>
    
    <div class="auth-body">
        @if (session('status'))
            <div class="success-message">
                <i class="fa-solid fa-check-circle"></i>
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                <i class="fa-solid fa-exclamation-circle"></i>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-envelope input-icon"></i>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="Enter your email"
                        value="{{ old('email') }}"
                        required 
                        autofocus
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock input-icon"></i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Enter your password"
                        required
                    >
                    <button type="button" class="password-toggle">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot password?</a>
                @endif
            </div>

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-right-to-bracket"></i>
                Sign In
            </button>
        </form>

        <div class="auth-divider">
            <span>or</span>
        </div>

        <div class="auth-footer">
            <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
        </div>
    </div>
</div>
@endsection
