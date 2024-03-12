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
      'white': '#ffffff',
      'light': '#FFF7E9',
      'light-mild': '#FAF2E4',
      'dark': '#181D50',
      'darker': '#192280',
      'primary': '#FF731D',
      'primary-dark': '#ED6B1B',
      'default-blue': '#1746A2',
      'light-blue': '#5F9DF7',
      'red': '#EE4B2B',
    },
    extend: {
      spacing: {
        '1/2': '50%',
        '2/3': '66.666667%',
        '3/4': '75%',
        '4/5': '80%',
      },
      flexBasis: {
        '3/3': '28.33333333333333%',
        '1/16': '20%',
      },
      borderRadius: {
        '2xl': '1rem',
        '3xl': '1.5rem',
      },
      height: {
        '115': '28rem',
        '128': '32rem',
        '132': '37rem',
        '160': '60rem',
      },
      gap: {
        'default': '50px',
        'sm': '20px',
        'md': '30px',
        'lg': '40px',
      },
      fontSize: {
        xsm: '11px',
        sm: '13px',
        base: '15px',
        md: '18px',
        lg: '20px',
        xl: '24px',
        xxl: '30px',
      },
    },
  },
  plugins: [],
};
