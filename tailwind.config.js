/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#728c69', // Verde suave
                    light: '#a3bfa0',
                    dark: '#4c6346'
                },
                secondary: {
                    DEFAULT: '#d9d0c1', // Bege
                    light: '#f2ece4',
                    dark: '#a69d8d'
                },
                neutral: {
                    100: '#f7f7f7', // Branco acinzentado
                    200: '#e5e5e5',
                    800: '#333333',
                    900: '#1a1a1a',
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            }
        },
    },
    plugins: [],
}
