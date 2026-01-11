@extends('website.layout.auth')

@section('title', 'Register - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <h1>Join Us Today!</h1>
            <p>Create your account</p>
        </div>
    </div>
    
    <div class="auth-body">
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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-user input-icon"></i>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control" 
                        placeholder="Enter your name"
                        value="{{ old('name') }}"
                        required 
                        autofocus
                    >
                </div>
            </div>

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
                        placeholder="Create password"
                        required
                    >
                    <button type="button" class="password-toggle">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock input-icon"></i>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="form-control" 
                        placeholder="Confirm password"
                        required
                    >
                    <button type="button" class="password-toggle">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="terms-group">
                <label class="remember-me">
                    <input type="checkbox" name="terms" required>
                    <span>I agree to the <a href="#">Terms & Conditions</a></span>
                </label>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-user-plus"></i>
                Create Account
            </button>
        </form>

        <div class="auth-divider">
            <span>or</span>
        </div>

        <div class="auth-footer">
            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
        </div>
    </div>
</div>
@endsection
