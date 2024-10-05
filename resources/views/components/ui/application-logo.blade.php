@props(['class' => 'h-6 sm:h-10'])

<img src="" class="{{ $class }}" id="logo" alt="Logo" />

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var logoElement = document.getElementById('logo');
        var logoLight = @json(asset('img/logo-light.png'));
        var logoDark = @json(asset('img/logo-dark.png'));

        function updateLogo() {
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
                    .matchMedia('(prefers-color-scheme: dark)').matches)) {
                logoElement.src = logoDark;
            } else {
                logoElement.src = logoLight;
            }
        }

        updateLogo();

    });
</script>
