<?php
$title = "Teghi Clinical Laboratory  | About ";
$meta = "";
$metakeyword = "";
include "header.php";
?>


<section class="banner-section-background">
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7 col-md-12 hero-heading-box banner-box-position">
                <h1 class="banner-heading">Micro Biology Test</h1>
                <p class="sub-heading">Laboratory tests used to detect and identify bacteria, fungi, and other
                    microorganisms causing infections in the body.

                </p>
            </div>
        </div>
    </div>
</section>

<div class="spacing"></div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-section-text ">
                <h3 class="section-heading">About The Test</h3>
                <p class="section-para">
                    Microbiology tests are laboratory investigations that identify bacteria,
                    fungi, and other microorganisms responsible for infections in the body.
                </p>
                <p class="section-para">These tests help determine the exact cause of infection and guide appropriate
                    treatment by identifying the most effective antibiotics through culture and
                    sensitivity testing.</p>
                <p class="section-para">Microbiology testing plays a vital role in diagnosing infectious diseases,
                    monitoring treatment response, and preventing the spread of infections through
                    accurate and timely diagnosis.
                </p>
            </div>
            <div class="col-lg-6 about-section">
                <img class="img-fluid" src="./images/hematology.webp" alt="">
            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading ">
                    <span class="gradient-heading">Total Test Included </span>
                </h2>
            </div>

        </div>

        <div class="row mt-2 test-list">
            <div class="col-lg-6">
                <ul>
                    <li>Routine Culture and Sensitivity </li>
                    <li>Blood Culture</li>

                </ul>
            </div>

            <div class="col-lg-6">
                <ul>
                    <li>AFB Culture</li>
                </ul>
            </div>


            <div class="col-lg-12 price-info mt-3">
                <p style=" " class=""><b>Test Price :- 999/-</b> <span style="font-size: 12px;"> (* Price may vary based
                        on additional parameters)</span></p>
                <p class="">Report Time : 48–72 hours depending on culture growth and sensitivity results..</p>

            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-section-text">
                <h3 class="mb-3 section-heading">Who Should Take This Test?</h3>
                <ul>
                    <li class="list-font">Patients with suspected bacterial or fungal infections </li>
                    <li class="list-font">Individuals with persistent fever or recurrent infections </li>
                    <li class="list-font">Patients not responding to routine antibiotic treatment </li>
                    <li class="list-font">Individuals with suspected bloodstream or systemic infections </li>
                    <li class="list-font">Patients advised culture and sensitivity testing by doctors </li>
                    <li class="list-font">Pre-surgical or diagnostic evaluation for infectious diseases</li>
                </ul>
            </div>
            <div class="col-lg-6 who-should-take-image">
                <img class="img-fluid" src="./images/who-should-take-the-test.webp" alt="">
            </div>
        </div>
    </div>
</section>


<div class="spacing"></div>

<section>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <h1 class="section-heading text-center">Book your Appointment</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 about-section-text">
                <div class="appointment-info">

                    <h2 class="mb-2 heading-2">
                        Book Your Test at Home

                    </h2>

                    <p class=" text-muted sub-heading">
                        Safe, accurate, and hassle-free sample collection at your doorstep.
                    </p>

                    <ul class="appointment-features">
                        <li class="list-font">Certified and experienced phlebotomists</li>
                        <li class="list-font">Home sample collection available</li>
                        <li class="list-font">Accurate and reliable lab reports</li>
                        <li class="list-font">Same-day / 24-hour report delivery</li>
                        <li class="list-font">Hygienic and safety-compliant process</li>
                    </ul>

                    <div class="mt-4">
                        <p class="mb-1 heading-4">
                            Call us for Home Collection
                        </p>
                        <div class="d-flex book-apnmt-section-btn" style="gap:10px">
                            <a href="tel:+919892760973" class="btn button-primary w-25">
                                <i class="fa fa-phone"></i> Call
                            </a>
                            <a href="https://wa.me/919892760973" target="_blank" class="btn button-whatsapp w-25">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-5 col-sm-12">
                <?php
                include "contact-form.php";
                ?>
            </div>


        </div>
    </div>
</section>

<div class="spacing"></div>


<style>
    .banner-section-background {
        /* background: url('./images/package-details-banner.webp') no-repeat; */
        background: url('./images/pexels-pilanfilms-11589208.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .banner-section-background::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        z-index: 1;
    }


    .about-section img {
        border-radius: 20px;
    }

    .about-section-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .test-list {
        border-radius: 1.875rem;
        background: var(--occams-gradient, linear-gradient(146deg, #0C84BC 10.48%, #1658A5 86.16%));
        color: white;
        padding: 25px 0px;
    }

    .test-list ul {
        margin-bottom: 0px;

    }

    .who-should-take-image img {
        border: 1px solid var(--primary-color);
        border-radius: 20px;
    }

    .price-info {
        padding-left: 40px;
    }

    .price-info p {
        color: #ffffff;
        margin-bottom: 0px;
    }
</style>




<?php
include 'footer.php';
?>