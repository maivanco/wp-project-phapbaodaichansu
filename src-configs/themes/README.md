# Themes Directory

Place your WordPress themes here. They will be automatically available in WordPress.

## Using Vite with Your Theme

To use Vite with your theme, follow these steps:

1. **Create your theme directory** (e.g., `my-theme/`)

2. **Update `vite.config.js`** in the project root to point to your theme:
   ```js
   build: {
     outDir: 'content/themes/my-theme/dist',
     // ...
   }
   ```

3. **In your theme's `functions.php`**, enqueue Vite assets from `manifest.json`:
   ```php
   <?php
   function enqueue_vite_assets() {
       $manifest = json_decode(
           file_get_contents(get_template_directory() . '/dist/.vite/manifest.json'),
           true
       );

       if (isset($manifest['vite/main.js'])) {
           wp_enqueue_script(
               'main',
               get_template_directory_uri() . '/dist/' . $manifest['vite/main.js']['file'],
               [],
               null,
               true
           );

           if (isset($manifest['vite/main.js']['css'])) {
               foreach ($manifest['vite/main.js']['css'] as $css) {
                   wp_enqueue_style(
                       'main',
                       get_template_directory_uri() . '/dist/' . $css,
                       [],
                       null
                   );
               }
           }
       }
   }
   add_action('wp_enqueue_scripts', 'enqueue_vite_assets');
   ```

4. **Build assets**:
   ```bash
   npm run build
   ```
