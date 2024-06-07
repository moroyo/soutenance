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

            <div><p class="message-welcome">Contactez nous quand vous le voulez</p></div>

        <section class="cta-cl">

                <div>

                    <form class="form-clax">

                       <div class="row">

                            <div class="col-sm-6">

                                <p class="p-contact-classes left-side-classes">Nom</p><input type="text" class="input-classes left-side-classes">

                                <p class="p-contact-classes left-side-classes">Prénom</p><input type="text" class="input-classes left-side-classes">

                                <p class="p-contact-classes left-side-classes">Nationalité</p><input type="text" class="input-classes left-side-classes">

                            </div>

                            <div class="col-sm-6">

                                <p class="p-contact-classes right-side-classes">Vous êtes nouveau ?</p><input type="text" class="input-classes right-classes">

                                <p class="p-contact-classes right-side-classes">Email</p><input type="text" class="input-classes right-classes">

                                <p class="p-contact-classes right-side-classes">Téléphone</p><input type="text" class="input-classes right-classes">

                            </div>

                       </div>


                    </form>

                </div>

        </section>
                

            @include('layouts.footer')



     

    <script>
     AOS.init();
    </script>

    </body>

</html>
