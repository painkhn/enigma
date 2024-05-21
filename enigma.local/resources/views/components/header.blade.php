<header class="bg-light-grey w-full h-auto shadow-xl mb-10">
    <div class="max-w-6xl mx-auto my-0 min-h-20 flex justify-between items-center">
        <div class="logo">
            <a href="{{ route('main') }}">
                <img src="{{ asset('/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="login-btn">
            <a href="{{ route('login') }}" class="flex font-bold items-center">
                <img src="img/login-icon.svg" alt="" class="mr-1">
                ВХОД
                
            </a>
        </div>
    </div>
</header>