@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="m24_language_box m24_cover">
                    <h1>Login / Sign In</h1>
                    <p>for unlimited music streaming & a personalised experience</p>
                </div>
                <div class="login_form_wrapper">

                    <div class="icon_form comments_form">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="icon_form comments_form">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="login_remember_box">
                        <label class="control control--checkbox">keep me signed in
                            <input type="checkbox">
                            <span class="control__indicator"></span>
                        </label>
                        <a href="#" class="forget_password">
                            Forgot Password ?
                        </a>
                    </div>

                </div>
                <div class="lang_apply_btn_wrapper m24_cover">
                    <div class="lang_apply_btn">

                        <button type="submit">
                            {{ __('Login') }}
                        </button>

                    </div>
                    <div class="cancel_wrapper">
                        <a href="{{route('index')}}">cancel</a>
                    </div>
                    <div class="dont_have_account m24_cover">
                        <p>Don’t have an acount ? <a href="{{route('register')}}">register here</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection