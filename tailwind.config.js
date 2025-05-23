/** @type {import('tailwindcss').Config} */
const glob = require('fast-glob');

module.exports = {
  content: glob.sync(['./*.php', './**.php', './**/**.php', './template-parts/**/*.php', './src/js/**.js', './src/js/**/**.js']),
  blocklist: ['container'],
  theme: {
    extend: {
      colors: {
        blue: 'rgba(var(--blue) / <alpha-value>)',
        ['light-blue']: 'rgba(var(--light-blue) / <alpha-value>)',
        beige: 'rgba(var(--beige) / <alpha-value>)',
        ['beige-2']: 'rgba(var(--beige-2) / <alpha-value>)',
        ['beige-3']: 'rgba(var(--beige-3) / <alpha-value>)',
        white: 'rgba(var(--white) / <alpha-value>)',
        orange: 'rgba(var(--orange) / <alpha-value>)',
      },
      fontFamily: {
        figtree: 'var(--font-figtree)',
        gazpacho: 'var(--font-gazpacho)',
      },
    },
  },
  plugins: [
    function ({ addVariant }) {
      addVariant('next-child', '& + *');
    },
  ],
};
