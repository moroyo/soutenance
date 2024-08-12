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

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><p class="message-welcomed">Soyez libre d'echanger avec nous</p></div>

        <section class="ct-st-cl">

                <div class="left-corner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">

                    <p class="side-contact"><span class="ctact-cl"> Nous </span> serions ravis de répondre à toutes vos questions ou de discuter de vos besoins. N'hésitez pas à nous envoyer un message en utilisant le formulaire ci-dessous. Nous vous répondrons dans les plus brefs délais.</p>
                    
                </div><br>


                <div class="next-corner-cl">

                    <form class="form-clax">
            
                        <div class="align-inputs">

                            <p class="p-contact-classes">Nom</p><input type="text" class="input-classes left-side-classes">

                            <p class="p-contact-classes">Prénom</p><input type="text" class="input-classes left-side-classes">

                        </div>

                        <div class="align-inputs">

                            <p class="p-contact-classes">Nationalité</p><input type="text" class="input-classes left-side-classes">

                            <p class="p-contact-classes">Vous êtes nouveau ?</p><input type="text" class="input-classes right-classes">

                        </div>

                        <div class="align-inputs">

                            <p class="p-contact-classes">Email</p><input type="text" class="input-classes right-classes">

                            <p class="p-contact-classes">Téléphone</p><input type="text" class="input-classes right-classes"><br>

                        </div>

                        <button class="envoyer-claxx">Envoyer</button>

                    </form>

                </div>

       

       </section>
                

            @include('layouts.footer')



     

    <script>
     AOS.init();
    </script>

    </body>

</html>
