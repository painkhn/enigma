@extends('layouts.app')

@section('content')
<div class="color-primary text-center font-bold text-2xl mb-10">
    <h1>Enigma - лучший игровой форум</h1>
</div>
<div class="max-w-6xl w-full p-8 bg-light-grey my-0 mx-auto mb-14">
    <div class="title color-primary font-bold text-xl mb-8">
        <h2>СОЗДАНИЕ / РЕДАКТИРОВАНИЕ ТЕМЫ</h2>
    </div>
    <form method="POST" action="{{ route('NewTheme') }}">
        @csrf
        <div class="mb-1">
            <label class="color-primary font-sm">Название</label>
        </div>
        <div class="mb-5">
            <input type="text" name="themeName" id="" class="w-full h-10 bg-transparent border-t-0 border-l-0 border-r-0 border-b-2 pl-2 color-primary font-sm">
        </div>
        <div class="mb-1">
            <label class="color-primary font-sm">Категория</label>
        </div>
        <div class="mb-5">
            <select name="category" class="w-full h-10 border-2 color-primary font-sm">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-1">
            <label class="color-primary font-sm">Контент</label>
        </div>
        <div class="mb-14">
            <textarea type="text" name="themeContent" id="" class="w-full min-h-60 bg-transparent border-2 pl-2 color-primary font-sm pt-3 pl-3"></textarea>
        </div>
        <div class="submit text-right">
            <input type="submit" value="ОПУБЛИКОВАТЬ" class="color-primary font-bold">
        </div>
    </form>
</div>


w-full bg-transparent border-2 pl-2 color-primary font-sm pt-3 pl-3
@endsection