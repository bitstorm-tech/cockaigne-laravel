<form class="flex flex-col gap-2 p-6" hx-post="/api/registration" hx-target="#alert" x-data="{ isDealer: false }">
    <h1 class="text-center">{{ __("Sign up") }}</h1>
    <label class="fieldset-label">
        <input type="checkbox" checked="checked" class="checkbox" name="isDealer" x-model="isDealer" />
        {{ __("Sign up a shop") }}
    </label>
    <fieldset class="fieldset">
        <legend class="fieldset-legend">{{ __("E-Mail") }}</legend>
        <input type="email" class="input w-full" name="email" />
    </fieldset>
    <fieldset class="fieldset">
        <legend
            class="fieldset-legend"
            x-text="isDealer ? '{{ __("Company name") }}' : '{{ __("Username") }}'"
        ></legend>
        <input type="text" class="input w-full" name="username" />
    </fieldset>
    <fieldset class="fieldset">
        <legend class="fieldset-legend">{{ __("Password") }}</legend>
        <input type="password" class="input w-full" name="password" />
    </fieldset>
    <fieldset class="fieldset">
        <legend class="fieldset-legend">{{ __("Password repeat") }}</legend>
        <input type="password" class="input w-full" name="passwordRepeat" />
    </fieldset>
    <fieldset class="fieldset" x-show="!isDealer">
        <legend class="fieldset-legend">{{ __("Age") }}</legend>
        <select class="select w-full" name="age">
            <option>bis 18</option>
            <option>19 - 29</option>
            <option>30 - 39</option>
            <option>40 - 49</option>
            <option>50 - 59</option>
            <option>über 60</option>
        </select>
    </fieldset>
    <fieldset class="fieldset" x-show="!isDealer">
        <legend class="fieldset-legend">{{ __("Gender") }}</legend>
        <select class="select w-full" name="gender">
            <option>Frau</option>
            <option>Mann</option>
            <option>Egal</option>
        </select>
    </fieldset>

    {{-- --------------- --}}
    {{-- Dealer specific --}}
    {{-- --------------- --}}
    <div class="flex flex-col gap-2" x-show="isDealer">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __("Industry") }}</legend>
            <select class="select w-full" name="business">
                <option selected disabled hidden value="-1">{{ __("Select industry") }} ...</option>
                @foreach ($industries as $industry)
                    <option value="{{ $industry["id"] }}">{{ $industry["name"] }}</option>
                @endforeach
            </select>
        </fieldset>
        <div class="grid grid-cols-3 gap-2">
            <fieldset class="fieldset col-span-2">
                <legend class="fieldset-legend">{{ __("Street") }}</legend>
                <input type="text" class="input w-full" name="street" />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __("House number") }}</legend>
                <input type="text" class="input w-full" name="houseNumber" />
            </fieldset>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <fieldset class="fieldset col-span-2">
                <legend class="fieldset-legend">{{ __("City") }}</legend>
                <input type="text" class="input w-full" name="city" />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __("Postal code") }}</legend>
                <input type="number" class="input w-full" name="postalCode" />
            </fieldset>
        </div>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __("Phone number") }}</legend>
            <input type="phone" class="input w-full" name="phoneNumber" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __("Tax ID") }}</legend>
            <input type="text" class="input w-full" name="taxId" />
        </fieldset>
    </div>
    <div class="form-control-horizontal pt-10">
        <input id="terms" type="checkbox" class="checkbox" name="terms" />
        <label for="terms" class="cursor-pointer">
            {{ __("accept_terms_and_privacy_1") }}
            <a class="link" href="#">{{ __("terms") }}</a>
            {{ __("and") }}
            <a class="link" href="#">{{ __("privacy") }}</a>
            {{ __("accept_terms_and_privacy_2") }}
        </label>
    </div>
    <div class="mt-4 grid grid-cols-2 gap-2">
        <a class="btn" href="/" wire:navigate>{{ __("Cancel") }}</a>
        <button class="btn btn-primary">{{ __("Sign up") }}</button>
    </div>
</form>
