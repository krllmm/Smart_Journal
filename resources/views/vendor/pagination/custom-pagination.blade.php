<style>
    span{
        color: #000;
        font-size: 1rem;
    }
    #next, #prev{
        color: #000;
        padding: 6px 12px;
        font-size: 1rem;
        background-color: #555a60;
        border: 1px solid #363636;
        border-radius: .5rem;
        cursor: pointer;
    }
</style>

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <span>
                @if ($paginator->onFirstPage())
                    <span>Назад</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" id="prev">Назад</button>
                @endif
            </span>

            <span>
                @if ($paginator->onLastPage())
                    <span>Вперед</span>
                @else
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" id="next">Вперед</button>
                @endif
            </span>
        </nav>
    @endif
</div>
