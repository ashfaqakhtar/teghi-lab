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
</style>

<?php
include 'footer.php';
?>