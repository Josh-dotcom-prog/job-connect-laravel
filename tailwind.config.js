import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],

    theme: {
        extend: {
            colors : {
                "black": "#060606"
            },
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
            },
            fontSize: {
                "2xs": "0.625rem"
            }
        },
    },

    plugins: [
    tailwindcss(),
  ],
})