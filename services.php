<?php include('header.php') ?>

<body>
    <!-- Spinner Start -->
  <!-- <div id="spinner"
class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>  -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include('topbar.php') ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('nav.php') ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid services-page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        
    </div>
    <!-- Page Header End -->

    
   <!-- Service Start -->
   <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Services</h1>
                <p class="mb-5">At Absolute Care Agency, our services are designed to cater to a wide range of needs, each delivered with the same level of care and attention. From supporting individuals with learning disabilities to providing comprehensive dementia care, our services include:</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="mb-4">
                            <img src="./img/icons_Learning.png" alt="" srcset="" height="150px" width="150px">
                        </div>
                        <h5 class="mb-3">Personal Care</h4>
                            <p class="mb-4">At Absolute Care Agency, our Personal Care services are meticulously designed to respect the dignity, independence, and individual preferences of our clients.</p>
                        <a class="btn btn-light px-3" href="./Personal_Care.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="mb-4">
                            <img src="./img/icons_Outreach.png" alt="" srcset="" height="150px" width="150px">
                        </div>
                        <h5 class="mb-3">Domiciliary Care</h4>
                            <p class="mb-4">Absolute Care Agency's Domiciliary Care  bring compassion, companionship, and a sense of security into the homes of those who need it. </p>
                        <a class="btn btn-light px-3" href="./Domiciliary_Care.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="mb-4">
                            <img src="./img/icons_Mental.png" alt="" srcset="" height="150px" width="150px">
                        </div>
                        <h5 class="mb-3">Complex Care</h4>
                            <p class="mb-4">Complex Care services at Absolute Care Agency are tailored for individuals with significant medical needs, requiring specialized care and attention.</p>
                        <a class="btn btn-light px-3" href="./Complex_Care.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="mb-4">
                            <img src="./img/icons_Dementia.png" alt="" srcset="" height="150px" width="150px">
                        </div>
                        <h5 class="mb-3">Supported Living</h4>
                            <p class="mb-4">Absolute Care Agency are designed to empower individuals to live as independently as possible, with the support they need to thrive in their own homes.</p>
                        <a class="btn btn-light px-3" href="./Supported_Living.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Service End -->


  <!-- Testimonial Start -->
  <div class="container-fluid testimonial py-5">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-4">What Clients Say About Our Services!</h1>
                    <p class="text-white mb-5">Hear the voices of those who've entrusted us with their care or that of their loved ones. Our testimonials reflect our unwavering commitment to excellence and the impactful difference we make in the lives of those we serve.</p>
                    <a href="" class="btn btn-primary py-3 px-5">More Testimonials</a>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white p-5">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Hear the voices of those who've entrusted us with their care or that of their loved ones. Our testimonials reflect our unwavering commitment to excellence and the impactful difference we make in the lives of those we serve.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial-1.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Client Name</h5>
                                        <span class="text-primary">Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Hear the voices of those who've entrusted us with their care or that of their loved ones. Our testimonials reflect our unwavering commitment to excellence and the impactful difference we make in the lives of those we serve.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="img/testimonial-2.jpg" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Client Name</h5>
                                        <span class="text-primary">Profession</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


     <!-- Footer start -->
     <?php include('footer.php') ?>

<!-- Footer ends -->


<!-- libaries -->
<?php include('libaries.php') ?>