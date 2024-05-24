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