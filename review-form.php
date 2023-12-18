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

    
    <!-- Appoinment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg- wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Drop Your Review</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Position">
                                <label for="mobile">Position</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Personal Care</option>
                                    <option value="">Domiciliary Care</option>
                                    <option value="">Complex Care</option>
                                    <option value="">Supported Living</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Review</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->


      <!-- Footer start -->
      <?php include('footer.php') ?>

<!-- Footer ends -->


<!-- libaries -->
<?php include('libaries.php') ?>