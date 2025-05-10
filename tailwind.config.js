import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins'],
            },
            colors: {
                greenfilter: 'rgb(0,100,35)',
                green: 'rgb(0, 82, 27)',
                greenCard: 'rgb(15, 74, 37)',
                backbutt: 'rgb(0, 160, 59)',
                red: 'rgb(224, 52, 46)',
                notwhite: 'rgb(237, 237, 237)',
                blue: 'rgb(53, 76, 80)',
                cta: 'rgb(131, 198, 210)'
            },
            boxShadow: {
                'nav': '0 -2px 10px rgba(0, 0, 0, 0.15)',
            },
            dropShadow: {
                'greenOutline': '0 0 1.1px rgba(0, 98, 0, 1)',
            },
        },
    },
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    plugins: [forms],
};
