<?php
$title = "Teghi Clinical Laboratory  | About ";
$meta = "";
$metakeyword = "";
include "header.php";
?>


<section class="banner-section">

    <video class="hero-video" autoplay muted loop playsinline>
        <source src="./videos/contact-page.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7 col-md-12 hero-heading-box banner-box-position">
                <h1 class="heading-1">Contact us</h1>
                <p class="sub-heading">Get in touch with us for test bookings, queries, and support.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-7 col-md-12 contact-details-box">
                <h1 class="heading-1">Teghi Clinical Laboratory</h1>


                <div class="contact-info-box">
                    <div>
                        <i class="fa-solid fa-location-dot logo-color"></i>
                    </div>
                    <div>
                        <h6 class="heading-4">Lab Address</h6>
                        <p>4W38+G28, Vikhroli Park Site Rd Number 1, Vikhroli Park Site, Parksite Colony, Vikhroli
                            West,
                            Mumbai, Maharashtra 400079</p>
                    </div>
                </div>

                <div class="contact-info-box">
                    <div>
                        <i class="fa-solid fa-phone logo-color"></i>
                    </div>
                    <div>
                        <h6 class="heading-4">Phone Number</h6>
                        <p>+91 9892770973</p>
                    </div>
                </div>

                <div class="contact-info-box">
                    <div>
                        <i class="fa-regular fa-envelope logo-color"></i>
                    </div>
                    <div>
                        <h6 class="heading-4">Email</h6>
                        <p>contact@teghilab.com</p>
                    </div>
                </div>


            </div>

            <div class="col-lg-5 col-md-12">
                <?php
                include "contact-form.php";
                ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="map-container">
                    <h1 class="heading-1 mt-2 mb-3 text-center">Visit Our Laboratory</h1>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0884270713927!2d72.91250587520607!3d19.103776282106484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7c44813f2c5%3A0x61d83279413b3539!2sTEGHI%20Clinical%20Laboratory!5e0!3m2!1sen!2sin!4v1766595622811!5m2!1sen!2sin"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include 'footer.php';
?>