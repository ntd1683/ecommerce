const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/user/app.js', 'public/js/user').vue()
    .js('resources/js/user/main.js', 'public/js/user')
    .js('resources/js/user/account.js', 'public/js/user')
    .js('resources/js/libraries/toasting.js', 'public/js/libraries')
    .postCss('resources/css/libraries/toasting.css', 'public/css/libraries')
    .sass('resources/css/user/style.scss', 'public/css/user')
    .postCss('resources/css/user/app.css', 'public/css/user', [
        require('tailwindcss')
    ])
    .postCss('resources/css/admin/app.css', 'public/css/admin', [
        require('tailwindcss')
    ])
    .sass('resources/css/admin/style.scss', 'public/css/admin')
    .js('resources/js/admin/app.js', 'public/js/admin').vue()
    .js('resources/js/admin/main.js', 'public/js/admin')
    .disableNotifications();
if (mix.inProduction()) {
    mix.version();
}
