module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    './index.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}