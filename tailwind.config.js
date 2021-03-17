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
        typography: {
            default: {
                css: {
                    a: {
                        color: '#fc8181',
                        '&:hover': {
                            color: '#c53030',
                        },
                    },
                },
            },
        },
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

