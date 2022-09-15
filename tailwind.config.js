module.exports = {
  // presets: [
  //   require('./custom.preset.js')
  // ],
  mode: 'jit',
  content: [
    './views/**/*.html',
    './views/*.php'
  ],
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp')
  ],
  theme: {
    extend : {
      fontFamily: {
        inter: 'Inter, sans-serif'
      }
    }
  },
  variants: {},
}
