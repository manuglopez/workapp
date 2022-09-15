module.exports = {
  mode:'jit',
  corePlugins: {
    preflight: false,
  },
  content: ["./src/html/**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'whiteblue': '#eff7ff',
        'midblue': '#99ccff',
        'darkblue': '#273655',
      },
      fontFamily: {
        'lato': ['Lato', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
}