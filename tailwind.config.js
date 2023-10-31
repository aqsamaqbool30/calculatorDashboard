/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/assets/js/script.js", "./**/*.php"],
  theme: {
    screens: {
      coxs: "375px",

      xs: "425px",

      sm: "576px",

      comd: "650px",

      md: "768px",

      colg: "850px",

      lg: "992px",

      "2coxl": "929.5px",

      coxl: "1050px",

      cocoxl: "1100px",

      xl: "1200px",

      "12xl": "1270px",

      co2xl: "1320px",

      "2xl": "1440px",

      "1540scrn": "1540px",

      "3xl": "1660px",

      "4xl": "1800px",

      max: "2000px",

      // max-width breakpoints

      maxcosm: { max: "424.5px" },
      maxsm: { max: "575.5px" },
      maxcomd: { max: "649.5px" },
      maxmd: { max: "767.5px" },
      maxlg: { max: "991.5px" },
      maxcoxl: { max: "1049.5px" },
      maxxl: { max: "1199.5px" },
      max2xl: { max: "1439.5px" },

      // min and max width breakpoints

      "sm-to-lg": { min: "576px", max: "992px" },
    },
    extend: {
      fontSize: {
        "15px": "15px",
      },
      colors: {
        primary_button: "#FF823C", // main color
        secondary_color: "#ff823c99", // little-light shade
        tertiary_color: "#ffc19e", // very-light shade
        // 'primaryColor': '#FF823C',
        // 'primaryColorDark': '#e15100',
        // 'text_color': '#000514',
        // 'bg_color': '#FF823C',
        // 'accent': '#c3f234',
      },
    },
  },
  plugins: [],
};
