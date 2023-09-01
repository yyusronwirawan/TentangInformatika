import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#22c55e",
                secondary: "#64748b",
                dark: "#1e293b",
                btnGreen: "#4ade80",
                third: "#dcfce7",
            },
            screens: {
                "2xl": "1320px",
            },
        },
        container: {
            center: true,
            padding: "16px",
        },
    },
    // darkMode: "media",
    plugins: [forms, require("flowbite/plugin")],
};
