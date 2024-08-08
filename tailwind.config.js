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
            backgroundImage:{
                'card':"linear-gradient(#ffffff 50%, #2c7bfe 50%)"
              },
              backgroundPosition:{
                'card-position':'0 2.5%',
                'card-hover':"0 100%"
              },
              backgroundSize:{
                'card-size':"100% 200%"
              },
              boxShadow:{
                'card':"0 0 35px rgba(0, 0, 0, 0.12)"
              }
        },
    },

    plugins: [forms],
};
