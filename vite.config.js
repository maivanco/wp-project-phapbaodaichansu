import { defineConfig, build } from 'vite'
import tailwindcss from '@tailwindcss/vite'

let isBuilding = false
async function runBuild() {
  if (isBuilding) return
  isBuilding = true
  try {
    await build({
      configFile: false,
      root: '.',
      base: '',
      plugins: [tailwindcss()],
      build: {
        outDir: 'src-configs/wp-content/themes/default-theme/dist',
        manifest: true,
        rollupOptions: {
          input: 'src-configs/wp-content/themes/default-theme/assets/js/vite.js',
        },
      },
    })
  } catch (err) {
    console.error('Build error:', err)
  } finally {
    isBuilding = false
  }
}

export default defineConfig(({ command }) => ({
  root: '.', // Change this to your desired directory
  base: command === 'build' ? '' : '/',
  plugins: [
    tailwindcss(),
    {
      name: 'theme-php-full-reload-and-build',
      configureServer() {
        // Run build once when Vite dev server starts
        runBuild()
      },
      async handleHotUpdate({ file, server }) {
        if (file.includes('/dist/')) return

        const inTheme = file.includes('/src-configs/wp-content/themes/default-theme/')
        if (inTheme) {
          // Re-run build for all theme edits (including PHP templates) so dist CSS stays updated
          await runBuild()
          // Send live reload signal via vite-client
          server.ws.send({ type: 'full-reload', path: '*' })
        }
      },
    },
  ],
  build: {
    outDir: 'src-configs/wp-content/themes/default-theme/dist',
    manifest: true,
    rollupOptions: {
      input: 'src-configs/wp-content/themes/default-theme/assets/js/vite.js',
    },
  },
  server: {
    // Expose Vite outside loopback so Docker containers can reach it.
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    cors: true,
    origin: 'http://localhost:5173',
    allowedHosts: ['host.docker.internal', 'localhost', 'pbdcs.localhost'],
    hmr: {
      host: 'localhost',
      port: 5173,
    },
  }
}))