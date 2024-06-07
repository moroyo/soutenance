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

        

        <section class="cr-cl">

            <div class="wrapper">
            
            <div class="carousel">

            <img src="picture/c1.jpg" alt="img" draggable="false">
            <img src="picture/c2.jpg" alt="img" draggable="false">
            <img src="picture/c4.jpg" alt="img" draggable="false">
            <img src="picture/c5.jpg" alt="img" draggable="false">
            <img src="picture/c6.jpg" alt="img" draggable="false">
            <img src="picture/c7.jpg" alt="img" draggable="false">
            <img src="picture/c8.jpg" alt="img" draggable="false">
            <img src="picture/c9.jpg" alt="img" draggable="false">
            <img src="picture/c10.jpg" alt="img" draggable="false">

            </div>

            <i id="left" class="bi bi-arrow-left-short"></i>

            <i id="right" class="bi bi-arrow-right-short"></i>

            </div>

        </section>


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

    gsap.from('p',1.2,{opacity:0,y:-80,delay:0.9})

    /* CAROUSEL CODE */
                const carousel = document.querySelector(".carousel"),
            firstImg = carousel.querySelectorAll("img")[0],
            arrowIcons = document.querySelectorAll(".wrapper i");

            let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

            const showHideIcons = () => {
                // showing and hiding prev/next icon according to carousel scroll left value
                let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
                arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
                arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
            }

            arrowIcons.forEach(icon => {
                icon.addEventListener("click", () => {
                    let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
                    // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                    carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                    setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
                });
            });

            const autoSlide = () => {
                // if there is no image left to scroll then return from here
                if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

                positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
                let firstImgWidth = firstImg.clientWidth + 14;
                // getting difference value that needs to add or reduce from carousel left to take middle img center
                let valDifference = firstImgWidth - positionDiff;

                if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
                    return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
                }
                // if user is scrolling to the left
                carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
            }

            const dragStart = (e) => {
                // updatating global variables value on mouse down event
                isDragStart = true;
                prevPageX = e.pageX || e.touches[0].pageX;
                prevScrollLeft = carousel.scrollLeft;
            }

            const dragging = (e) => {
                // scrolling images/carousel to left according to mouse pointer
                if(!isDragStart) return;
                e.preventDefault();
                isDragging = true;
                carousel.classList.add("dragging");
                positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
                carousel.scrollLeft = prevScrollLeft - positionDiff;
                showHideIcons();
            }

            const dragStop = () => {
                isDragStart = false;
                carousel.classList.remove("dragging");

                if(!isDragging) return;
                isDragging = false;
                autoSlide();
            }

            carousel.addEventListener("mousedown", dragStart);
            carousel.addEventListener("touchstart", dragStart);

            document.addEventListener("mousemove", dragging);
            carousel.addEventListener("touchmove", dragging);

            document.addEventListener("mouseup", dragStop);
            carousel.addEventListener("touchend", dragStop);
            

    </script>   

    <script>

     AOS.init();

    </script>


