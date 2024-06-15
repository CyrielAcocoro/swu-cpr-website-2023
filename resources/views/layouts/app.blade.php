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

            const tiles = document.querySelectorAll('.tile > img');
            let index = 0;

            function triggerHoverEffect() {
                const tile = tiles[index];
                // Directly manipulate the styles to simulate hover effect
                tile.style.position = 'absolute';
                tile.style.top = '-20px';
                tile.style.left = '-20px';
                tile.style.transition = '0.6s ease-in-out top, 0.6s ease-in-out left, 0.6s ease-in-out transform, 0.6s ease-in-out box-shadow';
                // Apply the specific box-shadow effect for each tile
                switch (index) {
                    case 0: // Tile 1
                        tile.style.boxShadow = '5px 5px rgba(186, 48, 48, 0.4), 10px 10px rgba(186, 48, 48, 0.3), 15px 15px rgba(186, 48, 48, 0.2), 20px 20px rgba(186, 48, 48, 0.1), 25px 25px rgba(186, 48, 48, 0.05)';
                        break;
                    case 1: // Tile 2
                        tile.style.boxShadow = '5px 5px rgba(186, 48, 48, 0.4), 10px 10px rgba(186, 48, 48, 0.3), 15px 15px rgba(186, 48, 48, 0.2), 20px 20px rgba(186, 48, 48, 0.1), 25px 25px rgba(186, 48, 48, 0.05)';
                        break;
                    case 2: // Tile 3
                        tile.style.boxShadow = '5px 5px rgba(186, 48, 48, 0.4), 10px 10px rgba(186, 48, 48, 0.3), 15px 15px rgba(186, 48, 48, 0.2), 20px 20px rgba(186, 48, 48, 0.1), 25px 25px rgba(186, 48, 48, 0.05)';
                        break;
                    case 3: // Tile 4
                        tile.style.boxShadow = '5px 5px rgba(186, 48, 48, 0.4), 10px 10px rgba(186, 48, 48, 0.3), 15px 15px rgba(186, 48, 48, 0.2), 20px 20px rgba(186, 48, 48, 0.1), 25px 25px rgba(186, 48, 48, 0.05)';
                        break;
                    default:
                        // Reset box-shadow if not, one of the specific tiles
                        tile.style.boxShadow = '';
                }
                setTimeout(() => {
                    // Reset the styles to remove the hover effect
                    tile.style.position = '';
                    tile.style.top = '0px';
                    tile.style.left = '0px';
                    tile.style.transition = '0.6s ease-in-out top, 0.6s ease-in-out left, 0.6s ease-in-out transform, 0.6s ease-in-out box-shadow';
                    tile.style.boxShadow = ''; // Reset box-shadow
                    index = (index + 1) % tiles.length; // Loop back to the first tile after the last one
                    triggerHoverEffect();
                }, 1800);
            }

            triggerHoverEffect();
        });
    </script>

</body>

</html>