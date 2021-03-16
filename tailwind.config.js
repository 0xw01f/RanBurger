module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './resources/**/*js'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    boxShadow: {
      inner: 'inset 0 4px 6px 0 rgba(0, 0, 0, 0.06)',
      
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
