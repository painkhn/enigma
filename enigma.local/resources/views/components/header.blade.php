<header class="bg-light-grey w-full h-auto shadow-xl mb-10">
    <div class="max-w-6xl mx-auto my-0 min-h-20 grid grid-cols-3 auto-cols-auto">
        <div class="logo place-self-center justify-self-start">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="search w-full justify-self-center place-self-center">
            <form class="flex items-center" method="POST" action="{{ route('search') }}">
                @csrf
                <input class="border-2 w-full h-10 px-4" type="search" name="word" id="">
                <button class="w-7 h-7">
                    <img class="w-7 ml-2" src="{{ asset('img/search-icon.svg') }}" alt="">
                </button>
            </form>
        </div>
        @auth
        <div class="login-btn justify-self-end place-self-center">
            <div class="flex">
                <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="flex font-bold items-center"> {{ Auth::user()->name }} </a>
            </div>
        </div>
        @else
        <div class="login-btn justify-self-end place-self-center">
            <a href="{{ route('login') }}" class="flex font-bold items-center">
                <img src="{{ asset('img/login-icon.svg') }}" alt="" class="mr-1">
                ВХОД
            </a>
        </div>
        @endauth
    </div>
</header>