<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi vista componente</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/sass/app.sass', 'resources/css/app.css', 'resources/js/app.js')

</head>
<body>

    @php
        $mitexto ="mi texto descriptivo"
    @endphp

    <x-alert type="info"  icon="$mitexto" :msj="$mitexto">
        <x-slot name="title"> Este es el titulo del slot</x-slot>
        valor de ALGO
    </x-alert>

    <div class="container">
        mi prueba de sass
    </div>

</body>
</html>
