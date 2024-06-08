@extends('layouts.app')

@section('content')

<div class="color-primary text-center font-bold text-2xl mb-10">
    <h1>Enigma - лучший игровой форум</h1>
</div>
<div class="main-content max-w-6xl mx-auto my-0 flex mb-32">
    <!-- категории -->
    <!-- контент блок -->
    <div class="w-full min-h-825 bg-light-grey p-5 pl-8">
        <div class="list">
            <div class="tag mb-5 text-xs color-primary">
                <a href="{{ route('category_page', ['category' => $category->link]) }}">{{ $category->name }}</a>
            </div>
            <div class="title color-primary font-bold text-lg mb-5">
                <h2>{{ $theme_info->name }}</h2>
            </div>
            <div class="color-primary mb-5 font-bold">
                <p>{{ $theme_info->content }}</p>
            </div>
            <div class="user_name mb-5 color-primary font-bold">
                <a href="{{ route('profile', ['id' => $theme_info->user_id]) }}">{{ $user->name }}</a>
            </div>
            <div class="date mb-5 text-xs color-primary font-bold">
                <p>{{ date('d-m-Y', strtotime($theme_info->created_at)) }}</p>
            </div>
            <hr class="w-full h-1 bg-primary mb-5">
            <div class="comment mb-5">
                <form method="POST" action="{{ route('newComment', ['theme_id' => $theme_info->id]) }}">
                    @csrf
                    <input name="comment" class="w-full h-14 px-4 border-2 bg-transparent color-primary mb-5" type="text" placeholder="Поделитесь своим мнением">
                    <div class="submit">
                        <input type="submit" value="Отправить" class="color-primary font-bold">
                    </div>
                </form>
            </div>
            <div class="comment mb-5">
                @if (isset($comment) > 0)
                    <ul>
                        @foreach ($comment as $comm)
                            <li class="mb-5">
                                <div class="text-xl mb-1 color-primary font-bold">
                                    @<a href="{{ route('profile', ['id' => $comm->user_id]) }}">{{ $comm->user->name }}</a>
                                </div>
                                <div class="com-text text-lg color-primary mb-4">
                                    <span>{{ $comm->comment }}</span>
                                    <p class="text-xs font-normal mt-4">{{ date('d-m-Y', strtotime($comm->created_at)) }}</p>
                                </div>
                                @if ( Auth::user() and $comm->user->id == Auth::user()->id or Auth::user()->is_admin == TRUE)
                                    <div class="delete" class="text-right">
                                        <a href="{{ route('deleteComment', ['comment_id' => $comm->id]) }}">
                                            <input type="button" class="color-primary font-bold" value="Удалить">
                                        </a>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection