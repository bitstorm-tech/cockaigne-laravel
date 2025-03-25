<nav id="header" class="border-base-content/25 h-12 border-b" x-data="{ showMenu: false }">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex h-12 items-center justify-between">
            <div class="flex gap-4">
                <a href="/"><img class="h-7" src="/icons/logo-text.svg" alt="Logo" /></a>
                @if (! Auth::user()?->isDealer())
                    <div class="badge badge-neutral self-end text-xs">
                        @if (Auth::user())
                            Pro
                        @else
                            Basic
                        @endif
                    </div>
                @endif
            </div>
            <div class="hidden gap-6 md:flex">
                @if (Auth::user())
                    <a class="menu-item" href="/settings" wire:navigate>{ t("settings", lang) }</a>
                    <a class="menu-item" href="/contact" wire:navigate>Kontaktiere uns</a>
                    <a class="menu-item" href="/logout" wire:navigate>Abmelden</a>
                @else
                    <a class="menu-item" href="/login" wire:navigate>Login</a>
                    <a class="menu-item" href="/signup" wire:navigate>Registrieren</a>
                @endif
            </div>
            <div class="flex select-none md:hidden" @click="showMenu = !showMenu">
                <div class="h-8 w-8 cursor-pointer text-[#69828c]">
                    <span class="sr-only">Open main menu</span>
                    <img x-show="showMenu" src="/icons/close.svg" alt="Close" />
                    <img x-show="!showMenu" src="/icons/menu.svg" alt="Menu" />
                </div>
            </div>
        </div>
    </div>

    <!-- ----------- -->
    <!-- Mobile menu -->
    <!-- ----------- -->
    <div
        class="bg-base-300 absolute top-10 right-2 z-50 rounded-md select-none md:hidden"
        x-transition.duration.100ms
        x-show="showMenu"
        @click.outside="showMenu = false"
    >
        <div class="flex flex-col gap-5 p-6 sm:px-3">
            @if (Auth::user()?->isDealer())
                <x-nav.nav-menu-entry :text="__('Basic vs Pro')" href="/login" icon="rocket" />
                <x-nav.nav-menu-entry text="Basic vs Pro" href="/login" icon="rocket" />
                <x-nav.nav-menu-entry text="Basic vs Pro" href="/login" icon="rocket" />
                <x-nav.nav-menu-entry text="Logout" href="/logout" icon="rocket" />
            @elseif (Auth::user()?->isUser())
                <x-nav.nav-menu-entry text="Logout" href="/logout" icon="rocket" />
            @else
                <x-nav.nav-menu-entry text="Basic vs Pro" href="/basic-vs-pro" icon="rocket" />
                <x-nav.nav-menu-entry text="Login" href="/login" icon="login" />
                <x-nav.nav-menu-entry text="Sign up" href="/signup" icon="signup" />
            @endif

            <div class="flex gap-4">
                {{ __("Language") }}:
                <div class="flex gap-2">
                    <a class="link w-10" href="/language/de"><img src="/icons/flag-de.svg" alt="Flag Germany" /></a>
                    <a class="link w-10" href="/language/en"><img src="/icons/flag-uk.svg" alt="Flag UK" /></a>
                </div>
            </div>
            <button class="btn btn-primary" onclick="LocationService.toggleLocationServiceSimulation()">
                Toggle Walk Simulator
            </button>
            <div class="flex justify-around gap-8 pt-8 text-xs">
                <a href="/imprint">{{ __("Imprint") }}</a>
                <a href="/terms">{{ __("Terms") }}</a>
                <a href="/privacy">{{ __("Privacy") }}</a>
            </div>
        </div>
    </div>
</nav>
