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
            backgroundImage: {
                'hero-pattern': "url('https://images.pexels.com/photos/15272613/pexels-photo-15272613/free-photo-of-ciel-soleil-couchant-sombre-lune.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load')",
        },
            
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
