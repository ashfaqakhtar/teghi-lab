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
                <h1 class="banner-heading">About us</h1>
                <p class="sub-heading">Advanced clinical testing with precision, reliability, and care you can trust.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Section Start -->
<section class="aboutSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="aboutContent">
                    <h5 class="secSubTitle heebo">About Us</h5>
                    <h2 class="secTitle">
                        A trusted leader in diagnostic and health testing
                    </h2>
                    <p>
                        We provide comprehensive blood tests, preventive health checkups, and ECG services using
                        advanced diagnostic technology. Our focus on accuracy, hygiene, and timely reporting ensures
                        dependable results that support better healthcare decisions.
                    </p>
                    <div class="hr"></div>
                    <div class="row mb43">
                        <div class="col-lg-12 col-xl-6">
                            <div class="iconBox01">
                                <i class="laf-F4W0Q01"></i>
                                <h3>
                                    Largest General Diagnostic Tests
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="iconBox01 ib01Last">
                                <i class="laf-lHEkBa01"></i>
                                <h3>
                                    Connecting You with World-Class Support
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="aboutImg text-right">
                    <img src="images/home1/1.jpg" alt="" />
                    <div class="expCounter">
                        <span class="counters" data-count="25" data-suffix="" data-format="plain">05</span>
                        <span>Years of Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<div class="spacing"></div>

<section class="gallery-section">
    <div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="section-heading text-center">Gallery</h1>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="about-slider">

                    <div class="slide-item">
                        <img src="./images/slide-1.jpeg" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./images/slide-2.jpeg" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./images/slide-3.jpeg" alt="">
                    </div>

                    <div class="slide-item">
                        <img src="./images/slide-4.jpeg" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

<div class="spacing"></div>



<style>
    .banner-section-background {

        background: url('./images/about-banner-image.webp') no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .banner-section-background::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(1px);
        -webkit-backdrop-filter: blur(6px);
        z-index: 1;
    }

    /* Slider wrapper */
    .about-slider {
        max-width: 900px;
        /* slider center width */
        margin: 0 auto;
    }

    /* Each slide */
    .about-slider .slide-item {
        width: 100%;
        height: 420px;
        /* SAME height for all images */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 16px;
    }

    /* Image control */
    .about-slider .slide-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* IMPORTANT */
        display: block;
    }

    .about-slider .slick-dots {
    bottom: -35px;
}

.about-slider .slick-dots li {
    width: auto;
    height: auto;
    margin: 0 6px;
}

.about-slider .slick-dots li button {
    padding: 0;
    width: 8px;
    height: 8px;
}

.about-slider .slick-dots li button:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    background: #C7D7EA;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    opacity: 1;
}

/* ACTIVE DOT – CENTERED ORANGE LINE */
.about-slider .slick-dots li.slick-active button:before {
    width: 24px;
    height: 6px;
    background: linear-gradient(90deg, #EF6A24 0%, #F99D3C 100%);
    border-radius: 10px;
}


    /* Mobile height */
    @media (max-width: 768px) {
        .about-slider .slide-item {
            height: 260px;
        }
    }
</style>

<?php
include 'footer.php';
?>