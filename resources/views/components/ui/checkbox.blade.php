@props([
    "label" => "",
    "model" => "",
    "live" => false,
])

<label class="fieldset-label">
    <input
        type="checkbox"
        class="checkbox"
        @if ($live)
            wire:model.live="{{ $model }}"
        @else
            wire:model="{{ $model }}"
        @endif
    />
    <span>{{ __($label) }}</span>
</label>
@error($model)
    <span class="text-error text-sm">{{ $message }}</span>
@enderror
