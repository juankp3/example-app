<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi vista componente</title>

    <script src="https://cdn.tailwindcss.com"></script>


    @vite('resources/sass/app.sass')


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




    <x-sectiontitle>
        <x-slot name="vowel">A</x-slot>
        <x-slot name="titlesection">Población Total</x-slot>
    </x-sectiontitle>

    <x-prueba>
        <x-slot name="title">Totals</x-slot>
        <x-slot name="price">13.5333</x-slot>
    </x-prueba>

<x-sectiontitle>
        <x-slot name="vowel">B</x-slot>
        <x-slot name="titlesection">Variabilidad Anual</x-slot>
    </x-sectiontitle>

    <x-prueba>
        <x-slot name="title">TMB</x-slot>
        <x-slot name="price">9 meses</x-slot>
    </x-prueba>

    <x-prueba2>
        <x-slot name="titleicon">Edad promedio</x-slot>
        <x-slot name="age">43 años</x-slot>
    </x-prueba2>


</body>
</html>
