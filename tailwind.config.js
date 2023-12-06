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
                beau: [ 'Beau Rivage', 'cursive' ],
                dancing: [ 'Dancing Script', 'cursive' ],
                whisper: [ 'Whisper', 'cursive' ]
            },
        },
    },

    plugins: [forms],
};

// font-family: 'Beau Rivage', cursive;
// font-family: 'Dancing Script', cursive;
// font-family: 'Whisper', cursive;
