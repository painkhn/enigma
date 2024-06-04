@extends('layouts.app')

@section('content')
<div class="color-primary text-center font-bold text-2xl mb-10">
    <h1>Enigma - лучший игровой форум</h1>
</div>
<div class="profile max-w-6xl w-full bg-light-grey p-8 mx-auto my-0 mb-32 min-h-825">
    <div class="profile-info flex mb-8 w-full">
        <!-- аватарка -->
        <div class="mr-5">
            @if (Auth::user()->avatar)
                <img src="{{ asset(Auth::user()->avatar) }}" alt="User Avatar" class="border-2 border-black rounded-md max-w-52 h-52">
            @else
                <img src="{{ asset('img/avatar1.png') }}" alt="Default Avatar">
            @endif
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
                <!-- добавление аватарки -->
                <form id="avatar-file-form" method="POST" enctype="multipart/form-data" action="{{ route('NewAvatar') }}" class="flex flex-col">
                    @csrf
                    @method('PATCH')

                    <label class="flex items-center justify-center border-2 px-3 py-2 border-primary cursor-pointer mb-5 rounded-md hovered" for="avatar_change">
                        <input class="hidden" type="file" name="avatar_change" id="avatar_change">
                        <span class="text-base font-bold color-primary transition-2s">Сменить аватарку</span>
                    </label>
                </form>
                @if ($user->id == Auth::user()->id)
                    <div class="create_theme">
                        <a href="{{ route('theme_create') }}">Создать тему</a>
                    </div>
                @else
                    <div class="themesby">
                        <a href="{{ route('user_themes', $user->id, Auth::user()->id) }}">Темы от {{ $user->name }}</a>
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
    <div class="list big-line">
        <ul>
            @foreach ($themes as $theme)
                <a href="{{ route('theme', ['theme_id' => $theme->id]) }}" class="flex items-center font-bold mb-5 font-lg">
                    <div class="line"></div>
                    {{ $theme->name }}
                </a>
            @endforeach
        </ul>
    </div>
</div>

<script>
        document.getElementById('avatar_change').addEventListener('change', function() {
            document.getElementById('avatar-file-form').submit();
        });
    </script>
@endsection