@props([
    "label" => "",
])

<fieldset class="fieldset">
    <legend class="fieldset-legend">{{ __($label) }}</legend>
    <input {{ $attributes->merge(["class" => "input"]) }} />
    @error($attributes->whereStartsWith("wire:model")->first())
        <div class="text-error">{{ $message }}</div>
    @enderror
</fieldset>
