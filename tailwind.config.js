const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './PassionGestion_2/vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './PassionGestion_2/storage/framework/views/*.php',
        './PassionGestion_2/resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'Karla': 'Karla',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
