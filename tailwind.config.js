/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/testdash.blade.php"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
