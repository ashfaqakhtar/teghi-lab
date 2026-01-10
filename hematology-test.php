<?php
$title = "Teghi Clinical Laboratory  | About ";
$meta = "";
$metakeyword = "";
include "header.php";
?>


<section class="banner-section-background">
    <div class="container hero-content">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-7 col-md-12 hero-heading-box banner-box-position">
                <h1 class="banner-heading">Hematology Tests</h1>
                <p class="sub-heading">Comprehensive blood tests to evaluate overall health, detect disorders, and
                    monitor blood-related conditions.</p>
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
                    Hematology tests focus on the study of blood and blood-forming organs.
                    These tests help diagnose conditions such as anemia, infections, blood disorders,
                    clotting abnormalities, and immune system issues.
                </p>
                <p class="section-para">Hematology testing is essential
                    for routine health checkups as well as for monitoring chronic and acute conditions.</p>
                <p class="section-para">These tests play a crucial role in early diagnosis and timely treatment of
                    blood-related conditions.
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
                    <li class="list-font">CBC (Complete Blood Count)</li>
                    <li class="list-font">ESR</li>
                    <li class="list-font">Hemoglobin (Hb)</li>
                    <li class="list-font">Platelet Count</li>
                    <li class="list-font">BT / CT</li>
                    <li class="list-font">PT</li>
                    <li class="list-font">PTT</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <ul>
                    <li class="list-font">G6PD</li>
                    <li class="list-font">Reticulocyte Count</li>
                    <li class="list-font">Malaria Parasite (MP)</li>
                    <li class="list-font">Malaria Antigen</li>
                    <li class="list-font">Blood Group & Rh Factor</li>
                    <li class="list-font">Rh Antibody Titre</li>
                    <li class="list-font">Coomb’s Test (Direct & Indirect)</li>
                </ul>
            </div>

            <div class="col-lg-12 price-info mt-3">
                <p style=" " class=""><b>Test Price :- 999/-</b> <span style="font-size: 12px;"> (* Price may vary based
                        on additional parameters)</span></p>
                <p class="">Report Time : Same Day or within 24 Hours depending on test parameters.</p>

            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-section-text">
                <h3 class="mb-3 section-heading">Who Should Take This Test?</h3>
                <ul>
                    <li class="list-font">Fever of unknown origin</li>
                    <li class="list-font">Suspected infections</li>
                    <li class="list-font">Weak immunity or frequent illness</li>
                    <li class="list-font">Monitoring autoimmune conditions</li>
                    <li class="list-font">Pre-employment or routine health checkups</li>
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
                        Book Your Blood Test at Home
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