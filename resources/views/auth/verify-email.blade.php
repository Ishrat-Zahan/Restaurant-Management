@extends('website.layout.auth')

@section('title', 'Verify Email - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-envelope-circle-check"></i>
            </div>
            <h1>Verify Email</h1>
            <p>Check your inbox for verification link</p>
        </div>
    </div>
    
    <div class="auth-body">
        <p style="color: #666; font-size: 13px; line-height: 1.5; margin-bottom: 15px; text-align: center;">
            Thanks for signing up! Please verify your email address by clicking the link we sent you.
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="success-message">
                <i class="fa-solid fa-check-circle"></i>
                A new verification link has been sent!
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom: 10px;">
            @csrf
            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-paper-plane"></i>
                Resend Verification Email
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-submit" style="background: #fff; color: #666; border: 2px solid #ddd; box-shadow: none;">
                <i class="fa-solid fa-right-from-bracket"></i>
                Log Out
            </button>
        </form>
    </div>
</div>
@endsection
