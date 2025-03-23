<footer class="dock dock-xs">
    <a href="/" wire:navigate>
        @if (request()->path() === "/")
            <img class="h-6" src="/icons/home.svg" alt="Home" />
        @else
            <img class="h-6" src="/icons/home-outline.svg" alt="Home" />
        @endif
    </a>
    @if (Auth::user()?->isDealer())
        <a href="/deal-overview" wire:navigate>
            @if (request()->is("*deals-overview"))
                <img class="h-6" src="/icons/deals-overview.svg" alt="Deals overview" />
            @else
                <img class="h-6" src="/icons/deals-overview-outline.svg" alt="Deals overview" />
            @endif
        </a>
    @else
        <a href="/top-deals" wire:navigate>
            @if (request()->is("*top-deals"))
                <img class="h-8" src="/icons/top-deals.svg" alt="Top deals" />
            @else
                <img class="h-8" src="/icons/top-deals-outline.svg" alt="Top deals" />
            @endif
        </a>
        <a href="/map" wire:navigate>
            @if (request()->is("*map"))
                <img class="h-6" src="/icons/map.svg" alt="Map" />
            @else
                <img class="h-6" src="/icons/map-outline.svg" alt="Map" />
            @endif
        </a>
    @endif
</footer>
