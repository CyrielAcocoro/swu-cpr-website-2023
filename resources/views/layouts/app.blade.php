<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWU-CPR</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/cite-logo.png') }}">
    <link href="/css/gallery.css" rel="stylesheet" />
    <link href="/css/social_menu.css" rel="stylesheet" />
    <link href="/css/button.css" rel="stylesheet" />
    <link href="/css/text-phaser.css" rel="stylesheet" />
    <link href="/css/social_button_color.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ae31dfd226.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="bg-white-500 flex flex-col h-screen">
    <livewire:navbar />
    <main>
        {{$slot}}
    </main>
    <x-footer />
    @livewireScripts
    <livewire:project-modal />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeIn');
                    }
                });
            });

            document.querySelectorAll('.fade-on-scroll').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>

</html>