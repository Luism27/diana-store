const { colors } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                store1:{
                    100: '#F4C6C4',
                    200: '#D9B2B0',
                    300: '#D6AFAD',
                    400: '#c9a2a0',
                    500: '#B99694',
                    600: '#AD8D8B',
                }, 
                store2: '#e4bdb5',
                store3: '#ffe1dd',
                pastel:{
                    100:'#fbe1e3',
                    200:'#f4b3b3',
                    300:'#f19898',
                    400:'#ed8b8b',
                    500:'#e9685b',
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                helloDancing: ['Dancing Script'],
                hello:['hello']
            },
        },
        // padding: {
        //     sm: '8px',
        //     md: '3.75rem',
        //     lg: '24px',
        //     xl: '48px',
        //    },
        minHeight: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
           },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            rotate:['group-hover']
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
