module.exports = {
  /*
   * This project now uses v3 of Tailwind, if you don't know what that means, then don't worry about it.
   * If you're familiar with the way a previous version worked, Tailwind no longer purges CSS, rather it uses a
   * new feature called JIT (just in time) to call the CSS as needed as opposed to purging after the fact.
   *
   * More information: https://tailwindcss.com/blog/tailwindcss-v3
   */
  content: ["*.php", "./assets/src/js/*.js"],
  theme: {
    colors: {
      screens: {
        sm: "39.9375em",
        // => @media (min-width: 640px) { ... }

        md: "63.9375em",
        // => @media (min-width: 768px) { ... }

        lg: "64em",
        // => @media (min-width: 1024px) { ... }

        xl: "74.9375em",
        // => @media (min-width: 1280px) { ... }
      },
      transparent: "transparent",
      current: "currentColor",
      orange: {
        light: "#DB8644",
        DEFAULT: "#B57A55",
      },
      tan: {
        DEFAULT: "#E2DAC7",
      },
      gray: {
        darkest: "#1f2d3d",
        dark: "#3c4858",
        DEFAULT: "#c0ccda",
        light: "#e0e6ed",
        lightest: "#f9fafc",
      },
      white: {
        DEFAULT: "#eeeeee",
      },
      black: {
        DEFAULT: "#222222",
      },
    },
  },
  plugins: [],
};
