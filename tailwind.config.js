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
            'orange': colors.orange,
            'bg-custom': '#F7F2F1',
            'primary': 'var(--primary-color)',
            'secondary': 'var(--secondary-color)',
            'black': colors.black,
            'white': colors.white,
            'gray': colors.gray,
            'gray-light': '#F6F6F6',
            'emerald': colors.emerald,
            'indigo': colors.indigo,
            'yellow': colors.yellow,
            'red': colors.red,
            'pink': colors.pink,
            'blue': colors.blue,
            'blueGray': colors.blueGray,
        },
        extend: {},
    },
    plugins: [],
}
