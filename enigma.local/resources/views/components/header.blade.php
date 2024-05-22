<header class="bg-light-grey w-full h-auto shadow-xl mb-10">
    <div class="max-w-6xl mx-auto my-0 min-h-20 flex justify-between items-center">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/img/logo.png') }}" alt="">
            </a>
        </div>
        @auth
        <div class="login-btn">
            <a href="{{ route('profile') }}" class="flex font-bold items-center">
                {{ Auth::user()->name }}
            </a>
        </div>
        @else
        <div class="login-btn">
            <a href="{{ route('login') }}" class="flex font-bold items-center">
                <img src="img/login-icon.svg" alt="" class="mr-1">
                ВХОД
            </a>
        </div>
        @endauth
    </div>
</header>