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
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="{{ asset('js/kep.js') }}"></script>

    </head>

    <body>

        <header>     
           
                <div class="logo-brand">

                  <img src="{{ asset('picture/brand.png') }}" class="pi-cl">

                </div>            

                <ul class="nabvar">

                    <li class="li-cl"><a href="{{ route('publier') }}">publier</a></li>
                    <li class="li-cl"><a href="{{ route('annonce') }}">annonce</a></li>
                    <li class="li-cl"><a href="{{ route('discuter') }}">discuter</a></li>
                    <li class="li-cl"><a href="{{ route('paiement') }}">paiement</a></li>
                    <li class="li-cl"><a href="{{ route('contact') }}">contact</a></li>
                    
                </ul>

                @if (Route::has('login'))

                <div class="auth">
    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded">Register</a>
                        @endif
                    @endauth

                </div>

                @endif


                <div class="toggle">

                   <i class="bi bi-triangle-fill"></i>

                </div> 

        </header>


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
