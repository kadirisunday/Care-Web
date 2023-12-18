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
    <div class="container-fluid services-single-page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        
    </div>
    <!-- Page Header End -->

    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="text-center">Personal Care at Absolute Care Agency </h1>
            <p class="">At Absolute Care Agency, our Personal Care services are meticulously designed to respect the dignity, independence, and individual preferences of our clients. Our professional caregivers provide compassionate assistance with daily living activities, ensuring comfort, safety, and well-being. Whether it's help with bathing, dressing, grooming, or meal preparation, our caregivers are trained to offer the support needed while encouraging as much independence as possible.</p>
            <p class="">Understanding that every individual's needs are unique, we work closely with clients and their families to develop personalized care plans. This collaborative approach ensures that we not only meet the physical needs of our clients but also nurture their emotional and social well-being. Our services are flexible, ranging from a few hours of assistance per day to around-the-clock care, adapting to the changing needs of our clients.</p>
            
        </div>
    </div>
    <!-- About Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col- bg-light">
                            <img class="img-fluid" src="./img/abt2.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <p class="">The essence of our Personal Care service lies in its commitment to enhancing the quality of life for our clients. We focus on building strong, trusting relationships between caregivers and clients, creating an environment of warmth and familiarity. Our caregivers are more than just service providers; they are companions, actively engaging with clients through conversation, activities, and shared interests.</p>
                    <p class="">Safety and health are paramount in our care approach. Our caregivers are trained to identify health and safety risks and take proactive steps to prevent accidents or injuries. They also assist with medication management, ensuring that clients take their prescriptions correctly and on time.</p>
                    <p class="">At Absolute Care Agency, we believe that receiving care in the familiar surroundings of one's home can have a significant positive impact on overall well-being. Our Personal Care services are designed to support this belief, providing care that is not only professional and reliable but also filled with compassion and respect.</p>
                    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


 

  <!-- Appoinment Start -->
  <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">We Ensure You Will Always Get The Best Result</h1>
                    <p>Explore our services or contact us for more information. At Absolute Care Agency, we are here to support you and your loved ones with exemplary care.</p>
                    


                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Online Appoinment</h2>
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
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Choose A Service</option>
                                    <option value="">Personal Care</option>
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
                                <label for="message">Message</label>
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