<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <title>ENIGMA</title>
</head>
<body>
    @include('components.header')
    <main>
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
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                Комьюнити
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                Киберспорт
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                Разработка
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                Торговля
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5">
                                <div class="line"></div>
                                Блог
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- контент блок -->
            <div class="content w-full bg-light-grey">
                <div class="list">
                    <ul>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                MAJOR 2024 | НЕОЖИДАННАЯ ПОБЕДА NATUS VINSERE | КАК ЭТО БЫЛО?
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                ESL PRO LEAGUE | ЛУЧШИЕ МОМЕНТЫ ОТБОРНОГО ЭТАПА
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                m0NESY - НОВЫЙ s1mple? | ЛУЧШИЕ МОМЕНТЫ ИЛЬИ В ПОСЛЕДНИХ МАТЧАХ
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                STREAMERS BATTLE | ЛУЧШИЕ МОМЕНТЫ И ХАЙЛАЙТЫ
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                РЕАКЦИЯ ПРО ИГРОКОВ COUNTER-STRIKE 2 НА НОВОЕ ОБНОВЛЕНИЕ
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                ПЕРЕЙДЁТ ЛИ m0NESY В НОВУЮ КОМАНДУ? ОТВЕТ ИЛЬИ
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                NIKO ПОКАЗАЛ СВОИ НОВЫЕ ДЕВАЙСЫ
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center font-bold mb-5 font-lg">
                                <div class="line"></div>
                                НОВЫЕ МОЛОДЫЕ ТАЛАНТЫ ИЗ РОССИИ | ИНТЕРВЬЮ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="bg-light-grey w-full h-auto py-5">
        <div class="footer-content min-h-52 max-w-6xl my-0 mx-auto flex justify-between">
            <div class="logo">
                <a href="../index.html">
                    <img src="../img/logo.png" alt="">
                </a>
            </div>
            <div>
                <ul class="color-primary font-bold text-right">
                    <li class="mb-5">
                        1fotice@gmail.com
                    </li>
                    <li class="mb-5">
                        <a href="#!">
                            ОБРАТНАЯ СВЯЗЬ
                        </a>
                    </li>
                    <li class="mb-5">
                        <a href="#!">
                            ПОПУЛЯРНЫЕ ВОПРОСЫ
                        </a>
                    </li>
                    <li class="mb-5">
                        <a href="#!">
                            РАЗРАБОТЧИК
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>