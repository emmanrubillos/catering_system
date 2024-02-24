const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm-mobile': '380px',
      'md-mobile': '768px',
      'tablet': '980px',
      'laptop': '1366px',
      'desktop': '1920px',
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'light': '#FFF7E9',
      'dark': '#181D50',
      'primary': '#FF731D',
    },
    extend: {
      spacing: {
        '1/2': '50%',
        '2/3': '66.666667%',
        '3/4': '75%',
        '4/5': '80%',
      },
      borderRadius: {
        '2xl': '1rem',
        '3xl': '1.5rem',
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      gap: {
        'default': '50px',
        'sm': '20px',
        'md': '30px',
        'lg': '40px',
      },
      fontSize: {
        sm: '13px',
        base: '15px',
        md: '18',
        lg: '20px',
        xl: '24px',
      },
    },
  },
  plugins: [],
};
