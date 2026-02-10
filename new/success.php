<?php
/*
Template Name: Success Stories Template
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success Stories - Resurgent AV Integrators PVT Ltd - AV Solutions</title>

    <meta name="description"
        content="Explore our success stories, featuring a range of AV integration projects and the impactful outcomes they've achieved, providing insights into our expertise and capabilities.">

    <link rel="canonical" href="https://resurgent.co.in/success-stories/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Success Stories - Resurgent AV Integrators PVT Ltd - AV Solutions" />
    <meta property="og:description"
        content="Explore our success stories, featuring a range of AV integration projects and the impactful outcomes they've achieved, providing insights into our expertise and capabilities." />
    <meta property="og:url" content="https://resurgent.co.in/success-stories/" />
    <meta property="og:site_name" content="Resurgent AV Integrators PVT Ltd - AV Solutions" />
    <meta property="article:publisher" content="https://www.facebook.com/resurgent.co.in/" />
    <meta property="og:image"
        content="<?php echo get_template_directory_uri(); ?>/assets/common/success-stories.webp" />
    <meta property="og:image:width" content="2048" />
    <meta property="og:image:height" content="977" />
    <meta property="og:image:type" content="image/webp" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@ResurgentAV" />


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
    <link href="<?php echo get_template_directory_uri(); ?>/css/success.css" rel="stylesheet">


    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">


    <!-- Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="
https://www.googletagmanager.com/gtag/js?id=G-G8T4BE0P5K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-G8T4BE0P5K');
    </script>
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
    <div class="modal fade modal-form" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="section-sub-heading" id="exampleModalLongTitle">Complete the form for case study</h5>

                </div>
                <div class="modal-body">
                    <form id="pdfForm" onsubmit="return false;">
                        <input type="text" id="name" name="name" placeholder="Your Name"><br><br>
                        <input type="email" id="email" name="email" placeholder="Mail id"><br><br>
                        <input type="number" id="phone" name="phone" placeholder="Mobile number"><br><br>
                        <label for="caseStudy">Choose case study:</label>
                        <select id="caseStudy" name="caseStudy">
                            <option value="caseStudy3">BIAL</option>
                            <option value="caseStudy1">Azim Premji University</option>
                            <option value="caseStudy2">WPP</option>
                        </select><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn button-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn download-button" onclick="downloadPDF()">Download PDF</button>
                </div>
            </div>
        </div>
    </div>

    <div class="viewport">
        <main id="main">
            <!-- --------------------------------banner---------------------------------- -->
            <section class="common-banner sec-padding">
                <div class="container">
                    <div class="row position-relative justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class="common-banner-text p-0">
                                <h1 class="common-banner-title wow animate__animated animate__flipInX animate__one">
                                    Success</h1>
                                <h1 class="common-banner-title wow animate__animated animate__flipInX animate__one">
                                    Stories</h1>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <div class="banner-shape">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/common/success-stories.webp"
                                    alt="">
                                <div class="circle-1 wow animate__animated animate__zoomIn animate__two"></div>

                                <div class="circle-2 wow animate__animated animate__zoomIn animate__three"></div>
                            </div>
                        </div>


                        <div class="scroll">
                            <img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/common/banner-arrow.svg" alt="">
                            <p>scroll</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec-padding">
                <div class="container">
                    <div class="row pt-4 pb-5 align-items-center sectors-head">
                        <div class="col-md-6 br-1">
                            <h2 class="mb-0 section-title">Explore our<br> success stories </h2>
                        </div>
                        <div class="col-md-6">
                            <p class="ps-md-5 mb-0">Explore our success stories, featuring a range of AV integration
                                projects and the impactful outcomes they've achieved, providing insights into our
                                expertise and capabilities.</p>
                        </div>

                    </div>
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <div class="stories-card">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/success/bial.webp" alt="">
                                <div class="content">
                                    <h3>BIAL</h3>
                                    <p>Built to handle 25 million passengers per annum in Phase 1 and 45 million
                                        passengers per annum in......</p>
                                    <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Get full article &nbsp; <i class="fas fa-arrow-right"></i>
                                    </button>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stories-card">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/success/azim.webp" alt="">
                                <div class="content">
                                    <h3>Azim Premji University</h3>
                                    <p>Azim Premji University was a unique AV project for Resurgent. With 67 classrooms,
                                        2 Seminar Halls with 250-seater capacity......</p>
                                    <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Get full article &nbsp; <i class="fas fa-arrow-right"></i>
                                    </button>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stories-card">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/success/wpp.webp" alt="">
                                <div class="content">
                                    <h3>WPP</h3>
                                    <p>For Resurgent, WPP Mumbai was a unique and high visibility project implemented
                                        which catered to
                                        ......</p>
                                    <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Get full article &nbsp; <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </section>


            <?php include('footer.php') ?>
            <div class="d-none d-md-block" style="height: 30px; background:#001533"></div>

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

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>



    <script>
    new WOW().init();
    </script>

    <script>
    const formButtons = document.querySelectorAll('.form-btn');
    const formModal = document.querySelector('.modal-form');
    const formClose = document.querySelector('.button-close');


    formButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            formModal.classList.add('show', 'd-block');
        });
    });
    formClose.addEventListener('click', function() {
        formModal.classList.remove('show', 'd-block');
    });
    </script>
    <script>
    // function isValidEmail(email) {
    //     var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     return emailRegex.test(email);
    // }

    function isValidPhoneNumber(phoneNumber) {
        var phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phoneNumber);
    }

    function downloadPDF() {
        var caseStudy = document.getElementById('caseStudy').value;

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;


        if (name.trim() === '' || email.trim() === '' || phone.trim() === '') {
            alert('Please fill in all fields.');
            return false;
        }
        // if (!isValidEmail(email)) {
        //     alert('Please enter a valid email address.');
        //     return false;
        // }

        if (!isValidPhoneNumber(phone)) {
            alert('Please enter a valid phone number (10 digits only).');
            return false;
        }

        var pdfUrls = {
            'caseStudy1': '<?php echo get_template_directory_uri(); ?>/assets/success/APU-case-study.pdf',
            'caseStudy2': '<?php echo get_template_directory_uri(); ?>/assets/success/WPP-case-study.pdf',
            'caseStudy3': '<?php echo get_template_directory_uri(); ?>/assets/success/BIAL-case-study.pdf'
        };

        var pdfUrl = pdfUrls[caseStudy];
        if (pdfUrl) {
            // Open the PDF in a new tab/window
            window.open(pdfUrl, '_blank');

            // Send form data to form-success.php using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo get_template_directory_uri(); ?>/form-success.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Define the data to send
            var formData = 'name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&phone=' +
                encodeURIComponent(phone);

            // Handle the AJAX response
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle success
                    console.log('Form data sent successfully.');
                } else {
                    // Handle error
                    console.error('Error sending form data.');
                }
            };

            // Send the AJAX request
            xhr.send(formData);
            // Clear the form fields
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';

            document.getElementById('phone').value = '';

        } else {
            alert('Invalid case study selection.');
        }


    }
    </script>


</body>

</html>