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

<body>
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
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="mission.php">Mission</a></li>
        <li class="nav-item"><a class="nav-link" href="programs.php">Programs</a></li>
        <li class="nav-item"><a class="nav-link" href="collaboration.php">Collaborations</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

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
<main>
<!-- Hero Section -->
<header class="hero">
    <div class="hero-overlay">
      <h1 class="intro-heading">We’d Love to Hear from You!</h1>
      <p class="text-dark fs-5">At HER Foundation, we believe in the power of connection, collaboration, and open communication. Whether you're looking for more information about our programs, seeking ways to get involved, or interested in partnering with us, we welcome your inquiries. Every message, idea, and conversation brings us closer to our mission of empowering young women and creating lasting change. Your voice matters, and we are here to listen. Whether you have questions, suggestions, or stories to share, we encourage you to reach out. Together, we can build a stronger community, foster new opportunities, and continue breaking barriers for women everywhere. Let’s start a conversation because every connection has the potential to inspire change.</p>
    </div>
</header>

<div class="row guide">
   <div class="col-6">
      <h2>How Can We Assist You?</h2>
      <p>We understand that every interaction is unique, and we’re here to support you in any way we can. Whether you have a question, need assistance, or simply want to share your thoughts, our team is ready to listen and respond.</p>
    
      <h3>General Inquiries</h3>
      <p>Have a question about HER Foundation, our initiatives, or upcoming programs? We’re happy to provide more details and help you understand how we are making a difference.</p>

      <h3>Partnership & Collaboration</h3>
      <p>Are you a business, organization, or individual looking to collaborate with us? We’re always eager to build meaningful partnerships that help create more opportunities for young women. Let’s discuss how we can work together to make a lasting impact.</p>

      <h3>Volunteering & Mentorship</h3>
      <p>Interested in becoming a mentor, volunteer, or trainer? Our volunteers play a crucial role in empowering young women through education, mentorship, and skills development. Get in touch to find out how you can contribute.</p>

      <h3>Media & Press Inquiries</h3>
      <p>Are you a journalist, blogger, or media professional interested in featuring HER Foundation? We’re happy to share our stories, initiatives, and impact with the world. Contact us for interviews, press materials, and collaboration opportunities.</p>
    </div>

    <div class="col-6">
    <!-- Bootstrap Alert (Hidden Initially) -->
    <div id="contactAlert" class="alert d-none" role="alert"></div>

    <!-- Contact Form -->
    <form action="submit_contact.php" method="post" id="contactForm" class="contact-form">
        <div class="mb-3">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label for="county" class="form-label">County</label>
            <input type="text" class="form-control" id="county" name="county" placeholder="Where Are You Located?">
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <select id="subject" name="subject" required>
                <option value="">-- Select a Subject --</option>
                <option value="general">General Inquiries</option>
                <option value="partnership">Partnership</option>
                <option value="volunteering">Volunteering</option>
                <option value="media">Media & Press</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="How Can We Assist You?" required></textarea>
        </div>

        <button type="submit" class="btn partner-btn w-100">Submit</button>

        <p style="margin-top:10px; font-size: 14px; color: gray;">
            We appreciate your message! Our team will get back to you as soon as possible.
        </p>
    </form>
</div>

</div>


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


<!-- AJAX Script to Handle Contact Form Submission -->
<script>
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    let formData = new FormData(this);

    fetch("submit_contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) 
    .then(data => {
        let alertDiv = document.getElementById("contactAlert");

        if (data.status === "success") {
            alertDiv.className = "alert alert-success";
            alertDiv.innerHTML = data.message; 
            alertDiv.classList.remove("d-none");
            document.getElementById("contactForm").reset();

            setTimeout(() => {
                alertDiv.classList.add("d-none"); 
            }, 3000);
            
        } else {
            alertDiv.className = "alert alert-danger";
            alertDiv.innerHTML = data.message; 
            alertDiv.classList.remove("d-none");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("An unexpected error occurred. Please try again.");
    });
});

</script>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

