<a class="flex items-center justify-start gap-4" href="{{ $href }}" wire:navigate>
    <div class="h-6 w-6 shrink">
        <img src="/icons/{{ $icon }}.svg" alt="" />
    </div>
    {{ __($text) }}
</a>
