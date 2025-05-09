/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0D1B2A', // biru tua (kekuatan, keadilan, profesional)
        secondary: '#25313f', // biru keunguan (berwibawa dan elegan)
        accent: '#555f69', // biru muda lembut (untuk aksen ringan)
      }
    },
  },
  plugins: [],
}

