import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/*.md",
    ],

    safelist: ['inline', 'text-red-600', 'mr-2', 'font-bold', 'no-underline', 'text-yellow-300','text-yellow-800','bg-yellow-800'],

    theme: {
        extend: {
            colors: {
                yellow: defaultTheme.colors.yellow,
            },
        },
        container: {
            center: true,
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};
