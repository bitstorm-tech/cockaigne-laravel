<div class="p-4">
    <h1>Login</h1>
    <form wire:submit="login" method="post" class="flex flex-col gap-3">
        @csrf
        <x-ui.input type="email" model="email" label="E-Mail" />
        <x-ui.input type="password" model="password" label="Password" />
        <button class="btn btn-primary mt-5">{{ __("Login") }}</button>
    </form>
</div>
