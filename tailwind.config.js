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
        },
    },

    plugins: [
    tailwindcss(),
  ],
})