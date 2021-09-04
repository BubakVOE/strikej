module.exports = {

  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {

      height: {
        '1/12':  '8.333333%',
        '2/12':	'16.666667%',
        '3/12':	'25%',
        '4/12':	'33.333333%',
        '5/12':	'41.666667%',
        '6/12':	'50%',
        '7/12':	'58.333333%',
        '8/12':  '66.666667%',
        '9/12':  '75%',
        '10/12':	'83.333333%',
        '11/12':	'91.666667%',
      },

      margin: {
        '1/12':  '8.333333%',
        '2/12':	'16.666667%',
        '3/12':	'25%',
        '4/12':	'33.333333%',
        '5/12':	'41.666667%',
        '6/12':	'50%',
        '7/12':	'58.333333%',
        '8/12':  '66.666667%',
        '9/12':  '75%',
        '10/12':	'83.333333%',
        '11/12':	'91.666667%',
      },

      colors: {
        red: {
          'custom' : '#e30022',
        },
        gray: {
          'dark' : '#090909',

          'old' : '#252425',
          
          'medium' : '#1C1D21',
          'light' : '#535253',
        },

        black: {
          'custom' :'#000000',
        },


        blue: {
          'light': '#00d9ff',
          'dark' : '#0011ff',
          'glass': '#577AB4',
          'dog': '#577AB4',
        },
      },

      fontFamily: {
        montserrat: 'Montserrat, sans-serif',
        poppins: 'Poppins, sans-serif',
        apple: '-apple-system, BlinkMacSystemFont Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif',
        inter: 'Inter, sans-serif',
      },
    },
  },
  variants: {
    extend: {},
  },

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],

}
