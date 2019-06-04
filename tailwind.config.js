const defaultConfig = require('tailwindcss/defaultConfig');
module.exports      = {
  theme: {
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1280px',
    },
    extend: {
      fontFamily: {
        'sketch': ['Cabin Sketch'],
        'neucha': ['Neucha'],
      },
      colors: {
        code: {
          green: 'var(--color-code-green)',
          yellow: 'var(--color-code-yellow)',
          purple: 'var(--color-code-purple)',
          red: 'var(--color-code-red)',
          blue: 'var(--color-code-blue)',
          white: 'var(--color-code-white)',
        }
      },
    },
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus'],
    borderColor: ['responsive', 'hover', 'focus'],
    borderWidth: ['responsive', 'hover', 'focus'],
  }
};
