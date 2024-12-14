<x-guest-layout>
  <form method="post" action="/foobar" class="pt-1/3 pt-18 m-4 flex flex-col gap-4 p-6">
    @csrf

    <h1 class="text-center">{t("login", language)}</h1>
    {{--    <div class="form-control"> --}}
    {{--      <label for="email">{t("email", language)}</label> --}}
    {{--      <input id="email" type="email" name="email" /> --}}
    {{--    </div> --}}
    <x-input label="E-Mail" />
    {{--    <div class="form-control pb-6"> --}}
    {{--      <label for="password">{t("password", language)}</label> --}}
    {{--      <input id="password" type="password" name="password" /> --}}
    {{--    </div> --}}
    <x-input label="Password" type="password" />
    {{--    <button>{t("login", language)}</button> --}}
    <x-button label="Login" class="btn-warning" type="submit" />
    {{--    <a class="btn btn-primary" type="button" href="/user"> --}}
    {{--      {t("continue_as_basic_user", language)} --}}
    {{--    </a> --}}
    <a href="/user" class="btn btn-primary">Weiter als Basic-User</a>
    <div class="pt-10 text-center text-sm">
      <a href="/registration">{t("signup", language)}</a>
      <span>/</span>
      <a href="/send-password-change-email">{t("password_reset", language)}</a>
      <span>/</span>
      <a href="/registration-complete">{t("account_activate", language)}</a>
    </div>
    <div class="mt-4 flex justify-center gap-2">
      <a class="link w-10" hx-get="/api/accounts/change-language?lang=de">
        <FlagDeIcon />
      </a>
      <a class="link w-10" hx-get="/api/accounts/change-language?lang=en">
        <FlagUkIcon />
      </a>
    </div>
  </form>
</x-guest-layout>
