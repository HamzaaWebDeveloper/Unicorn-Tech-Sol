<?php 

include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Favicon -->
<link rel="shortcut icon" href="./assets/logo/logo-removebg-preview.png" type="image/x-icon">
<!-- end -->
<!-- Style.css -->
<link rel="stylesheet" href="./assets/css/style.css">
<!-- End -->
<!-- Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- End -->
<link rel="stylesheet" href="assets/css/style.css">
<!-- owl carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- End -->
<!-- Aos Animation -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- End -->
<!-- Sweet Alert -->
<link rel="stylesheet" href="sweetalert2.min.css">
<!-- End -->
<title>Unicorn Tech Solutions</title>
</head>
<body>

<!-- Navbar -->

<div id="particles-js"></div> 

    <nav class="navbar navbar-expand-lg bg-transparent" >
        <div class="container">
          <a class="navbar-brand text-light mb-4" href="#">Unicorn Tech Solutions</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
         
            <div class="d-flex mt-3">
                <button class="btn btn-outline-light btn-css-nav">Get Hired</button>
                
              </div>
          </div>
     
          
        </div>
      </nav>

</div>
   
<!-- End -->


  <!-- Body -->
<div class="main" id="home">

<h1 class=" Title-css " data-aos="fade-up">Unicorn Tech Solutions</h1>
<p class="text-light" data-aos="fade-up">Team of <span class="text-light"  id="rex"></span></p>
<div class="text-center" >
<a href="#services"><button type="button" class="btn btn-css" data-aos="fade-up">Get Started</button></a>
</div>
</div>
  <!-- End -->

<!-- Services -->

<div class="container" id="services">

<p class="Services-heading h1" data-aos="fade-up">Services</p>
<p class="Services-tagline" data-aos="fade-up">Empowering Your Success Through Innovative Solutions</p>



<div class="row">
<div class="owl-carousel mt-5 mb-5 "data-aos="fade-up">

    <div class="col-lg-4">
<div class="card " style="width: 18rem;height: 20rem;">
    <div class="w-50 mx-auto">
        <img class="card-img-top img-fluid" src="./assets/services/seo.png" class="card-img" alt="Seo">
    </div>
  <div class="card-body">
    <h4 class="card-title text-center">Seo</h4>
    <p class="card-text fw-bold card-des">Key Features:-

        <li class="feature-css">Boost search visibility with targeted keywords.
            Ensure your content aligns with what users search for.</li>
      
    </p>
  </div>
</div>
 </div>

 <div class="col-lg-4">
    <div class="card " style="width: 18rem;height: 20rem;">
        <div class="w-50 mx-auto">
            <img class="card-img-top img-fluid" src="./assets//services/graphics.png" class="card-img" alt="Graphics Designing">
        </div>
      <div class="card-body">
        <h4 class="card-title text-center">Graphics Designing</h4>
        <p class="card-text fw-bold card-des">Key Features:-
    
            <li class="feature-css">Graphic design communicates messages through visual elements, combining aesthetics with creativity to engage and inform effectively.</li>
         
        </p>
      </div>
    </div>
     </div>


     <div class="col-lg-4">
        <div class="card " style="width: 18rem;height: 20rem;">
            <div class="w-50 mx-auto">
                <img class="card-img-top img-fluid" src="./assets/services/web.png" class="card-img" alt="Web Development">
            </div>
          <div class="card-body">
            <h4 class="card-title text-center">Web Development</h4>
            <p class="card-text fw-bold card-des">Key Features:-
        
                <li class="feature-css">Web development involves coding and programming to create functional websites that perform tasks and interact with users.</li>
            </p>
          </div>
        </div>
         </div>



         <div class="col-lg-4">
            <div class="card " style="width: 18rem;height: 20rem;">
                <div class="w-50 mx-auto">
                    <img class="card-img-top img-fluid" src="./assets/services/android.png" class="card-img" alt="App Development">
                </div>
              <div class="card-body">
                <h4 class="card-title text-center">App Development</h4>
                <p class="card-text fw-bold card-des">Key Features:-
            
                    <li class="feature-css"> App development is the creation of user-friendly, interactive interfaces that provide a seamless and engaging user experience.</li>
                </p>
              </div>
            </div>
             </div>



             <div class="col-lg-4">
                <div class="card " style="width: 18rem;height: 20rem;">
                    <div class="w-50 mx-auto">
                        <img class="card-img-top img-fluid" src="././assets/services/twitch.png" class="card-img" alt="Streaming Designs">
                    </div>
                  <div class="card-body">
                    <h4 class="card-title text-center">Streaming Designs</h4>
                    <p class="card-text fw-bold card-des">Key Features:-
                
                        <li class="feature-css">Twitch streaming designs is the incorporation of visually appealing overlays and graphics that enhance the overall presentation of a stream and engage viewers.</li>
                    </p>
                  </div>
                </div>
                 </div>




                 <div class="col-lg-4">
                    <div class="card " style="width: 18rem;height: 20rem;">
                        <div class="w-50 mx-auto">
                            <img class="card-img-top img-fluid" src="./assets/services/video.png" class="card-img" alt="Video Editing">
                        </div>
                      <div class="card-body">
                        <h4 class="card-title text-center">Video Editing</h4>
                        <p class="card-text fw-bold card-des">Key Features:-
                    
                            <li class="feature-css">video editing is the ability to manipulate and arrange video and audio clips to create a cohesive and engaging narrative or visual experience.</li>
                        </p>
                      </div>
                    </div>
                    
                     </div>

                     <div class="col-lg-4">
                      <div class="card " style="width: 18rem;height: 20rem;">
                          <div class="w-50 mx-auto">
                              <img class="card-img-top img-fluid" src="./assets/services/marketing.png" class="card-img" alt="Digital Marketing">
                          </div>
                        <div class="card-body">
                          <h4 class="card-title text-center">Digital Marketing</h4>
                          <p class="card-text fw-bold card-des">Key Features:-
                      
                              <li class="feature-css">Measurable Results: Track, analyze, and optimize campaigns with real-time data for better ROI and decision-making.</li>
                          </p>
                        </div>
                      </div>
                      
                       </div>
                     
</div>

<p class="text-secondary text-center slide-text"data-aos="fade-up">Swipe to view more services</p>

</div>
</div>
<!-- End -->

<!-- Banner -->


<div class="row mt-3">
<div class="col-lg-6 banner-sec-1" >
<div class="container"data-aos="fade-right">
<div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">  <h3 class="banner-heading  display-5">Streaming Overlays</h3>
    <p class="banner-text mt-3 ">Transform Your Stream, Captivate Your Audience: Elevate Your Content with Stunning Streaming Overlays.</p></div>
    <div class="col-lg-1"></div>
</div>
</div>
</div>
<div class="col-lg-6 banner-sec-2">
  <img src="./assets/banner/banner.png" class="img-fluid "data-aos="fade-left" alt="">
</div>

</div>

<!-- End -->

<!-- Testimonials -->

 <p class="Testimonial-heading h1 mt-3" id="testimonials">Testimonials</p>
<p class="Testimonial-tagline">Hear What Our Happy Customers Have to Say</p> 

<div class="container">
<div class="row">
  
  <div class="col-lg-6 mt-3">
    <img src="./assets/testimonials//download (1).png" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 col-md-12 mt-3">
    <img src="./assets/testimonials//download (2).png" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 mt-3 col-md-12">
    <img src="./assets/testimonials//download (3).png" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 col-md-12 mt-3">
    <img src="./assets/testimonials//download (4).png" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 mt-3 col-md-12">
    <img src="./assets//testimonials//4.jpg" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 mt-3 col-md-12">
    <img src="./assets/testimonials//1.jpg" class="img-fluid"  alt="">
  </div>

  
  <div class="col-lg-6 mt-3 col-md-12">
    <img src="./assets/testimonials//2.jpg" class="img-fluid"  alt="">
  </div>

  <div class="col-lg-6 mt-3 col-md-12">
    <img src="./assets/testimonials//7.jpg" class="img-fluid"  alt="">
  </div>
 

</div>
</div>


<!-- End -->



<!-- Portfolio Start  -->

<p class="Testimonial-heading h1 mt-3" id="portfolio">Portfolio</p>
<p class="Testimonial-tagline">Crafting Dreams into Reality</p> 

<div class="container mt-5">
<div class="tab">
  <div class="text-center">
  <button class="tablinks active" id="defaultOpen" onclick="openCity(event, 'London')">Graphics Design</button>
  <button class="tablinks ms-1" onclick="openCity(event, 'Paris')">Video Editing</button>
  <button class="tablinks ms-1" onclick="openCity(event, 'Tokyo')">Web Development</button>
</div>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent ">

 <div class="row">


 <div class="col-lg-4 image-container  mt-5" data-aos="fade-up">
  <img src="./assets/portfolio/1.jpg" class="img-fluid image-hover" alt="Image">
  <div class="overlay">
    <button class="btn">View Details</button>
  </div>
    </div>

  <div class="col-lg-4 image-container  mt-5"  data-aos="fade-up">
  <img src="./assets/portfolio/2.jpg" class="img-fluid image-hover" alt="Image">
  <div class="overlay">
    <button class="btn">View Details</button>
  </div>
    </div>

  <div class="col-lg-4 image-container  mt-5"  data-aos="fade-up">
  <img src="./assets/portfolio/3.jpg" class="img-fluid image-hover" alt="Image">
  <div class="overlay">
    <button class="btn">View Details</button>
  </div>
    </div>

  
  <div class="col-lg-4 image-container mt-5"  data-aos="fade-up">
  <img src="./assets/portfolio/4.jpg" class="img-fluid image-hover" alt="Image">
  <div class="overlay">
    <button class="btn btn-img-css">View Details</button>
  </div>
    </div>
    
    <div class="col-lg-4 image-container mt-5"  data-aos="fade-up">
  <img src="./assets//banner//banner.png" class="img-fluid image-hover" alt="Image">
  <div class="overlay">
    <button class="btn">View Details</button>
  </div>
    </div>

  </div>


 </div>
</div>

<div id="Paris" class="tabcontent">

<h5 class="text-danger text-center mt-5">Going to upload it soon!</h5>



</div>
</div>

<div id="Tokyo" class="tabcontent">
  <h5 class="text-danger text-center mt-5">Going to upload it soon!</h5>
</div>
</div>

<!-- Portfolio End -->



<!-- About us -->

<p class="About-heading h1 mt-3" data-aos="fade-up" id="about">About Us</p>
<p class="About-tagline" data-aos="fade-up">Our Story, Your Inspiration: Connecting through Experience.</p>

<p class="">
  <div class="container">
    <div class="row">
<div class="col-lg-6">
  <h2 class="mt-5 about-head-1"data-aos="fade-right">Our Mission</h2>
  <p class="about-text-1" data-aos="fade-left">At Unciorn Tech Solutins, our mission is to blend creativity, technology, and innovation to empower businesses and creators worldwide. We are passionate about delivering cutting-edge solutions and services that elevate your digital presence and drive your success.</p>
</div>

<div class="col-lg-6">
  <h2 class="mt-5 about-head-1" data-aos="fade-left">Our Team</h2>
  <p class="about-text-1" data-aos="fade-left">Our strength lies in our exceptional team of diverse talents. From visionary developers and SEO experts to creative designers and digital marketing strategists, our experts are dedicated to bringing your ideas to life. With years of experience and a shared commitment to excellence, we work as a cohesive unit to exceed your expectations.</p>
</div>
</div>
<h2 class="mt-5 about-head-1" data-aos="fade-up">Our Services</h2>
<p class="about-text-1" data-aos="fade-up">
  <li class="about-text-1" data-aos="fade-up"><strong>Streaming Design & Overlays:</strong> <span class="fw-normal"> Elevate your live streams with captivating designs and overlays. </span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>Video Editing:</strong> <span class="fw-normal">Turn your raw footage into polished, engaging content.</span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>App Development: </strong> <span class="fw-normal"> Transform your app ideas into functional and user-friendly applications. </span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>Digital Marketing:</strong> <span class="fw-normal">  Craft effective digital strategies to boost your online presence. </span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>SEO (Search Engine Optimization):</strong> <span class="fw-normal">  Improve your visibility in search results and drive organic traffic.</span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>Shopify Web Development: </strong> <span class="fw-normal"> Create high-converting e-commerce experiences on Shopify. </span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>WordPress Web Development:</strong> <span class="fw-normal">Build dynamic and responsive websites on the WordPress platform. </span></li>
  <li class="about-text-1 mt-4" data-aos="fade-up"><strong>And More::</strong> <span class="fw-normal">Our expertise extends far and wide, adapting to the evolving digital landscape.</span></li>

  <p class="about-text-1 mt-4" data-aos="fade-up">Join us at Unicorn Tech Solutions and be part of a team that thrives on innovation and embraces remote work to make a global impact. Explore job opportunities with us and join the journey of shaping tomorrow's digital world.</p>

</p>

  </div>
</p>
<!-- End -->

<!-- Contact us -->

<p class="Contact-heading h1 mt-4" data-aos="fade-up" id="contact">Contact Us</p>
<p class="Contact-tagline" data-aos="fade-up">Connect with Us – Your Feedback Fuels Our Growth</p>


<div class="row">
  <div class="col-lg-6">
    <div class="mx-auto">
    <img src="./assets/contact/contact.png" data-aos="fade-right" class="img-fluid contact-img-querry mt-5 w-100" alt="Contact">
  </div>
  </div>
  <div class="col-lg-6">

<h4 class="contact-heading mt-5 display-5" data-aos="fade-left">Lets Get In Touch</h4>
<div class="container-fluid mt-5" data-aos="fade-left">


<form  method="post">
<div class="row" data-aos="fade-left">
  <div class="col-lg-6">
    <input type="text" class="form-control control-style" name="First_name" required  placeholder="Enter Your First Name">
  </div>
  <div class="col-lg-6">
    <input type="text" class="form-control querry-css-last  control-style" name="Last_name" required placeholder="Enter Your Last Name">
  </div>

  <div class="col-lg-6 mt-5">
    <input type="Email" required class="form-control control-style" name="Email" placeholder="Enter Your Email Address">
  </div>
  <div class="col-lg-6 mt-5">
    <input type="text" required class="form-control control-style" name="subject" placeholder="Subject">
  </div>
  <textarea name="user_message" class="control-style form-control mt-5"  placeholder="How We Can Help You!" id="" cols="30" rows="5" required></textarea>

  <div class="">
    <button id="submit-btn" type="submit"data-aos="fade-up" class="btn  btn-submit mt-3 mb-3" name="submit-btn">Send Now</button>
  </div>

  <?php 
  if(isset($_POST["submit-btn"])){

    $firstname=$_POST['First_name'];
    $Lastname=$_POST['Last_name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['subject'];
    $Usermessage=$_POST['user_message'];
    

    $insert=mysqli_query($con,"insert into tblcontactus values (null,'$firstname','$Lastname','$Email','$Subject','$Usermessage',default)");

if($insert){
  echo "<script>alert('Message Sent Successfully')</script>";
}
else{
  echo 'Failed';
}
  }

  
  ?>
  </form>
</div>




</div>
  </div>
</div>
<!-- End -->


<!-- Footer -->

<footer class="text-center text-white" style="background-color: black;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

     
      

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

 

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-discord"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Unicorn Tech Solutions
  
  </div>
  <!-- Copyright -->
</footer>
<!-- End -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>