<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PWA App</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ededed">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body class="flex flex-col">
    <button
        id="backButton"
        onclick="history.back()"
        class="hidden absolute left-2 top-2 z-50 h-12 aspect-square text-xl text-white bg-backbutt rounded-full shadow-md w-fit"
    >
        <
    </button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const backButton = document.getElementById('backButton');
        if (window.location.pathname !== '/' && window.location.pathname !== "/dashboard") {
            backButton.classList.remove('hidden');
        }
    });

</script>

<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
    .then(function(registration) {
      console.log('Service Worker registered with scope:', registration.scope);
    })
    .catch(function(error) {
      console.log('Service Worker registration failed:', error);
    });
  }


</script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('client_token')) {
      const token = generateUUID();
      localStorage.setItem('client_token', token);
    }

    const token = localStorage.getItem('client_token');
    function generateUUID() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        const r = Math.random() * 16 | 0;
        const v = c === 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      });
    }
  });
</script>
