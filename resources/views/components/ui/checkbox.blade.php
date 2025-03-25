@props([
    "label" => "",
])

<label class="fieldset-label">
    <input
        type="checkbox"
        {{ $attributes->merge(["class" => "checkbox"]) }}
    />
    <span>{{ __($label) }}</span>
    @error($attributes->whereStartsWith("wire:model")->first())
        <div class="text-error">{{ $message }}</div>
    @enderror
</label>
