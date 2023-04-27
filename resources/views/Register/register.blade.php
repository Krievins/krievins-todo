@extends('layouts.main', [
    'stylesheet' => mix('css/login/index.css'),
    'title' => 'Register - Create New User',
    // 'pagename' => 'Sākums'
])

@section('content')
    <div class="login">
        <div class="login__box">
            <h1 class="login__box--heading">Create New Account</h1>
            <p class="login__box--undertext">Enter needed information</p>
            <form class="login__box__form" method="POST" action="/register">
                @csrf
                <label class="login__box__form--label"  for="name">Name</label>
                <input class="login__box__form--input" type="text" name="name" id="name">
                <label class="login__box__form--label" for="surname">Surname</label>
                <input class="login__box__form--input" type="text" name="surname" id="surname">
                <label class="login__box__form--label" for="email">E-mail</label>
                <input class="login__box__form--input" type="email" name="email" id="email">
                <label class="login__box__form--label" for="password">Password</label>
                <input class="login__box__form--input" type="password" name="password" id="password">
                <button class="login__box__form--button" type="submit">Ielogoties</button>
            </form>
        </div>
    </div>
@endsection