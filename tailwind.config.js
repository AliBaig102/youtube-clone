/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        screens:{
            'md-phone':'420px',
        }
        // colors:{
        //     'light':'#f2f2f2',
        // },
    },
  },
  plugins: [],
}

