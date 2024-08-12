<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

      

        <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">

            <p class="message-welcome">Ne perdez pas de temps passez votre publication</p>

        </div>

        <div>
            <p></p>
        </div>

        <section class="">

             <div class="container text-center">

                <div class="row">

                   <form action="" method="post">
                    
                    @csrf

                    <div class="col">

                            <p class="pub-clax">lieu</p><input type="text" class="inpute-clax" name="lieu">

                            <p class="pub-clax">catégorie</p><input type="text" class="inpute-clax" name="categorie">

                            <p class="pub-clax">heure d'arrivée</p><input type="text" class="inpute-clax" name="heure_arrivee">

                            <p class="pub-clax">titre de la publication</p><input type="text" class="inpute-clax" name="titre_de_publication">

                            <p class="pub-clax">kilos disponible</p><input type="text" class="inpute-clax" name="kilos_disponile">

                            <p class="pub-clax">disponibilité</p><input type="text" class="inpute-clax" name="disponibilite">

                            </div>

                            <div class="col">

                            <p class="pub-clax">nom</p><input type="text" class="inpute-clax" name="nom">

                            <p class="pub-clax">prénom</p><input type="text" class="inpute-clax" name="prenom">

                            <p class="pub-clax">nationalité</p><input type="text" class="inpute-clax" name="nationalite">

                            <p class="pub-clax">ville de destination</p><input type="text" class="inpute-clax" name="ville_de_destination">

                            <p class="pub-clax">heure de départ</p><input type="text" class="inpute-clax" name="heure_depart">

                            <p class="pub-clax">ville de départ</p><input type="text" class="inpute-clax" name="ville_de_depart">



                            </div>

                   </form>

                    <center><button class="boutton-publier">Valider</button></center>

                </div>

            

            </div>   

        </section>
                

            @include('layouts.footer')



     

    <script>
     AOS.init();
    </script>

    </body>

</html>
