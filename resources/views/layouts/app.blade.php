{{-- resources/views/filament/pwa-meta.blade.php --}}
<meta name="theme-color" content="{{ $themeColor }}">
<link rel="apple-touch-icon" href="{{ $icon }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

<script>
    if ("serviceWorker" in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register("{{ asset('/sw.js') }}")
                .then(registration => {
                    console.log('ServiceWorker registration successful:', registration);
                })
                .catch(error => {
                    console.error('ServiceWorker registration failed:', error);
                });
        });
    }
</script>