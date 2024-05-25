@extends('layouts.app')

@section('content')
<div class="color-primary text-center font-bold text-2xl mb-10">
    <h1>Enigma - лучший игровой форум</h1>
</div>
<div class="profile max-w-6xl w-full bg-light-grey p-5 mx-auto my-0 mb-32 min-h-825 p-8">
    <div class="profile-info flex mb-8 w-full">
        <div class="avatar mr-8 w-full max-w-52">
            <img src="../img/avatar1.png" alt="" class="border-2 border-black rounded-md">
        </div>
        <div class="flex justify-between w-full">
            <div class="userinfo color-primary font-bold">
                <div class="name text-xl mb-5">
                    @<span>{{ $user->name }}</span>
                </div>
                @if ($user->age == NULL)
                <div class="age text-lg mb-3">
                    <span>Возраст: не указан</span>
                </div>
                @else
                <div class="age text-lg mb-3">
                    <span>Возраст: {{ $user->age }}</span>
                </div>
                @endif
                <div class="tglink text-lg mb-3">
                    <a href="#!">Telegram</a>
                </div>
                <div class="mail text-lg mb-5">
                    <span>{{ $user->email }}</span>
                </div>
                @if ($user->id == Auth::user()->id)
                    <div class="create_theme">
                        <a href="{{ route('theme_create') }}">Создать тему</a>
                    </div>
                @else
                    <div class="themesby">
                        <a href="#!">Темы от {{ $user->name }}</a>
                    </div>
                @endif
            </div>
            <div class="ml-auto">
                @if ($user->id == Auth::user()->id)
                    <a class="font-bold flex content-center" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <img class="mr-1" src="{{ asset('img/logout-icon.svg') }}" alt="">
                        {{ __('Выйти') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                @endif
            </div>
        </div>
    </div>
    <hr class="w-full h-1 bg-primary mb-8">
    <div class="comments color-primary font-bold">
        <div class="title color-primary font-bold text-xl mb-8">
            <h2>КОММЕНТАРИИ</h2>
        </div>
        <div class="comment mb-5">
            <div class="name text-lg mb-2">
                <span>@kotboris</span>
            </div>
            <div class="com-text text-lg">
                <span>кот красавчик, работали недавно, вообще отличный пацан</span>
            </div>
        </div>
        <div class="comment mb-5">
            <div class="name text-lg mb-2">
                <span>@utkadima</span>
            </div>
            <div class="com-text text-lg">
                <span>это кот придумал арбузный дизайн?</span>
            </div>
        </div>
        <div class="comment mb-5">
            <div class="name text-lg mb-2">
                <span>@gusenicasasha</span>
            </div>
            <div class="com-text text-lg">
                <span>на моей странице есть тема с халявой!!!! переходи и забирай!!!</span>
            </div>
        </div>
    </div>
</div>
@endsection