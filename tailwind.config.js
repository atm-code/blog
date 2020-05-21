const defaultConfig = require('tailwindcss/defaultConfig');
module.exports      = {
    purge: {
        content: ['./resources/views/**/*.blade.php'],
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
        require('@tailwindcss/ui'),
    ]
};
