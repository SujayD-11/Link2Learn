<?php
  include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Dev Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="webdev.css">
</head>
<body style="background-color:rgb(17, 26, 48)">
    <div class="header">
        <h1>Web Development for Beginners</h1>
    </div>
    <div class="navbar">
        <a href="#Syllabus">Syllabus</a>
        <a href="#reviews">Reviews</a>
        <a href="#faq">FAQ</a>
        <a href="#enroll">Enrollment Options</a>
    </div>
    <div class="row">
        <div class="main">
            <h2>About This Course</h2>
            <h4>740,238 recent views</h4>
            <p>This course is designed to start you on a path toward future studies in web development and design, no matter how little experience or technical knowledge you currently have. The web is a very big place, and if you are the typical internet user, you probably visit several websites every day, whether for business, entertainment or education. But have you ever wondered how these websites actually work? How are they built? How do browsers, computers, and mobile devices interact with the web? What skills are necessary to build a website? With almost 1 billion websites now on the internet, the answers to these questions could be your first step toward a better understanding of the internet and developing a new set of internet skills.  </p>
            <div class="Syllabus" id="Syllabus">
                <h2>Syllabus</h2>
                <p>
                    <img src="images/week1.png" alt="week1" width="100" height="100">1. Introduction to Web Development <br>
                    &emsp;1.1 Understanding the terms <br>
                    &emsp;1.2 Website Hosting <br><br><br>
        
                    <img src="images/week2.png" alt="week1" width="100" height="100">2. Designing your own Website <br>
                    &emsp;2.1 What is HTML? <br>
                    &emsp;2.2 Basics of HTML <br><br><br>
        
                    <img src="images/week3.png" alt="week1" width="100" height="100">3. Programming <br>
                    &emsp;3.1 Introduction to Javascript <br>
                    &emsp;3.2 Why JS? <br>
                    &emsp;3.3 Types of Scripting languages <br><br>
                    
                    <img src="images/week4.png" alt="week1" width="100" height="100">4. HTML vs CSS <br>
                    &emsp;4.1 About CSS <br>
                    &emsp;4.2 Why CSS? <br><br><br>
        
                    <img src="images/week5.png" alt="week1" width="100" height="100">5. AJAX<br><br><br><br><br>
        
                    <img src="images/week6.png" alt="week1" width="100" height="100">6. Jquery <br>
                    &emsp;6.1 Types of requests<br><br>
                </p>
            </div>
        </div>
        <div class="side" style="padding-bottom: 0px;">
            <img src="images/deadlines.png" alt="Flexible Deadlines" width="80" height="80"><p>Flexible Deadlines</p><br><br>
            <img src="images/certificate.png" alt="Certificate" width="80" height="80"><p>Shareable Certificate</p><br><br>
            <img src="images/online.png" alt="online" width="80" height="80"><p>100% Online</p><br><br>
            <img src="images/time.png" alt="time" width="80" height="80"><p>1.5 Month Course</p><br><br>
            <p style="font-size: 30px;">Meet Our Instrutor</p><br>
            <img src="images/gomathi.png" alt="Instructor" width="180" height="200" class="center" style="margin-bottom: 30px;">
            <p>Gomathi is a YALE graduated Web Development professor who has been working in the field for 10 years.She has built over 100 websites in her time in web dev department and has recived numeous awards for the same.</p>

        </div>
    </div>
    <h2 style="color: white; margin-left: 20px; text-align:center" id="reviews">Reviews</h2>
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/review1.png" style="width:100%">
          
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/review2.png" style="width:100%">
          
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/review3.png" style="width:100%">
            
          </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

    <h2 style="color: white; margin-left: 20px;">Frequently Asked Questions</h2>
    <button class="accordion" id="faq">When will I have access to the lectures and assignments?</button>
    <div class="panel">
    <p>Access to lectures and assignments depends on your type of enrollment. If you take a course in audit mode, you will be able to see most course materials for free. To access graded assignments and to earn a Certificate, you will need to purchase the Certificate experience, during or after your audit. If you don't see the audit option: 

        The course may not offer an audit option. You can try a Free Trial instead, or apply for Financial Aid.
        The course may offer 'Full Course, No Certificate' instead. This option lets you see all course materials, submit required assessments, and get a final grade. This also means that you will not be able to purchase a Certificate experience.</p>
    </div><br>

    <button class="accordion">What will I get if I purchase the Certificate?</button>
    <div class="panel">
    <p>When you purchase a Certificate you get access to all course materials, including graded assignments. Upon completing the course, your electronic Certificate will be added to your Accomplishments page - from there, you can print your Certificate or add it to your LinkedIn profile.  If you only want to read and view the course content, you can audit the course for free..</p>
    </div><br>

    <button class="accordion">Is financial aid available?</button>
    <div class="panel">
    <p>Yes, STEP4CAREER provides financial aid to learners who cannot afford the fee. Apply for it by clicking on the Financial Aid link beneath the "Enroll" button on the left. You’ll be prompted to complete an application and will be notified if you are approved</p>
    </div>  

    <h2 id="enroll" style="color: white; margin-left: 20px;">Enrollment Options</h2>
    <div class="columns">
        <ul class="price">
          <li class="header1">Basic</li>
          <li class="grey">Rs.2000</li>
          <li>Course Validity for 8 Months</li>
          <li>2 Downloadable Research Papers</li>
          <li>Unlimited Access to Course Material</li>
          <li>2.5 hours on-demand video</li>
          <li class="grey"><a href="paymentWeb.php" class="button" style="color: black;">Enroll</a></li>
        </ul>
    </div>
    <div class="columns2">
        <ul class="price2">
          <li class="header2">Premium</li>
          <li class="grey2">Rs.3000</li>
          <li>Course Validity for 12 Months</li>
          <li>5 Downloadable Research Papers</li>
          <li>Unlimited Access to Course Material</li>
          <li>8 hours on-demand video</li>
          <li class="grey2"><a href="paymentWeb.php" class="button" style="color: black;">Enroll</a></li>
        </ul>
      </div>
    

</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
        panel.style.display = "none";
        } else {
        panel.style.display = "block";
        }
    });
    }
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
</script>
</html>