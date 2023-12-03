<style>
    nav{
        display: flex;
        flex-direction: row;
        font-size: 1.5rem;
    }
    .next_link{
        margin-left: auto;
    }
    .next_link a{
        color: white;
        text-decoration: none;
    }
    .prev_link a{
        color: white;
        text-decoration: none;
    }
    .disabled{
        opacity: 0.6;
    }
</style>

@if ($paginator->hasPages())
    <nav>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="disabled prev_link"><span>@lang('pagination.previous')</span></div>
        @else
            <div class="prev_link"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></div>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="next_link"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></div>
        @else
            <div class="disabled next_link"><span>@lang('pagination.next')</span></div>
        @endif
    </nav>
@endif
