const defaultConfig = require('tailwindcss/defaultConfig');
const plugin = require('tailwindcss/plugin')

module.exports      = {
    variants: {
        borderSketchy: ['responsive', 'hover'],
        fontWeight: ['hover', 'focus'],
    },

    purge: {
        content: [
            './resources/views/**/*.blade.php'
        ],
        options: {
            whitelistPatterns: [/hljs/, /ql-syntax/],
        }
    },

    theme: {
        extend: {
            fontFamily: {
                'sketch': ['Cabin Sketch'],
                'neucha': ['Neucha'],
            },
        },
    },

    plugins: [
        require('tailwindcss-border-sketch')(),
        require('@tailwindcss/typography'),
    ]
};

