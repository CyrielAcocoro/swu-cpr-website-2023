<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWU-CPR</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="/css/gallery.css" rel="stylesheet" />
    <link href="/css/social_menu.css" rel="stylesheet" />
    <link href="/css/button.css" rel="stylesheet" />
    <link href="/css/text-phaser.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('cite-logo.png') }}">
    <script src="https://kit.fontawesome.com/ae31dfd226.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('js/share.js') }}"></script> -->
    @livewireStyles
</head>

<body class="bg-white-400 flex flex-col h-screen">
    <livewire:navbar />
    <main>
        {{$slot}}
    </main>
    <x-footer />
    @livewireScripts
    <livewire:project-modal />
</body>

</html>