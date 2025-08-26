import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',          // incluye livewire, components, etc.
    './resources/js/**/*.js',                    // por si usás clases en JS
  ],
  theme: {
    extend: {
      fontFamily: { sans: ['Figtree', ...defaultTheme.fontFamily.sans] },
    },
  },
  plugins: [forms],
}
