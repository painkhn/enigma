@extends('layouts.app')

@section('content')

    <div class="color-primary text-center font-bold text-2xl mb-10">
        <h1>Enigma - лучший игровой форум</h1>
    </div>
    <div class="main-content max-w-6xl mx-auto my-0 flex justify-between mb-32">
        <!-- контент блок -->
        <div class="min-h-825 w-full bg-light-grey p-8 pt-5">
            <div class="title color-primary mb-5 font-bold text-xl">
                <h2>Все категории</h2>
            </div>
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
    </div>

@endsection