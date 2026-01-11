@extends('website.layout.auth')

@section('title', 'Reset Password - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-rotate-right"></i>
            </div>
            <h1>Reset Password</h1>
            <p>Create a new password</p>
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

        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                        value="{{ old('email', $request->email) }}"
                        required 
                        autofocus
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock input-icon"></i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Enter new password"
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

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-check"></i>
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection
