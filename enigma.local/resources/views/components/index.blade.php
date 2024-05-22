@extends('layouts.app')
@section('title')
    Главная
@endsection

@section('content')
<!-- тайтл -->
    <div class="color-primary text-center font-bold text-2xl mb-10">
        <h1>Enigma - лучший игровой форум</h1>
    </div>
    <div class="main-content max-w-6xl mx-auto my-0 flex justify-between mb-32">
        <!-- категории -->
        <div class="category bg-light-grey p-5">
            <div class="title color-primary font-bold text-lg text-center mb-5">
                <h2>КАТЕГОРИИ</h2>
            </div>
            <div class="list">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ $category->link }}" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- контент блок -->
        <div class="content w-full bg-light-grey">
            <div class="list">
                <ul>
                    <li>
                        @foreach ($themes as $theme)
                            <a href="{{ $theme->link }}" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                {{ $theme->name }}
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection