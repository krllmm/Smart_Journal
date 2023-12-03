<div class="content-container">
    <div class="indicators">
        <button wire:click="sortByRating" id="indicator">
            By rating
        </button>
        <button wire:click="Latest" id="indicator">
            {{-- последние получившие статус Done --}}
            Latest
        </button>
        <button wire:click="Oldest" id="indicator">
            Oldest
        </button>
    </div>

    @foreach ($articles as $article)
        <div class="article_card">
            <div class="card_avatar">
                <img src="{{ $article->author->profile_picture }}" alt="image not available">
            </div>
            <div class="card_info">
                <div id="username">{{ $article->author->name }} {{ $article->author->surname }}</div>
                <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                <div class="options">
                    <div id="date">{{ $article->created_at->format('d.m.Y') }} <span>&#x2022;</span>
                                {{ $article->category->category }} <span>&#x2022;</span>
                                {{ $article->rating }} points</div>
                    <a href="{{ route('article.edit', $article->id) }}"><div>Expand</div></a>
                </div>
            </div>
        </div>
    @endforeach

    {{ $articles->links('vendor.pagination.custom-pagination') }}
</div>
