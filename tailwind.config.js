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
<<<<<<< HEAD
        
=======

>>>>>>> 0b7f2aa2899e4028f6903058e758c5efc86fce4b
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: '#111111',
                white: '#FFFFFF',
                darkgray: '#3A383B',
                lightgray: '#C5C5C5',
            },
            colors: {
                'black': '#111111',
                'white': '#FFFFFF',
                'darkgray': '#3A383B',
                'lightgray': '#C5C5C5',
            },
            colors: {
                'black': '#111111',
                'white': '#FFFFFF',
                'darkgray': '#3A383B',
                'lightgray': '#C5C5C5',
            },
        },
    },

    plugins: [forms],
};
