import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                greenfilter: 'rgb(0,100,35)',
                green: 'rgb(0, 44, 15)',
                greenCard: 'rgb(15, 74, 37)',
                notwhite: 'rgb(237, 237, 237)',
            },
            boxShadow: {
                'nav': '0 -2px 10px rgba(0, 0, 0, 0.15)',
            },
            dropShadow: {
                'greenOutline': '0 0 1.1px rgba(0, 98, 0, 1)',
            },
        },
    },

    plugins: [forms],
};
