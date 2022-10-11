/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    screens: {
      'xl': {'max': '1279px'},
      // => @media (max-width: 1279px) { ... }

      'lg': {'max': '1023px'},
      // => @media (max-width: 1023px) { ... }
    
      'md': {'max': '950px'},
      // => @media (max-width: 767px) { ... }

      'sm': {'max': '645px'},
      // => @media (max-width: 639px) { ... }
    },
    extend: {
      animation: {blob: "blob 7s infinite"},
      keyframes: {
        blob: {
          "0%": {
            transform : "translate(0px, 0px) scale(1)",
          },
          "33%": {
            transform : "translate(30px, -50px) scale(1.1)",
          },
          "66%": {
            transform : "translate(-20px, 20px) scale(0.8)",
          },    
          "100%": {
            transform : "translate(0px, 0px) scale(1)",
          }

        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}