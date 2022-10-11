module.exports = {
  presets: [
    require('./rahvusarhiiv.preset.js')
  ],
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
  ]
}
