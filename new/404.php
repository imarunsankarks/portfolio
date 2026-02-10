<?php
/*
Template Name: Search result Template
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 error - Resurgent AV Integrators PVT Ltd - AV Solutions</title>


    <link rel="icon" type="image/png"
        href="<?php echo get_template_directory_uri(); ?>/assets/common/resurgent-logo.webp">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" rel="stylesheet"
        crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/header.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">


    <!-- Google Tag Manager -->
<!-- Google tag (gtag.js) --> <script async src="
https://www.googletagmanager.com/gtag/js?id=G-G8T4BE0P5K"></script>
<script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-G8T4BE0P5K'); </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="
https://www.googletagmanager.com/ns.html?id=GTM-T4T4B2C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header will be here  -->
    <?php include('header.php') ?>

    <div class="viewport">
        <main id="main">
            <!-- --------------------------------banner---------------------------------- -->
            <section class="common-banner sec-padding">
                <div class="container">
                    <div class="row position-relative justify-content-center align-items-center">
                        <div class="common-banner-text p-0 d-flex flex-column align-items-center">
                            <h1 class="common-banner-title wow animate__ animate__flipInX animate__one animated"
                                style="visibility: visible; animation-name: flipInX;">
                                <span>404</span> Error
                            </h1>
                            <h2 class="text-center common-banner-sub wow animate__ animate__fadeInUp animate__two animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                No page found</h2>
                            <a href="<?php echo home_url(); ?>"
                                class="back-home">Home &nbsp; <i class="fas fa-home-alt"></i></a>
                        </div>
                    </div>
                </div>
            </section>



            <?php include('footer.php') ?>
        </main>
    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" crossorigin="anonymous"></script>




    <script>
    new WOW().init();
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', async () => {
        window.addEventListener('scroll', await
            function() {
                let header = document.querySelector('#header');
                if (header) {
                    header.classList.toggle('remove', window.scrollY > 400);
                    header.classList.toggle('sticky', window.scrollY > 700);

                }
            });

        const toggleBar = document.querySelector('#hamburger');
        const pullRight = document.querySelector('ul.pull-right')
        if ($(window).width() < 991) {

            toggleBar.addEventListener('click', () => {
                pullRight.classList.toggle('open');
                $("#header .overlay").toggleClass("active");
            });

        }
    })


    let myWord = `let's talk`;

    let charsArray = [];

    let endElement = document.querySelector(".text");

    endElement.innerHTML = "";

    for (let i = 0; i <= myWord.length; i++) {
        let charSpan = document.createElement("p");

        charSpan.textContent = myWord[i];
        if (i === 5) {
            charSpan.textContent = '.';
        } else {
            charSpan.textContent = myWord[i];
        }

        endElement.appendChild(charSpan);

        charsArray.push(charSpan);
    }

    let endTl = gsap.timeline({
        repeat: -1,
        delay: 0.5,
        scrollTrigger: {
            trigger: ".end",
            start: "100%-=550px 100%",

        },
    });

    endTl.to(charsArray, {
        duration: 0.5,
        scaleY: 0.6,
        ease: "power3.out",
        stagger: 0.04,
        transformOrigin: "center bottom",
    });
    endTl.to(
        charsArray, {
            yPercent: -20,
            ease: "elastic",
            stagger: 0.03,
            duration: 0.8,
        },
        0.5
    );
    endTl.to(
        charsArray, {
            scaleY: 1,
            ease: "elastic.out(2.5, 0.2)",
            stagger: 0.03,
            duration: 1.5,
        },
        0.5
    );
    endTl.to(
        charsArray, {
            yPercent: 0,
            ease: "back",
            stagger: 0.03,
            duration: 0.8,
        },
        0.7
    );
    </script>


</body>

</html>