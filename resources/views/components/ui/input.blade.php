@props([
    "label" => "",
    "type" => "text",
    "widthFull" => true,
    "model" => "",
    "live" => false,
])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ __($label) }}</legend>
    <input
        type="{{ $type }}"
        @class(["input", "w-full" => $widthFull])
        @if ($live)
            wire:model.live="{{ $model }}"
        @else
            wire:model="{{ $model }}"
        @endif
    />
    @error($model)
        <div class="text-error">{{ $message }}</div>
    @enderror
</fieldset>
