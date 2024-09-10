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
                black: "#060606",
            },
            fontFamily: {
                sans: ["Hanken Grotesk", "sans-serif"],
            },
            fontSize: {
                "2xs": ".625rem",
                "3xs": ".5rem",
            },
        },
    },
    plugins: [],
};
