/** @type {import('tailwindcss').Config} */
import colors from 'tailwindcss/colors';

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'dark': '#1F2226',
            'orange': '#FC6539',
            'bg-custom': '#F7F2F1',
            'primary': 'var(--primary-color)',
            'primaryHover': 'var(--primary-hover-color)',
            'secondary': 'var(--secondary-color)',
            'secondaryHover': 'var(--secondary-hover-color)',
            'black': colors.black,
            'white': colors.white,
            'gray': colors.gray,
            'gray-light': '#F6F6F6',
            'emerald': colors.emerald,
            'indigo': colors.indigo,
            'yellow': colors.yellow,
            'red': colors.red,
        },
        extend: {},
    },
    plugins: [],
}
