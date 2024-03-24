/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        container: {
            center: true,
            padding: '2rem',
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
          },
        colors: {
            primary: '#FF2D20',
        }
      },
    },
    plugins: [],
  }
