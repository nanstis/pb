/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/js/*.js",
        "./resources/css/*.css",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#fe8a02',
                'secondary': '#4dd170',
                'plan-standard': '#b1d236',
                'plan-premium': '#ffc64b',
                'plan-exclusive': '#fe8a02',
                'plan-vip': '#85338b',

                // Theme
                'success': '#10b759',
                'danger': '#ff0014',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/container-queries'),
    ],
    safelist: [
        'bg-plan-standard',
        'bg-plan-premium',
        'bg-plan-exclusive',
        'bg-plan-vip',
        'text-plan-standard',
        'text-plan-premium',
        'text-plan-exclusive',
        'text-plan-vip'
    ]
};
