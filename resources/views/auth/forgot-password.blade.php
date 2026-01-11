@extends('website.layout.auth')

@section('title', 'Forgot Password - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-key"></i>
            </div>
            <h1>Forgot Password?</h1>
            <p>We'll send you reset instructions</p>
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

        <form method="POST" action="{{ route('password.email') }}">
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

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-paper-plane"></i>
                Send Reset Link
            </button>
        </form>

        <div class="auth-divider">
            <span>or</span>
        </div>

        <div class="auth-footer">
            <p>Remember your password? <a href="{{ route('login') }}">Back to Login</a></p>
        </div>
    </div>
</div>
@endsection
