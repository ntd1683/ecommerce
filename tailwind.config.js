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
            ...colors,
            transparent: 'transparent',
            'dark': '#1F2226',
            'bg-custom': '#F7F2F1',
            'primary': 'var(--primary-color)',
            'secondary': 'var(--secondary-color)',
            'gray-light': '#F6F6F6',
            'blueGray': colors.slate,
        },
        extend: {},
    },
    plugins: [],
}
