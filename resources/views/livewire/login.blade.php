<form wire:submit="login" method="post">
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box m-auto mt-8 w-xs border p-4">
        <legend class="fieldset-legend text-2xl">{{ __("Login") }}</legend>

        <x-ui.input type="email" class="w-full" wire:model="email" label="E-Mail" />
        <x-ui.input type="password" class="w-full" wire:model="password" label="Password" />
        <button class="btn btn-primary mt-5">{{ __("Login") }}</button>
    </fieldset>
</form>
