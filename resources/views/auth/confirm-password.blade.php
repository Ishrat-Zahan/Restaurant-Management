@extends('website.layout.auth')

@section('title', 'Confirm Password - IJ Restaurant')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h1>Confirm Password</h1>
            <p>Please confirm to continue</p>
        </div>
    </div>
    
    <div class="auth-body">
        <p style="color: #666; font-size: 13px; line-height: 1.5; margin-bottom: 15px; text-align: center;">
            This is a secure area. Please confirm your password before continuing.
        </p>

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

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

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

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-check"></i>
                Confirm
            </button>
        </form>
    </div>
</div>
@endsection
