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
                    500: "#65171D",
                    600: "#41090D",
                    700: "#41090D",
                    800: "#F8F2F3",
                    900: "#2B0505",
                },
                dark_gray: {
                    100: "#121212",
                    400: "#231F20",
                    500: "#797979",
                    900: "#141A27",
                    customgray: "#1F2937",
                },
                white: {
                    400: "#E5E5E5",
                    500: "#ffffff",
                },
                yellow: {
                    400: "#ffd65b",
                },
            },
            animation: {
                "infinite-scroll": "infinite-scroll 40s linear infinite",
                "text-phaser": "text-phaser 3s linear infinite",
                fadeIn: "fadeIn 1s ease-out forwards",
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
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
            },
            boxShadow: {
                card: "0px 2px 8px 0px rgba(99, 99, 99, 0.30)",
            },
            backgroundImage: (theme) => ({
                "maroon-gradient":
                    "linear-gradient(to right, #8E0B16, #65171D, #8E0B16)",
                "gradient-tr-to-bl":
                    "linear-gradient(to bottom left, #8E0B16 0%, #F8B195 100%)",
                "gradient-four-colors":
                    "linear-gradient(to right, #65171D 0%, #41090D 50%, transparent 100%)",
            }),
            backgroundColor: {
                glass: "rgba(255, 255, 255, 0.15)", // Adjust the opacity as needed
            },
        },
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/typography")],
};
