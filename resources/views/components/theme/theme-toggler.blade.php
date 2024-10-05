@php
    $logo_light = asset('img/logo-light.png');
    $logo_dark = asset('img/logo-dark.png');
@endphp

<button id="theme-toggle" type="button"
    class="flex mx-auto mb-5 text-gray-300 dark:text-gray-400 hover:text-green-500 hover:bg-white dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5">
    @svg('dark', 'hidden w-5 h-5','theme-toggle-dark-icon')
    @svg('light', 'hidden w-5 h-5','theme-toggle-light-icon')
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var logoElement = document.getElementById('logo');
        var logoLight = @json($logo_light);
        var logoDark = @json($logo_dark);

        function updateThemeAndLogo() {
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
                    .matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
                themeToggleDarkIcon.classList.add('hidden');
                document.documentElement.classList.add('dark');
                if (logoElement) logoElement.src = logoDark;
            } else {
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
                document.documentElement.classList.remove('dark');
                if (logoElement) logoElement.src = logoLight;
            }
        }

        updateThemeAndLogo();

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('color-theme', 'light');
                } else {
                    localStorage.setItem('color-theme', 'dark');
                }
            }

            updateThemeAndLogo();
        });
    });
</script>
