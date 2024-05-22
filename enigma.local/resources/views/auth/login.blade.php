@extends('layouts.auth')
@section('title')
    Вход
@endsection

@section('content')
        <!-- login block -->
        <div class="w-full h-screen flex content-center">
            <div class="bg-light-grey login-block max-w-md w-full m-auto p-30-20-60">
                <div class="title color-primary font-bold text-lg text-center mb-5">
                    <h1>АВТОРИЗАЦИЯ</h1>
                </div>
                <div class="desc text-center color-primary mb-5">
                    <p>Авторизируйтесь, чтобы пользоваться всеми функциями форума</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-1">
                        <label class="color-primary font-sm">Электронная почта</label>
                    </div>
                    <div class="mb-5">
                        <input name="email" type="email" id="email" required class="w-full h-10 bg-transparent border-t-0 border-l-0 border-r-0 border-b-2 pl-2 color-primary font-sm">
                    </div>
                    <div class="mb-1">
                        <label class="color-primary font-sm">Пароль</label>
                    </div>
                    <div class="mb-5">
                        <input id="password" name="password" type="password" required autocomplete="current-password" class="w-full h-10 bg-transparent border-t-0 border-l-0 border-r-0 border-b-2 pl-2 color-primary font-sm">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="submit text-center mb-3">
                        <input type="submit" value="ВОЙТИ" class="color-primary font-bold">
                    </div>
                    <div class="text-center font-medium mb-5">
                        <a href="{{ route('register') }}">Создать аккаунт</a>
                    </div>
                    <div class="text-center font-medium">
                        <a href="{{ route('index') }}">Вернуться на главную</a>
                    </div>
                </form>
            </div>
        </div>

@endsection