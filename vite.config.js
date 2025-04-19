import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig(({ mode }) => {

    const env = loadEnv(mode, process.cwd())

    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: false,
            }),
            tailwindcss(),
        ],
        base: env.VITE_ASSET_URL || '/',
        build: {
            manifest: true,
            manifestFileName: 'manifest.json',
            outDir: 'public/build',
            emptyOutDir: true,
            rollupOptions: {
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                ],
            }
        }
    }
})
