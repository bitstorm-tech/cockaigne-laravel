import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import("tailwindcss").Config} */
export default {
  plugins: [forms, daisyui],

  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  daisyui: {
    themes: [
      {
        dark: {
          ...require("daisyui/src/theming/themes")["dark"],
          "base-300": "#1b2123",
          "base-100": "#1b2123",
          primary: "#2c363a",
          warning: "#751b37",
        },
      },
    ],
  },
};
