<?php
require_once __DIR__ . '/../src/config.php';
?>

<style>
@import url('<?php echo ROOT_URL;?>assets/css/root.css');
/* header */
body{font-family: var(--font-main);}
#include-footer {display: flex;flex-direction:row;min-height: 50vh;background-color:var(--primary-color);}
.footer-div{ width: 25%; margin: 0%; text-align: left;}
.footer-div h2{ padding: 10px 20px; color: white;}
.footer-div a{text-decoration: none;display: block;padding: 5px 20px; color:white; font-weight: 300;}
.footer-div a:hover{  text-decoration: underline;  transform: translateX(1px);}
/* Animated cursor for all pages ---------------------------------*/
.cursor{ z-index: 999; background-color:#FFF; backdrop-filter: blur(20px); width: 20px; height: 20px; border-radius: 50%; pointer-events: none;outline: 2px double white;border:1px double white;box-shadow: var(--shadow);position: absolute;transition:0.1s;}
/* Floating buttons */
#whatsapp{position:fixed;left:18px;bottom:18px;width:56px;height:56px;border-radius:999px;background:#25D366;display:grid;place-items:center;box-shadow:var(--shadow);z-index:900}
#topBtn{position:fixed;right:20px;bottom:18px;width:56px;height:56px;border-radius:999px;background:var(--primary-color);display:grid;place-items:center;box-shadow:var(--shadow);z-index:900;border:none;cursor:pointer}
.whatsapp-float {position: fixed;width: 60px;height: 60px;bottom: 25px;right: 25px;background-color: #25d366;color: #fff;border-radius: 50%;text-align: center;font-size: 30px;box-shadow: 0 0 0 rgba(37, 211, 102, 0.4); transition: all 0.3s ease-in-out;z-index: 999;  animation: pulseShadow 2s infinite;}
.whatsapp-float i {line-height: 60px;}
.whatsapp-float:hover {background-color: #20ba5a;transform: scale(1.2);box-shadow: 0 0 25px rgba(37, 211, 102, 0.6);}

  @media(max-width:600px)
{
/* Footer */
#include-footer { display:block; height:auto; min-width: 100%; padding: 1rem;}
.footer-div{width: 100%;margin: 0;text-align: left;}
.footer-div h2{padding: 10px 20px;}
.footer-div a{text-decoration: none;display: block;padding: 10px 20px;}
.footer-div p{  color: white;}}

</style>
<!-- animated cursor ------------------->
<div class="cursor"></div>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+919155726625?text=Hello%20CampusXchange%20Services%2C%20I%20would%20like%20to%20inquire%20about%20your%20services." id="whatsapp" class="whatsapp-float" target="_blank" title="Chat on WhatsApp" style="text-decoration: none;"> <i class="fab fa-whatsapp"></i></a>

<button id="topBtn" class="whatsapp-float" aria-label="Scroll to top" title="Back to top"> <i class="fa fa-arrow-up"></i></button>

<footer class="footer" id="include-footer">
<div class="footer-div">
<h2>CampusXchange</h2>
<a style="text-decoration: none; cursor:alias; opacity:0.8  ; color:  rgba(255, 255, 255); "> CampusXchange, we're building a space where you learn, create, and grow — with expert notes, hands-on projects, internships, and mentorship. Whether you're a student, freelancer, or startup, this is where your journey to smarter, real-world success begins.</a>
<a href="tel:+91915576625" style="font-size:14px;"><i class="fa-solid fa-phone"></i> +919155726625</a>
<a href="mailto:campusxchangeservices@gmail.com" style="font-size:12.5px;"><i class="fa-solid fa-envelope"></i> campusxchangeservices@gmail.com </a>
</div>
<div class="footer-div">
<h2><i class="fa-solid fa-link"></i> Quick Links</h2>
<a href="<?php echo ROOT_URL;?>home" title="CampusXchange Home"><i class="fa-solid fa-house"></i> Home</a>
<a href="<?php echo ROOT_URL;?>services/web-development" title="Professional Web Development Services by CampusXchange"><i class="fa-solid fa-code"></i> Website Development</a>
<a href="<?php echo ROOT_URL;?>services/seo" title="SEO Optimization & Digital Marketing Services by CampusXchange"><i class="fa-solid fa-chart-line"></i> SEO Services</a>
<a href="<?php echo ROOT_URL;?>handouts/notes" title="Download Free Technical Notes from CampusXchange"><i class="fa-solid fa-book-open"></i> Notes</a>
<a href="<?php echo ROOT_URL;?>handouts/blog" title="Read Latest Tech Blogs on CampusXchange"><i class="fa-solid fa-pen-nib"></i> Blogs</a>
<a href="<?php echo ROOT_URL;?>handouts/assignment" title="Programming Assignments & Practice Questions"><i class="fa-solid fa-laptop-code"></i> Programming Assignment</a>
<a href="<?php echo ROOT_URL;?>internship/apply" title="Apply for Internship Opportunities at CampusXchange"><i class="fa-solid fa-user-graduate"></i> Apply for Internship</a>
<a href="<?php echo ROOT_URL;?>internship/verification" title="Verify Internship or Certificate at CampusXchange"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Verification</a>
<a href="<?php echo ROOT_URL;?>about" title="Learn More About CampusXchange"> <i class="fa-solid fa-circle-info"></i> About Us</a>
<a href="<?php echo ROOT_URL;?>lettalk" title="Contact CampusXchange Team">    <i class="fa-solid fa-comments"></i> Let's Talk</a>
</div>

<div class="footer-div">
<h2><i class="fa-solid fa-handshake"></i> Social Links</h2>
<a href="https://www.linkedin.com/company/campusxchange-services/" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
<a href="https://www.instagram.com/campusxchange_services/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
<a href="https://www.threads.com/@campusxchange_services/" target="_blank"><i class="fab fa-threads"></i> Threads</a>
<a href="https://facebook.com/campusxchangeservices" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
<a href="https://www.youtube.com/@campusxchange_services" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
<h2><i class="fa-solid fa-file-shield"></i> Policy</h2>
<a href="<?php echo ROOT_URL;?>privacy-policyandterms"><i class="fa-solid fa-circle-info"></i> Privacy Policy</a>
<a href="<?php echo ROOT_URL;?>privacy-policyandterms"><i class="fa-solid fa-comments"></i> Terms & Conditions</a>
<a href="<?php echo ROOT_URL;?>sitemap"><i class="fa-solid fa-route"></i> Sitemap</a>
</div>

<div class="footer-div">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225514.60613766374!2d87.69908297984767!3d26.13640743705686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e56f6429ec6027%3A0x9846e4b1c8b20348!2sCampusXchange%20Services!5e0!3m2!1sen!2sin!4v1760370781433!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google-business-map">
</iframe>
</div>
</footer>
<div id="all-reserved" style="text-align:center; font-family:'Poppins', sans-serif; font-size:15px; color:#555; background:#f8f9fa; padding:10px 0; border-bottom:1px solid #ddd;">© <?php echo date("Y"); ?> <strong>CampusXchange</strong> | All Rights Reserved • <span style="color:#0078ff;">Fearless Web solution ❤ </span></div>



<script>
// animated cursor --------------------------------------------------------
var cursor=document.querySelector(".cursor");
document.addEventListener("mousemove",(e)=>
{
  let x=e.pageX;
  let y=e.pageY;
  cursor.style.top = y+"px";
  cursor.style.left = x+"px";
});


// Wait for the DOM to load before running script
document.addEventListener("DOMContentLoaded", function() {

  // Get the button if it exists
  const mybutton = document.getElementById("topBtn");
  if (!mybutton) return; // Exit if button not present

  // Show button on scroll
  window.addEventListener("scroll", function() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  });

  // Scroll to top on click
  mybutton.addEventListener("click", function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });

});
 </script>
