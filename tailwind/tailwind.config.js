/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js}'],
  darkMode: 'class',
  theme: {
    extend: {
      spacing: {
        13: '3.25rem',
      },
      fontFamily: {
        rowdies: ['Rowdies'],
      },
      colors: {
        daffa: '#c0ffee',
      }
    },
  },
  plugins: [],
}
