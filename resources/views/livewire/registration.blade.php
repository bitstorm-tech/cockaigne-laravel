<form class="flex flex-col gap-4 p-6">
  @csrf
  <h1 class="text-center">{{ __('Signup') }}</h1>
  <x-checkbox label="{{ __('Register a shop') }}" wire:model.live="isDealer" />
  <x-input label="{{ __('E-Mail') }}" wire:model="mail" />
  <x-input label="{{ __('Username') }}" />
  <x-input label="{{ __('Password') }}" type="password" />
  <x-input label="{{ __('Confirm password') }}" type="password" />
  @if ($isDealer)
    <div class="flex flex-col gap-4">
      <div class="form-control">
        <label for="category-select">{t("industry", language)}</label>
        <div id="category-select" hx-get="/partials/category-select?translation_key=industry_select"
          hx-trigger="load once" hx-target="this">
        </div>
      </div>
      <div class="grid grid-cols-3 gap-2">
        <div class="form-control col-span-2">
          <label for="street">{t("street", language)}</label>
          <input id="street" type="text" name="street" />
        </div>
        <div class="form-control">
          <label for="house-number">{t("house_number", language)}</label>
          <input id="house-number" type="text" name="houseNumber" />
        </div>
      </div>
      <div class="grid grid-cols-3 gap-2">
        <div class="form-control col-span-2">
          <label for="city">{t("city", language)}</label>
          <input id="city" type="text" name="city" />
        </div>
        <div class="form-control">
          <label for="zip">{t("zipcode", language)}</label>
          <input id="zip" type="number" name="zipCode" />
        </div>

      </div>
      <div class="form-control">
        <label for="phone">{t("phone", language)}</label>
        <input id="phone" type="text" name="phone" />
      </div>
      <div class="form-control">
        <label for="tax-id">{t("tax_id", language)}</label>
        <input id="tax-id" type="text" name="taxId" />
      </div>
    </div>
  @else
    <div class="flex flex-col gap-4">
      <x-select label="{{ __('Age') }}" :options="$ageOptions" />
      <x-select label="{{ __('Gender') }}" :options="$genderOptions" />
    </div>
  @endif
  <div class="form-control-horizontal pt-10">
    <input id="terms" type="checkbox" class="checkbox" name="terms" />
    <label for="terms" class="cursor-pointer">
      @lang('I have read the :terms and :privacy and accept them', [
          'terms' => $this->termsLink(),
          'privacy' => $this->privacyLink(),
      ])
      {{--      {{ __('I have read the') }} --}}
      {{--      <a class="link" href="#">{{ __('Terms') }}</a> --}}
      {{--      {{ __('and') }} --}}
      {{--      <a class="link" href="#">{t("privacy", language)}</a> --}}
      {{--      {t("accept_terms_and_privacy_2", language)} --}}
    </label>
  </div>
  <x-checkbox label="{!! __('I have read the :terms and :privacy and accept them', [
      'terms' => $this->termsLink(),
      'privacy' => $this->privacyLink(),
  ]) !!}" />
  <div class="mt-4 grid grid-cols-2 gap-2">
    <a class="btn btn-primary" href="/" wire:navigate>{{ __('Cancel') }}</a>
    <button>{{ __('Signup') }}</button>
  </div>
</form>
