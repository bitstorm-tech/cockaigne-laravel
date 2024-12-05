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
    themes: ["business"],
  },
};
