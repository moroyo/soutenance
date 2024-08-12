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

         <div  class="contento">

            <p class="cieso">Bienvenue sur le site de </p>

            <p class="bie cieco">SWAP</p>

            <div class="bieno">
                
            <div class="row ">

                <div class="col-8">

                    <p class="classico">

                    <span class="span-field"> Un service client</span> exceptionnel, et des solutions adaptées à vos besoins.<span class="span-field">N'hésitez pas</span> à naviguer à travers nos différentes sections et à nous contacter pour toute question ou <span class="span-field">assistance</span>.
                    
                    </p>

                </div>

                <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000" class="col-4">

                <img src="{{ asset('picture/pic.png') }}" class="modif-image">

                </div>

                </div>

            </div>

         </div>

        </section>

        <section class="clax-cards-done">

        <div class="row">

            <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000"class="bieno">

               <div class="bulles">

                    <p class="bulles-p-classes">

                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Aliquid accusamus doloremque libero dolorem, totam at, culpa
                        saepe hic deleniti quisquam quasi obcaecati delectus numquam 
                        debitis nesciunt nobis! Aut, doloribus ad?

                    </p>

               </div>  

            </div>

            <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000"class="bieno">
                  
               <div class="bulles">

                    <p class="bulles-p-classes">

                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Aliquid accusamus doloremque libero dolorem, totam at, culpa
                        saepe hic deleniti quisquam quasi obcaecati delectus numquam 
                        debitis nesciunt nobis! Aut, doloribus ad?

                    </p>

               </div>

            </div>


        </div>


        <div class="row">

            <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000"class="bieno">

                <div class="bulles">

                    <p class="bulles-p-classes">

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aliquid accusamus doloremque libero dolorem, totam at, culpa
                    saepe hic deleniti quisquam quasi obcaecati delectus numquam 
                    debitis nesciunt nobis! Aut, doloribus ad?

                    </p>

                </div>  

            </div>

            <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000"class="bieno">
            
                <div class="bulles">

                    <p class="bulles-p-classes">

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aliquid accusamus doloremque libero dolorem, totam at, culpa
                    saepe hic deleniti quisquam quasi obcaecati delectus numquam 
                    debitis nesciunt nobis! Aut, doloribus ad?

                    </p>

                </div>

            </div>


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
