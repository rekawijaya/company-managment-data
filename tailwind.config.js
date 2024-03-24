/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('img/company.jpg')",
        'footer-texture': "url('/img/footer-texture.png')",
      },
      colors:{
        'background': '#40E0D0'
      }
    },
  },
  plugins: [],
}