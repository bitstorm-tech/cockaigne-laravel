<nav id="header" class="border-opacity-25 h-12 border-b border-b-white" x-data="{ showMenu: false }">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex h-12 items-center justify-between">
            <div class="flex gap-4">
                <a href="/"><img class="h-7" src="/icons/logo-text.svg" alt="Logo" /></a>
                @if (Auth::user()?->isUser())
                    <div class="badge badge-neutral self-end text-xs">
                        @if (Auth::user()?->isBasicUser())
                            Basic
                        @else
                            Pro
                        @endif
                    </div>
                @endif
            </div>
            <div class="hidden gap-6 md:flex">
                @if (Auth::user()?->isAuthenticated)
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
        class="bg-dark absolute top-10 right-2 z-50 rounded-md border-2 border-[#232b2e] select-none md:hidden"
        x-transition.duration.250ms
        x-show="showMenu"
        @click.outside="showMenu = false"
    >
        <div class="flex flex-col gap-5 p-6 sm:px-3">
            if user.IsAuthenticated { if user.IsDealer {
            @DealerMenu(lang)
            } else {
            @UserMenu(lang)
            } } else {
            @menuEntry(t("login", lang), "/login", icon . Login())
            @menuEntry(t("signup", lang), "/signup", icon . Registration())
            }
            <div class="flex gap-4">
                { t("language", lang) }:
                <div class="flex gap-2">
                    <a class="link w-10" href="/language-set/de">@icon.FlagDE()</a>
                    <a class="link w-10" href="/language-set/en">@icon.FlagUK()</a>
                </div>
            </div>
            <button onclick="LocationService.toggleLocationServiceSimulation()">Toggle Walk Simulator</button>
            <div class="flex justify-around gap-8 pt-8 text-xs">
                <a href="/imprint">{ t("imprint", lang) }</a>
                <a href="/terms">{ t("terms", lang) }</a>
                <a href="/privacy">{ t("privacy", lang) }</a>
            </div>
        </div>
    </div>
</nav>
