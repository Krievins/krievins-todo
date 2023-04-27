@extends('layouts.main', [
    'stylesheet' => mix('css/login/index.css'),
    'title' => 'Login - Existing User',
    // 'pagename' => 'Sākums'
])

@section('content')
    <div class="login">
        <div class="login__box">
            <h1 class="login__box--heading">Login To Your Account</h1>
            <p class="login__box--undertext">Enter e-mail un password</p>
            <form class="login__box__form" method="POST" action="/">
                @csrf
                {{-- E-mail --}}
                <label class="login__box__form--label" for="email">E-mail</label>
                <input class="login__box__form--input" type="email" name="email" id="email" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                {{-- Password --}}
                <label class="login__box__form--label" for="password">Password</label>
                <input class="login__box__form--input" type="password" name="password" id="password" required>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
                {{-- Button --}}
                <p class="login__box__text">Don't have a account?</p>
                <a class="login__box__link" href="{{ url('/register') }}" class="login__box--link">Register</a>
                <button  class="login__box__form--button" type="submit">Ielogoties</button>
            </form>
        </div>
    </div>
@endsection