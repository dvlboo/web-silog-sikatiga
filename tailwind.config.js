import daisyui from "daisyui";

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Helvetica', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [
    daisyui,
  ],
  daisyui: {
    darkTheme: false,
  },
}
