/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.html"],
  theme: {
    extend: {
      width: {
        500: "500px",
        600: "600px",
      },
    },
  },
  plugins: [],
};
