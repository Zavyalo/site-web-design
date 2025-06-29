import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },          
            colors: {
                'black': '#111111',
                'white': '#FFFFFF',
                'darkgray': '#3A383B',
                'lightgray': '#C5C5C5',
            },
            container: {
                center: true,
              },
        },
    },

    plugins: [forms],
};
