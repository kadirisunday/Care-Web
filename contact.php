<?php include('header.php') ?>

<body>
    <!-- Spinner Start -->
  <div id="spinner"
class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div> 
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include('topbar.php') ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('nav.php') ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid contact-page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Get in Touch</h1>
                <p class="mb-5">Have questions or need assistance? Our team is ready to help. Here’s how you can reach us:</p>
            </div>
            <div class="row contact-info position-relative g-0 mb-5">
                <div class="col-lg-4">
                    <a href="tel:+44 7474144702" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-phone text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Call Us</h5>
                            <h6 class="text-white mb-0">+44 7474144702</h6>
                        </div>
                    </a>
                    
                </div>
                <div class="col-lg-4">
                    <a href="mailto:info@absolutescare.com" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-envelope text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Mail Us</h5>
                            <h6 class="text-white mb-0">info@absolutescare.com</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="tel:+0123456789" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-geo-fill text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">office</h5>
                            <h6 class="text-white mb-0">DA11 8LR, 108 Tennyson walk London </h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Contact us today</h1>
                    <p>Use our convenient online form for inquiries, feedback, or requests. We’re committed to responding promptly to your needs.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.717101897892!2d0.3426886766152706!3d51.42662317179507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8b5d93867538b%3A0xe7dde29a7a372639!2s108%20Tennyson%20Walk%2C%20Northfleet%2C%20Gravesend%20DA11%208LR%2C%20UK!5e0!3m2!1sen!2sng!4v1701338356222!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


       <!-- Footer start -->
    <?php include('footer.php') ?>

<!-- Footer ends -->


<!-- libaries -->
<?php include('libaries.php') ?>