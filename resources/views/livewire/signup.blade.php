<form wire:submit="save()" class="flex flex-col gap-2 p-6">
    @csrf
    <h1 class="text-center">{{ __("Sign up") }}</h1>

    <x-ui.checkbox label="Sign up a shop" model="isDealer" :live="true" />

    @if (! $isDealer)
        {{-- ------------- --}}
        {{-- User specific --}}
        {{-- ------------- --}}
        <x-ui.input type="email" label="E-Mail" model="userForm.email" />
        <x-ui.input type="text" label="Username" model="userForm.username" />
        <x-ui.input type="password" label="Password" model="userForm.email" />
        <x-ui.input type="password" label="Password confirmation" model="userForm.password_confirmed" />
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __("Age") }}</legend>
            <select class="select w-full" wire:model="userForm.age">
                <option>bis 18</option>
                <option>19 - 29</option>
                <option>30 - 39</option>
                <option>40 - 49</option>
                <option>50 - 59</option>
                <option>über 60</option>
            </select>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __("Gender") }}</legend>
            <select class="select w-full" wire:model="userForm.gender">
                <option>Frau</option>
                <option>Mann</option>
                <option>Egal</option>
            </select>
        </fieldset>
    @else
        {{-- --------------- --}}
        {{-- Dealer specific --}}
        {{-- --------------- --}}
        <x-ui.input type="email" label="E-Mail" model="dealerForm.email" />
        <x-ui.input type="text" label="Company name" model="dealerForm.username" />
        <x-ui.input type="password" label="Password" model="dealerForm.email" />
        <x-ui.input type="password" label="Password confirmation" model="dealerForm.password_confirmed" />
        <div class="flex flex-col gap-2">
            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __("Industry") }}</legend>
                <select class="select w-full" wire:model="dealerForm.industry">
                    <option selected disabled hidden value="-1">{{ __("Select industry") }} ...</option>
                    @foreach ($industries as $industry)
                        <option value="{{ $industry["id"] }}">{{ $industry["name"] }}</option>
                    @endforeach
                </select>
            </fieldset>
            <div class="grid grid-cols-3 gap-2">
                <div class="col-span-2">
                    <x-ui.input type="text" label="Street" model="dealerForm.street" />
                </div>
                <x-ui.input type="text" label="House number" model="dealerForm.houseNumber" />
            </div>
            <div class="grid grid-cols-3 gap-2">
                <div class="col-span-2">
                    <x-ui.input type="text" label="City" model="dealerForm.city" />
                </div>
                <x-ui.input type="text" label="Postal code" model="dealerForm.postalCode" />
            </div>
            <x-ui.input type="text" label="Phone number" model="dealerForm.phoneNumber" />
            <x-ui.input type="text" label="Tax ID" model="dealerForm.taxId" />
        </div>
    @endif

    {{-- ------------ --}}
    {{-- Accept terms --}}
    {{-- ------------ --}}
    <label class="fieldset-label pt-10">
        <input type="checkbox" class="checkbox" wire:model="acceptTerms" />
        <span>
            @lang(
                "I have read the :termsLink and :privacyLink and accept them",
                [
                    "termsLink" => __("<a class=\"link\" href=\"/terms\">Terms</a>"),
                    "privacyLink" => __("<a class=\"link\" href=\"/privacy\">Privacy</a>"),
                ]
            )
        </span>
    </label>
    @error("acceptTerms")
        <span class="text-error text-sm">{{ $message }}</span>
    @enderror

    {{-- -------------------------- --}}
    {{-- Cancel and sign up buttons --}}
    {{-- -------------------------- --}}
    <div class="mt-4 grid grid-cols-2 gap-2">
        <a class="btn" href="/" wire:navigate>{{ __("Cancel") }}</a>
        <button class="btn btn-primary">{{ __("Sign up") }}</button>
    </div>
</form>
