import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vueDevTools from 'vite-plugin-vue-devtools';

export default defineConfig({
    plugins: [
        vueDevTools(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: { 
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    server: {
        host: '0.0.0.0',
        port: 10001,
        hmr: {
            host: 'localhost',
            port: 10001,
            protocol: 'ws',
            clientPort: 10001
        },
        watch: {
            usePolling: true
        }
    },
    optimizeDeps: {
        include: ['vue']
    },
    build: {
        target: 'esnext',
        minify: 'esbuild'
    }
});
