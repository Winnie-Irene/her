<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>H.E.R Foundation</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>


<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/HER Foundation logo.png" alt="HER Logo" width="80" height="60" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="mission.php">Mission</a></li>
        <li class="nav-item"><a class="nav-link" href="programs.php">Programs</a></li>
        <li class="nav-item"><a class="nav-link" href="collaboration.php">Collaborations</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<main>
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      
      <div class="carousel-item active">
      <img src="images/Women4.jpg" class="d-block w-100" alt="Slide 2">

        <div class="container">
          <div class="carousel-caption">
            <h1>Empowering Women in Kenya</h1>
            <h3>Join us in breaking barriers and creating opportunities for women.</h3>
            <p><a class="btn btn-lg carousel-btn" href="collaboration.php #partners-form">Get Involved</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Women2.jpeg" class="d-block w-100" alt="Slide 2">

        <div class="container">
          <div class="carousel-caption">
            <h1>Education for Every Girl</h1>
            <h3>Providing resources and support to ensure every girl gets an education.</h3>
            <p><a href="#" class="btn btn-lg carousel-btn" data-bs-toggle="modal" data-bs-target="#donationModal">Support Us</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/Women3.webp" class="d-block w-100" alt="Slide 2">

        <div class="container">
          <div class="carousel-caption">
            <h1>Join the Movement</h1>
            <h3>Together, we can create a future where women thrive.</h3>
            <p><a class="btn btn-lg carousel-btn" href="collaboration.php #partners-form">Join Us</a></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Body -->
<section id="home">
<!-- Hero Section -->
  <header class="hero">
        <div class="hero-overlay">
          <h1 class="intro-heading"> Redefining What’s Possible</h1>
            <p class="text-dark fs-5">Through our diverse programs, strong advocacy efforts, and strategic partnerships, we have touched the lives of thousands of women around the world. Our initiatives provide mentorship, educational scholarships, career development resources, mental health support, and financial literacy training—empowering women to overcome challenges and build sustainable futures. By bridging gaps, breaking glass ceilings, and amplifying women’s voices, we are creating a ripple effect of positive change. The women we support are not just beneficiaries; they are becoming mentors, leaders, and agents of transformation within their communities and beyond.</p>
        </div>
    </header>

  <!-- Intro Section -->
  <div class="container-fluid intro-section">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images/Child-mothers.jpg" class="d-block mx-lg-auto img-fluid intro-image" alt="Empowering Women" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <p class="lead intro-text">
          In Kenya, gender inequality remains a significant challenge. Women and girls often face barriers in education, employment, and leadership due to societal norms.  
          <br><br>
          <strong>HER Foundation</strong> is here to challenge the status quo, uplift women, and create pathways for success.  
          <br><br>
          We believe in a world where women can dream without limits, achieve without obstacles, and lead without barriers. Through our initiatives, we foster an environment where women can learn, grow, and thrive.
        </p>
      </div>
    </div>
  </div>

  <!-- The Challenge -->
  <div class="container-fluid">
      <div class="row challenge-row align-items-center">
          
            <div class="col-md-4 text-center">
                <img src="images/Gender_Inequality.png" id="Gender_inequality" 
                     alt="Gender Inequality" class="img-fluid">
            </div>
            
            <div class="col-md-8">
                <h2>The Challenge: Gender Inequality in Kenya</h2>
                <p class="challenge-paragraph text-dark fs-5">
                    Despite progress, women and girls in Kenya continue to face numerous challenges that hinder their personal and professional growth:
                </p>
                <ul class="program-list">
                    <li> <strong>Limited Access to Education</strong> – Many girls drop out due to financial constraints, early marriages, or societal pressures.</li>
                    <li> <strong>Workplace Discrimination</strong> – Women still struggle with unequal pay, fewer opportunities, and gender bias in leadership roles.</li>
                    <li> <strong>Stereotypes & Cultural Norms</strong> – Deeply ingrained beliefs often limit women’s career choices and personal freedoms.</li>
                    <li> <strong>Gender-Based Violence</strong> – Many women face harassment, domestic violence, and limited access to justice.</li>
                </ul>
                <p class="fs-5 text-dark">
                    These obstacles hold back not just women but entire communities. When women thrive, families, economies, and societies flourish.
                </p>

                <h2>Our Commitment to Change</h2>
                <p class="challenge-paragraph text-dark fs-5">
                HER Foundation is working to reshape the narrative around women by providing resources, support, and opportunities to help them succeed.
                </p>
                <ul class="program-list">
                    <li> <strong>Advocating for Women’s Rights</strong> – Raising awareness and pushing for policies that protect and empower women.</li>
                    <li> <strong>Skill Development & Leadership Training </strong> –  Equipping women with the tools to become self-reliant and confident leaders.</li>
                    <li> <strong>Breaking Stereotypes</strong> – Encouraging women to step into industries and roles traditionally dominated by men.</li>
                </ul>
                <p class="fs-5 text-dark">
                Through collective action, we can create a <b>future where every woman has the power to define her own destiny</b>.
                </p>

                <h2>Join the Movement</h2>
                <p class="challenge-paragraph text-dark fs-5">
                Every woman deserves the opportunity to succeed. Whether you're here to learn, support, or advocate, your involvement matters.
                </p>
                <ul class="program-list">
                    <li> <strong>Stay Informed </strong> – Follow our latest initiatives, stories, and events.</li>
                    <li> <strong>Be an Advocate </strong> –  Use your voice to spread awareness about gender equality.</li>
                    <li> <strong>Take Action </strong> –  Join us in creating change by participating in our initiatives.</li>
                </ul>
                <p class="challenge-paragraph text-dark fs-5">
                Together, we can <b>build a future where every woman is empowered to rise, lead, and inspire</b>. <br>
                <b>Want to be part of this movement?</b> Stay connected for updates!
                </p>
            </div>
        </div> 
    </div> 
   
    <!-- Transition section -->
    <div class="transition-section text-center py-5">
        <h2>Real Impact, Real Change</h2>
        <p class="fs-5 text-dark"> At HER Foundation, our initiatives go beyond advocacy—they create real transformation. Every woman we empower is a step toward a more just and equal society. Through education, mentorship, and support, we provide women with the tools they need to break barriers, seize opportunities, and build brighter futures. Our programs don’t just change individual lives; they create ripple effects that uplift families, communities, and generations to come. Behind every initiative, there’s a story of resilience, growth, and success. From young girls defying the odds to women stepping into leadership roles, these inspiring journeys highlight the power of opportunity and determination. Explore real stories of empowerment and change, and witness how together, we are shaping a world where every woman has the chance to thrive.</p>
    </div>

  <!-- Success Stories -->
  <div class="container">

  <!-- Story 1 -->
  <div class="row featurette">
    <div class="col-md-7 d-flex flex-column justify-content-center">
      <h2 class="featurette-heading">From School Dropout to Future Engineer</h2>
      <p class="featurette-paragraph text-dark fs-5">
        Mary, a 16-year-old girl from rural Kenya, was on the verge of dropping out of school due to financial struggles and societal pressure. Through HER Foundation’s education and mentorship programs, she received a scholarship, attended our STEM boot camp, and developed a passion for engineering. Today, she is thriving in high school and dreams of becoming an electrical engineer.  
        <strong>"HER Foundation gave me a second chance. I now believe that I can achieve anything." – Mary</strong>
      </p>
    </div>
    <div class="col-md-5">
      <img src="images/Mary.jpg" alt="Mary's Story" class="featurette-image img-fluid mx-auto d-block" width="500" height="500">
    </div>
  </div>

  <!-- Story 2 -->
  <div class="row featurette">
    <div class="col-md-7 order-md-2 d-flex flex-column justify-content-center">
      <h2 class="featurette-heading">Breaking Barriers in Tech</h2>
      <p class="featurette-paragraph text-dark fs-5">
        Amina always had a passion for technology, but she was constantly told that coding was for boys. After attending HER Foundation’s digital skills workshop, she learned how to code and built her first website. Now, she is working on launching her own tech startup to help small businesses go digital.  
        <strong>"The workshops opened my eyes to endless possibilities. I now mentor other girls in tech!" – Amina</strong>
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="images/Amina.jpg" alt="Amina's Story" class="featurette-image img-fluid mx-auto d-block" width="500" height="500">
    </div>
  </div>

  <!-- Story 3 -->
  <div class="row featurette">
    <div class="col-md-7 d-flex flex-column justify-content-center">
      <h2 class="featurette-heading">From Silent to Confident Leader</h2>
      <p class="featurette-paragraph text-dark fs-5">
        Grace struggled with self-doubt and was afraid to speak up in class. After participating in our public speaking and leadership workshops, she gained confidence and recently won her school’s debate competition. She now leads a girls’ empowerment club at her school, encouraging others to find their voice.  
        <strong>"I used to be afraid to speak. Now, I want to be a lawyer and advocate for women’s rights!" – Grace</strong>
      </p>
    </div>
    <div class="col-md-5">
      <img src="images/Grace.webp" alt="Grace's Story" class="featurette-image img-fluid mx-auto d-block" width="500" height="500">
    </div>
  </div>
</div>

<!-- Circles section -->
<div class="row circle-section">
        <div class="col-lg-4">
          <img src="images/Empowering Women.webp" alt="Empowering Women" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h2>Empowering Women</h2>
          <p class="featurette-paragraph text-dark fs-5">We equip women with the skills, knowledge, and resources needed to break barriers and achieve their full potential. Through education, mentorship, and community support, we foster sustainable change.</p>
        </div>

        <div class="col-lg-4">
          <img src="images/Creating Opportunities.jpeg" alt="Creating Opportunities" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h2>Creating Opportunities</h2>
          <p class="featurette-paragraph text-dark fs-5">By providing access to leadership programs, financial literacy training, and career development, we help women and girls unlock new possibilities for a brighter future.</p>
        </div>

        <div class="col-lg-4">
        <img src="images/Building a Better Future.webp" alt="Building a Better Future" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h2>Building a Better Future</h2>
          <p class="featurette-paragraph text-dark fs-5">When women thrive, communities flourish. Join us in advocating for gender equality, economic empowerment, and a society where every woman’s voice is heard and valued.</p>
        </div>
</div>
</section>
</main>


<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    
    <div class="footer-section contact">
      <h3>Contact Us</h3>
      <p><i class="fas fa-phone-alt"></i> +254 794 720 311</p>
      <p><i class="fas fa-envelope"></i> irene.wanjiru.winnie@gmail.com</p>
    </div>
    
    <div class="footer-section links">
      <h3>Quick Links</h3>
      <div class="links-grid">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
        <ul>
          <li><a href="programs.php">Programs</a></li>
          <li><a href="collaboration.php">Get Involved</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-section social">
      <h3>Follow Us</h3>
      <div class="social-icons">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
      <p>&copy; 2025 HER Foundation. All rights reserved.</p>
  </div>
</footer>

 <!-- Sticky Donation Button -->
 <a href="#" class="donation-button" data-bs-toggle="modal" data-bs-target="#donationModal">
    Donate
</a>

<!-- Donation Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donationModalLabel">Make a Donation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <div class="modal-body">
            
        <!-- Bootstrap Alert (Hidden Initially) -->
        <div id="donationAlert" class="alert d-none" role="alert"></div>

        <!-- Donation Form -->
        <form action="process_payment.php" method="post" id="donationForm">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label" style="font-weight: bold;">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g.: +254 712 345 678">
            </div>
            <div class="mb-3">
                  <label for="email" class="form-label">Email (Optional)</label>
                  <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                  <label for="amount" class="form-label">Donation Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="text-center">
                  <button type="submit" class="btn donation-btn">Donate Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- AJAX Script to Handle Form Submission -->
<script>
document.getElementById("donationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    var formData = new FormData(this);

    fetch("process_payment.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())  // Expect text response
    .then(data => {
        let alertDiv = document.getElementById("donationAlert");

        if (data.trim() === "success") {
            // Show success message
            alertDiv.className = "alert alert-success";
            alertDiv.innerHTML = "Thank you for your donation!";
            alertDiv.classList.remove("d-none");

            // Clear form fields
            document.getElementById("donationForm").reset();

            // Hide alert and close modal after 3 seconds
            setTimeout(() => {
                alertDiv.classList.add("d-none");
                var modalElement = document.getElementById('donationModal');
                var modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) modal.hide();
            }, 3000);
        } else {
            // Show error message
            alertDiv.className = "alert alert-danger";
            alertDiv.innerHTML = "There was an error processing your donation. Please try again.";
            alertDiv.classList.remove("d-none");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("An error occurred. Please try again.");
    });
});
</script>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
