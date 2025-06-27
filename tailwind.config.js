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
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
                victor: ['Victor Mono', ...defaultTheme.fontFamily.sans],

            },
            colors: {
                'black': '#111111',
                'white': '#FFFFFF',
                'darkgray': '#3A383B',
                'lightgray': '#C5C5C5',
                'field': '#EDEDED'
            },
            spacing: {
                'space-144': '144px',
                'space-70': '70px', 
                'space-48': '48px',
                'space-40': '40px',
                'space-32': '32px',
                'space-26': '26px',
                'space-24': '24px',
                'space-20': '20px',
                'space-16': '16px',
                'space-10': '10px',
                'space-4': '4px',
            },
            borderRadius: {
                'desktop-40': '40px',
                'desktop-30': '30px',
                'modile-20': '20px',
                'modile-15': '15px',
                'loginfield': '26px',
            },
            container: {
                center: true,
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};

