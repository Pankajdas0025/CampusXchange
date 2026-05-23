<?php
    include_once __DIR__ . '/src/config.php';
    include_once __DIR__ . '/src/conn.php';
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <!-- Primary Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About CampusXchange - Education, Mentorship & Web Services</title>
  <meta name="title" content="About CampusXchange - Education, Mentorship & Web Services">
  <meta name="description" content="Discover CampusXchange: your platform for student support, mentorship, web development, and SEO services. Empowering learners and businesses online.">
  <meta name="keywords" content="CampusXchange about, student support, mission of campusxchange, web development services by campusxchange, SEO services by campusxchange , CampusXchange story, CampusXchange founder , CampusXchange mentorship programs">
  <meta name="author" content="CampusXchange">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://campusxchange.wuaze.com/about">
  <!--favicon ------------------------------------------------------------------------------>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ROOT_URL;?>assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ROOT_URL;?>assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_URL;?>assets/favicon_io/favicon-16x16.png">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.wuaze.com/about">
  <meta property="og:title" content="About CampusXchange - Education, Mentorship & Web Services">
  <meta property="og:description" content="Learn about CampusXchange, helping students and businesses with mentorship, web solutions, and SEO services.">
  <meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-about.jpg">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.wuaze.com/about">
  <meta property="twitter:title" content="About CampusXchange - Education, Mentorship & Web Services">
  <meta property="twitter:description" content="Explore CampusXchange: supporting students and businesses with mentorship, web development, and SEO solutions.">
  <meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-about.jpg">
<!-- styles -->
<link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/css/style.css" type="text/css">

  <!-- JSON-LD Schema for AboutPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "url": "https://campusxchange.wuaze.com/about",
    "name": "About CampusXchange",
    "description": "Discover CampusXchange: your platform for student support, mentorship, web development, and SEO services. Empowering learners and businesses online.",
    "publisher": {
      "@type": "Organization",
      "name": "CampusXchange",
      "url": "https://campusxchange.wuaze.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://campusxchange.wuaze.com/assets/campusxchange-logo-transparent.png"
      }
    }
  }
  </script>
  <style>
@import url("<?php echo ROOT_URL;?>assets/css/root.css");
    /* Hero Section */
    .about-hero {
      background:linear-gradient(180deg, var(--secondary-color), var(--primary-color)),url('assets/Images/seo-services-hero.jpg') center/cover no-repeat;
      color: #fff;
      background-attachment: fixed;
      padding: 3rem 1.5rem;
      text-align: center;
      width: 100%;
      min-height:70vh;
      box-shadow: var(--shadow);
    }
    .about-hero h1 {
      font-size: 1.75rem;
      margin-bottom: 1rem;
      color: rgba(255, 255, 255, 1);
    }
    .about-hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: auto;
    }
    /* Founder Section -------------------------------*/
    .founder-section {
      background: #f9fafb;
      padding: 2rem 0.5rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 2rem;
      width: 90%;
      margin: 2.5% 5%;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      border: 2px solid white;
    }
    .founder-img {
      flex: 0 0 160px;
      background-color:skyblue;

      overflow: hidden;
      width: 200px;
      height: 100%;
    }
    .founder-img img {
       box-shadow: 1px 0px 100px black inset;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: grayscale(1);
    }.founder-img:hover img {
      transition: transform 0.3s ease;
      filter: grayscale(0);
    }
    .founder-bio {
      flex: 1 1 300px;
    }.founder-bio a{
      text-decoration: none;
    }

    .founder-section span {
     border: 2px solid white;

    }
   /* - Why Choose Us Feature Grid - */
    .feature-grid {
      background: #fff;
      padding: 2rem 1rem;
    }
    .feature-grid h2 {
      text-align: center;
      color:var(--primary-color);
    }
    .feature-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 2rem;

    }
    .feature-item {
      flex: 1 1 200px;
      background: #f9fafb;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      padding: 1.5rem;
      text-align: center;
    } .feature-item:hover{
    transform: translateY(-15px);
     box-shadow: 0 1px 2px #ee2a7b;
    }
    .feature-item i {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    /* Carousel -------------------------------------------------*/
    .carousel-section {
      padding: 2rem 1rem;
      text-align: center;
    }    .carousel-section  h2{
      color:var(--primary-color);
    }
    .carousel-container {
      max-width: 600px;
      margin: auto;
      position: relative;
      background-color: var(--primary-color );
    }
    .carousel-slide {
      display: none;
      font-size: 1.2rem;
      background-color: var(--primary-color );
      border-radius: 10px;
      padding: 2rem;
      box-shadow: var(--shadow);
    }
    .carousel-slide.active {
      display: block;
    }
    .carousel-btn {
      background:var(--primary-color);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 0.5rem 1rem;
      margin: 1rem 0.5rem;
      cursor: pointer;
      font-size: 1rem;
    }
    /* Timeline ------------------------------*/
    .timeline-section {
      background: #f3eded;
      padding: 2rem 1rem;
    }
    .timeline-section h2 {
      text-align: center;
      color: #f43f5e;
    }
    .timeline-list {
      max-width: 700px;
      margin: auto;
      list-style: none;
      padding: 0;
    }
    .timeline-list li {
      margin-bottom: 1.5rem;
    }

      /* Core Values ------------------------------------------------*/
    .core-values {
    background: #f3eded;
      padding: 2rem 1rem;
    }
    .core-values h2 {
      text-align: center;
      color:var(--primary-color);
    }
    .core-values-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: .5rem;
      margin-top: 2rem;
    }
    .core-value-item {
      flex: 1 1 220px;
      background: #f9fafb;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      padding: 1.5rem;
      text-align: center;
    }
    @media (max-width: 700px) {
      .feature-items, .core-values-items, .founder-section {
        flex-direction: column;
        gap: 1rem;
      }
      /* Founder Section -------------------------------*/
    .founder-section {
      text-align: center;
      padding: 1.5rem 1rem;
      gap: 1.5rem;
    }

    .founder-bio {
      flex: 1 1 300px;
      font-size: 12px;
    } .founder-section span {
     border: 2px solid white;
     font-size: 9px;
    }
    }
  </style>
</head>
<body>
<!--About page Header and navbar ----------------------------------------------------------------------------------------->
<?php include_once __DIR__ . "/components/header.php"?>
<?php include_once __DIR__ . "/chatboat.php"?>



  <!--about page Header and navbar end ----------------------------------------------------------------------------------------->
<br>
  <!-- Unique About Us Hero Section -->
  <section class="about-hero">
    <h1 data-aos="fade-up">About Campusxchange </h1>
    <p data-aos="fade-up">CampusXchange is not just a platform—it's a movement to transform education and career growth. We blend creativity, technology, and mentorship to help you unlock your true potential.</p>
  </section>

  <!-- Founder & CEO Section -->
  <section class="founder-section">
    <div class="founder-img">
      <img src="assets/Images/pankaj-kumar-das.jpg" alt="Pankaj Kumar Das, Founder & CEO" title="Pankaj kumar Das founder of Campusxchange">
    </div>
    <div class="founder-bio">
      <h2>Pankaj Kumar Das</h2>
      <h4>Founder</h4>
      <p>Pankaj Kumar is a full-stack web developer, educator, and entrepreneur who founded CampusXchange to bridge the gap between academic learning and real-world skills. With expertise in HTML, CSS, JavaScript, and PHP, he builds innovative web solutions while guiding students, freelancers, and startups to achieve their goals. His passion for technology, mentorship, and problem-solving drives CampusXchange’s mission to empower the next generation of digital professionals.</p>
<br>

    </div>
  </section>
  <!-- Why Choose Us Feature Grid -->
  <section class="feature-grid">
    <h2>Why Choose Us?</h2>
    <div class="feature-items">
      <div class="feature-item" data-aos="fade-left">
        <i class="fa-solid fa-lightbulb" style="color:#f43f5e;"></i>
        <h4>Innovative Learning</h4>
        <p>We use creative methods and real-world projects to make learning fun and effective.</p>
      </div>
      <div class="feature-item" data-aos="fade-left">
        <i class="fa-solid fa-users" style="color:#6366f1;"></i>
        <h4>Expert Mentors</h4>
        <p>Our team consists of industry professionals who guide you at every step.</p>
      </div>
      <div class="feature-item" data-aos="fade-left">
        <i class="fa-solid fa-rocket" style="color:#f43f5e;"></i>
        <h4>Career Launchpad</h4>
        <p>From internships to job-ready skills, we help you launch your dream career.</p>
      </div>
      <div class="feature-item" data-aos="fade-left">
        <i class="fa-solid fa-globe" style="color:#6366f1;"></i>
        <h4>Global Community</h4>
        <p>Join a vibrant network of learners, creators, and leaders from around the world.</p>
      </div>
    </div>
  </section>
<br>
  <!-- Mission & Vision Carousel Section -------------->
  <section class="carousel-section">
    <h2>Our Mission & Vision</h2>
    <br>
    <div class="carousel-container" data-aos="fade-up">
      <div class="carousel-slide active" id="slide1">
        <strong style="color: #6366f1;"><i class="fa-solid fa-bullseye"></i> </strong> To bridge the gap between theory and practice by providing hands-on learning, mentorship, and real-world opportunities for growth.
      </div>
      <div class="carousel-slide" id="slide2">
        <strong style="color: #6366f1;"><i class="fa-solid fa-eye"></i> </strong> To empower every learner and innovator with the skills, resources, and guidance needed to excel in the digital world.
      </div>
      <button class="carousel-btn" onclick="showSlide(1)">Mission</button>
      <button class="carousel-btn" onclick="showSlide(2)">Vision</button>
    </div>
  </section>

  <!-- CampusXchange Journey Timeline ---------------------------------->
  <section class="timeline-section">
    <h2>Our Journey</h2>
    <ul class="timeline-list">
      <li><strong style="color: #ee2a7b;">2023:</strong> CampusXchange founded with a vision to revolutionize learning.</li>
      <li><strong style="color: #ee2a7b;">2024:</strong> Expanded to offer curated notes, blogs, and assignments for students and professionals.</li>
      <li><strong style="color: #ee2a7b;">2024(end):</strong> Launched our first mentorship and internship programs.</li>
      <li><strong style="color: #ee2a7b;">2025:</strong> Built a thriving community and partnered with leading tech companies.</li>
    </ul>
  </section>

  <!-- Core Values Section -------------------------------------->
  <section class="core-values">
    <h2>Our Core Values</h2>
    <div class="core-values-items">
      <div class="core-value-item" data-aos="fade-right">
        <h4>Integrity</h4>
        <p>We believe in honesty, transparency, and ethical practices in everything we do.</p>
      </div>
      <div class="core-value-item" data-aos="fade-right">
        <h4>Collaboration</h4>
        <p>We foster teamwork and open communication to achieve shared goals.</p>
      </div>
      <div class="core-value-item" data-aos="fade-right">
        <h4>Growth</h4>
        <p>We encourage continuous learning and personal development for all.</p>
      </div>
      <div class="core-value-item" data-aos="fade-right">
        <h4>Innovation</h4>
        <p>We embrace creativity and new ideas to drive progress and impact.</p>
      </div>
    </div>
  </section>
<!-- footer section  --------------------------------------------------------------------------------->
<?php include_once __DIR__ . "/components/footer.php"?>
<!-- fotter section end  here --------------------------------------------------------------------------------->
<script>
// Simple carousel for Mission & Vision
function showSlide(n) {
  document.getElementById('slide1').classList.remove('active');
  document.getElementById('slide2').classList.remove('active');
  document.getElementById('slide'+n).classList.add('active');
}
</script>

</body>
</html>
