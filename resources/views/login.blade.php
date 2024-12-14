<x-guest-layout>
  <form method="post" action="/foobar" class="pt-1/3 pt-18 m-4 flex flex-col gap-4 p-6">
    @csrf

    <h1 class="text-center">{{ __('Login') }}</h1>
    <x-input label="{{ __('E-Mail') }}" name="email" type="email" />
    <x-input label="{{ __('Password') }}" type="password" />
    <x-button label="{{ __('Login') }}" class="btn-warning" type="submit" />
    <a href="/user" class="btn btn-primary">{{ __('Continue as basic user') }}</a>
    <div class="pt-10 text-center text-sm">
      <a href="/registration">{{ __('Signup') }}</a>
      <span>/</span>
      <a href="/send-password-change-email">{{ __('Reset password') }}</a>
      <span>/</span>
      <a href="/registration-complete">{{ __('Activate account') }}</a>
    </div>
    <div class="mt-4 flex justify-center gap-2">
      <a class="link w-10" hx-get="/api/accounts/change-language?lang=de">
        <x-icons.flags.de />
        {{--        <FlagDeIcon /> --}}
      </a>
      <a class="link w-10" hx-get="/api/accounts/change-language?lang=en">
        <x-icons.flags.uk />
        {{--        <FlagUkIcon /> --}}
      </a>
    </div>
  </form>
</x-guest-layout>
