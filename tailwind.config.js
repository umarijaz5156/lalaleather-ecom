const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '70.5': '17.625rem',
              },
            margin: {
                '76.5': '19.125rem', // Adds a custom margin-left of 76.5rem
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),require('flowbite/plugin')],
};
