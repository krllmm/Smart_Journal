<style>
    nav{
        display: flex;
        flex-direction: row;
        font-size: 1.5rem;
    }
    .next{
        margin-left: auto;
    }
    .next a{
        color: white;
        text-decoration: none;
    }
    ul{
        padding: 0;
        margin: 0;
    }
    ul li a{
        line-height: 1.5rem;
    }
    .disabled{
        opacity: 0.6;
    }
</style>

@if ($paginator->hasPages())
    <nav>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="disabled prev" aria-disabled="true"><span>@lang('pagination.previous')</span></div>
        @else
            <div class="prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></div>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></div>
        @else
            <div class="disabled next" aria-disabled="true"><span>@lang('pagination.next')</span></div>
        @endif
    </nav>
@endif
