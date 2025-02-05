/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "custom-light-gray": "#EAEAEA",
                "custom-white": "#FCFEFF",
                "custom-light-taupe": "#C6C0AF",
                "custom-light-yellow": "#F8F4E9",
                "custom-lighter-blue": "#D4E7ED",
                "custom-light-blue": "#BFDFE9",
                "custom-dark-blue": "#213371",
                "custom-darker-blue": "#18275C",
            },
            fontFamily: {
                nunito: ["Nunito Sans", "sans-serif"],
                playfair: ["Playfair Display", "serif"],
                dmSerif: ["DM Serif Display", "serif"],
            },
            spacing: {
                full: "100%",
                "1/2": "50%",
                "1/3": "33.333333%",
                "2/3": "66.666667%",
                "1/4": "25%",
                "2/4": "50%",
                "3/4": "75%",
                "1/5": "20%",
                "2/5": "40%",
                "3/5": "60%",
                "4/5": "80%",
                "1/6": "16.666667%",
                "2/6": "33.333333%",
                "3/6": "50%",
                "4/6": "66.666667%",
                "5/6": "83.333333%",
                "1/12": "8.333333%",
                "2/12": "16.666667%",
                "3/12": "25%",
                "4/12": "33.333333%",
                "5/12": "41.666667%",
                "6/12": "50%",
                "7/12": "58.333333%",
                "8/12": "66.666667%",
                "9/12": "75%",
                "10/12": "83.333333%",
                "11/12": "91.666667%",
            },
        },
    },
    plugins: [],
};
