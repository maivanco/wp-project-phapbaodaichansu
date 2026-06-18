import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig(({ command }) => ({
  root: '.', // Change this to your desired directory
  base: command === 'build' ? '' : '/',
  plugins: [
    tailwindcss(),
    {
      name: 'theme-php-full-reload',
      handleHotUpdate({ file, server }) {
        const inTheme = file.includes('/src-configs/themes/default-theme/')
        if (inTheme && file.endsWith('.php')) {
          server.ws.send({ type: 'full-reload', path: '*' })
        }
      },
    },
  ],
  build: {
    outDir: 'src-configs/themes/default-theme/dist',
    manifest: true,
    rollupOptions: {
      input: 'src-configs/themes/default-theme/assets/js/vite.js',
    },
  },
  server: {
    // Expose Vite outside loopback so Docker containers can reach it.
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    cors: true,
    origin: 'http://localhost:5173',
    allowedHosts: ['host.docker.internal', 'localhost'],
    hmr: {
      host: 'localhost',
      port: 5173,
    },
  }
}))