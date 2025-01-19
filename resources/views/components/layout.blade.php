<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian Baris-Berbaris</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link
    rel="stylesheet"
    href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
  />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <x-header></x-header>
    <main class="my-6 mb-20 max-w-screen-xl px-4 mx-auto md:px-6 lg:px-8 ">
        {{ $slot }}
    </main>
</body>
</html>
