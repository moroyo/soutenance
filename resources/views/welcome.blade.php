<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <link rel="preconnect" href="https://fonts.bunny.net">

        <link rel="stylesheet" href="{{ asset('css/kep.css') }}">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="{{ asset('js/kep.js') }}"></script>
        
    </head>

    <body>

    @include('layouts.menu')

        
        <section class="hoop">

         <div class="contento">

            <p class="cieso">Bienvenue sur le site de </p>

            <p class="bie cieco">SWAP</p>

            <p class="bieno">
                
                Nous sommes ravis de vous accueillir sur notre plateforme, où nous nous efforçons de vous offrir la meilleure expérience possible. Que vous soyez ici pour découvrir nos produits, en savoir plus sur nos services, ou simplement explorer nos contenus, nous espérons que vous trouverez tout ce dont vous avez besoin.

                Notre équipe est dédiée à vous fournir des informations précises, un service client exceptionnel, et des solutions adaptées à vos besoins. N'hésitez pas à naviguer à travers nos différentes sections et à nous contacter pour toute question ou assistance.

            </p>

         </div>

        </section>

        @include('layouts.carousel')  

        @include('layouts.footer')



        <script>

            document.addEventListener('DOMContentLoaded', () => {
            let menu = document.querySelector('.bi-triangle-fill');
            let navbar = document.querySelector('ul');

            menu.onclick = () => {
            console.log('Menu clicked'); // Débogage
            menu.classList.toggle('bi-triangle-fill');
            menu.classList.toggle('bi-triangle-fill');
            navbar.classList.toggle('open');
        };
        });

        </script> 

    <script>
     AOS.init();
    </script>

    </body>

</html>
