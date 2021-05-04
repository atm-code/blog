const defaultConfig = require('tailwindcss/defaultConfig');
const plugin        = require('tailwindcss/plugin')
const colors        = require('tailwindcss/colors')

module.exports = {
    variants: {
        borderSketchy: ['responsive', 'hover'],
        fontWeight:    ['hover', 'focus'],
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
            colors:     {
                gray:   colors.warmGray,
                'light-blue':   colors.lightBlue,
                aqua:   {
                    DEFAULT: '#F4F9F9',
                    '50':    '#FFFFFF',
                    '100':   '#FFFFFF',
                    '200':   '#FFFFFF',
                    '300':   '#FFFFFF',
                    '400':   '#FFFFFF',
                    '500':   '#F4F9F9',
                    '600':   '#D3E7E7',
                    '700':   '#B2D5D5',
                    '800':   '#91C3C3',
                    '900':   '#70B1B1'
                },
                mint:   {
                    DEFAULT: '#CCF2F4',
                    '50':    '#FFFFFF',
                    '100':   '#FFFFFF',
                    '200':   '#FFFFFF',
                    '300':   '#FFFFFF',
                    '400':   '#F6FDFD',
                    '500':   '#CCF2F4',
                    '600':   '#A2E7EB',
                    '700':   '#78DDE2',
                    '800':   '#4ED2D9',
                    '900':   '#2BC1C9'
                },
                silver: {
                    DEFAULT: '#AAAAAA',
                    '50':    '#FFFFFF',
                    '100':   '#FFFFFF',
                    '200':   '#F6F6F6',
                    '300':   '#DDDDDD',
                    '400':   '#C3C3C3',
                    '500':   '#AAAAAA',
                    '600':   '#909090',
                    '700':   '#777777',
                    '800':   '#5D5D5D',
                    '900':   '#444444'
                },
            },
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

