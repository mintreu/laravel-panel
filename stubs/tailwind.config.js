/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/mintreu/**/*.blade.php",
        "./resources/**/*.blade.php"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
    darkMode: 'class',
}
