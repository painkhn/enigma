@extends('layouts.app')

@section('content')
<div class="admin w-full h-main flex items-center justify-center">
    <div class="max-w-5xl w-full flex justify-between flex-wrap">
        <div class="search max-w-lg w-full justify-self-center place-self-center grow">
            <h2 class="font-bold text-2xl mb-10">ПАНЕЛЬ АДМИНИСТРАТОРА</h2>
            <form class="flex items-center" method="POST" action="{{ route('userSearch') }}">
                @csrf
                <input class="border-0 border-b-2 max-w-sm w-full h-10 px-4" type="search" name="user_prefix" id="">
                <button class="w-7 h-7">
                    <img class="w-7 ml-2" src="../img/search-icon.svg" alt="">
                </button>
            </form>
        </div>
        @if ($user)
            <div>
                <div class="user flex mb-5">
                    <div class="avatar mr-8">
                        <img src="{{ asset('img/avatar1.png') }}" alt="" class="border-2 border-black rounded-md">
                    </div>
                    <div class="userinfo color-primary font-bold">
                        <div class="name text-xl mb-5">
                            @<span>{{ $user->name }}</span>
                        </div>
                        <div class="age text-lg mb-3">
                            <span>Возраст:</span>
                        </div>
                        <div class="mail text-lg mb-5">
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="themesby">
                            <a href="#!">темы от</a>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    @if ($user->is_ban == 1)
                        <a href="{{ route('BanUser', ['id' => $user->id]) }}">
                            <input class="max-w-32 w-full h-12 border border-black text-black font-bold text-lg"
                                type="submit" value="Разбан">
                        </a>
                    @else
                        <a href="{{ route('BanUser', ['id' => $user->id]) }}">
                            <input class="max-w-32 w-full h-12 border border-black text-black font-bold text-lg"
                                type="submit" value="Бан">
                        </a>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
@endsection