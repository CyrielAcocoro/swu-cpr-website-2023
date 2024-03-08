/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        backdropFilter: {
            none: "none",
            blur: "blur(20px)",
        },
        extend: {
            colors: {
                primary: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#B91C1C",
                    800: "#1e40af",
                    900: "#1e3a8a",
                    950: "#172554",
                },
                maroon: {
                    400: "#8E0B16",
                },
                dark_gray: {
                    900: "#141A27",
                    100: "#000001",
                },
            },
            animation: {
                "infinite-scroll": "infinite-scroll 40s linear infinite",
                "text-phaser": "text-phaser 3s linear infinite",
            },
            keyframes: {
                "infinite-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
                "text-phaser": {
                    "0%": { backgroundPosition: "0% 0" },
                    "100%": { backgroundPosition: "100% 0" },
                },
            },
            boxShadow: {
                card: "0px 2px 8px 0px rgba(99, 99, 99, 0.30)",
            },
        },
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/typography")],
};
