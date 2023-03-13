/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.php"],
    theme: {
        screens: {
            sp: { min: "320px", max: "639.99px" },

            md: { min: "640px", max: "979.99px" },

            md2: { min: "980px", max: "1279.99px" },

            mdx: { min: "640px", max: "1279.99px" },

            pc: "1280px",
        },
        extend: {
            fontFamily: {
                georgia: ["Georgia", "serif"],
            },
            colors: {
                scm: {
                    g1: "#367E18",
                    g2: "#00C292",
                    g3: "#59C862",
                    g4: "#7DD484",
                    g5: "#B5E6B9",
                    g6: "#66E093",
                    g7: "#00ADAA",
                    y1: "#FFC578",
                    y2: "#FF7C6D",
                    y3: "#FFF6BD",
                    r1: "#FF6161",
                },
            },
            width: {
                10: "10%",
                15: "15%",
                22: "22%",
                25: "25%",
                30: "30%",
                40: "40%",
                50: "50%",
                60: "60%",
                70: "70%",
                75: "75%",
                90: "90%",
            },
        },
    },
    plugins: [
        require("@tailwindcss/line-clamp"),
        require("prettier-plugin-tailwindcss"),
        function ({ addUtilities }) {
            const newUtilities = {
                ".w-fill-available": {
                    width: "-webkit-fill-available",
                },
                ".h-fill-available": {
                    height: "-webkit-fill-available",
                },
            };
            addUtilities(newUtilities);
        },
    ],
};
