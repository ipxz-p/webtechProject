module.exports = {
  content: [
    "./node_modules/flowbite/**/*.js",
    "./src/**/*.{html,js,php}",
    './index.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('flowbite/plugin')
  ],
}