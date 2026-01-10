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
                <h1 class="banner-heading">Hormone Test</h1>
                <p class="sub-heading">Blood tests used to measure hormone levels that regulate metabolism, growth,
                    reproduction, and overall hormonal balance in the body.
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
                    Hormone tests are blood tests that measure the levels of hormones produced by
                    various glands such as the thyroid, pituitary, adrenal, and reproductive glands.
                </p>
                <p class="section-para">These tests help diagnose hormonal imbalances related to thyroid disorders,
                    infertility, menstrual irregularities, growth problems, sexual health issues,
                    and metabolic conditions.</p>
                <p class="section-para">Hormone testing plays a vital role in monitoring treatment response, managing
                    chronic hormonal conditions, and maintaining overall endocrine health
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
            <div class="col-lg-4">
                <ul>
                    <li>T3 Total </li>
                    <li>T4 Total</li>
                    <li>TSH</li>
                    <li>Thyroid Profile Total (Total T3, T4, TSH) </li>
                    <li>T3 Free</li>
                    <li>T4 Free</li>
                </ul>
            </div>

            <div class="col-lg-4">
                <ul>
                    <li>Progesterone </li>
                    <li>Thyroid Profile Free (Free T3, Free T4, Ultrasensitive TSH))</li>
                    <li>FSH</li>
                    <li>LH</li>
                    <li>Prolactin </li>
                    <li>Testosterone (Total) </li>
                </ul>
            </div>

            <div class="col-lg-4">
                <ul>
                    <li>Oestradiol(E2)</li>
                    <li>HCG - Beta Subunit Titre</li>
                    <li>DHEAS</li>
                    <li>Human Growth Hormone</li>
                    <li>Parathyroid Hormone</li>
                    <li>Testosterone ( Free )</li>
                </ul>
            </div>


            <div class="col-lg-12 price-info mt-3">
                <p style=" " class=""><b>Test Price :- 999/-</b> <span style="font-size: 12px;"> (* Price may vary based
                        on additional parameters)</span></p>
                <p class="">Report Time : Same day or within 24–48 hours depending on test parameters..</p>

            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-section-text">
                <h3 class="mb-3 section-heading">Who Should Take This Test?</h3>
                <ul>
                    <li class="list-font">Individuals with suspected thyroid disorders</li>
                    <li class="list-font">Women with irregular periods, fertility issues, or hormonal imbalance </li>
                    <li class="list-font">Men with low testosterone levels or sexual health concerns </li>
                    <li class="list-font">Individuals experiencing fatigue, weight changes, or mood disturbances</li>
                    <li class="list-font">Patients being monitored for hormonal treatment or therapy </li>
                    <li class="list-font">Routine health and preventive hormonal screening</li>
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