<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>𝗕𝗹𝗼𝗴𝗦𝗰𝗿𝗶𝗽𝘁/Authentication</title>
  
  <!-- CSs link -->
   <link rel="stylesheet" href="Style/Authentication.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   
  <!-- cdn animation  -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- cdn JQUARY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>
<body>
<!--code For pop up alert when signup------------------------------------------------------------------------------>
<div class="header animate__animated animate__backInRight"></div>

  <main>
<!--code For signup form------------------------------------------------------------------------------>
    <div class="box animate__animated animate__fadeInDownBig">
      <div class="sh">
         &nbsp; Create Your Account ✨
      </div>
      <form autocomplete="off">
        <input type="text" id="uName" placeholder="Enter your name " >
             <input type="email" id="uEmail" placeholder="Enter your email" >
                 <input type="password" id="uPass" placeholder="Password" >
                       <a href="#"><P id="ppass">Forgot Password?</P></a>
                             <input type="submit" name="Signupbtn" value="Confirm" id="Signupbtn">
                                    <p>Allready have an account ? &nbsp; <a href="#" id="lbtn">Login</a></p>
                                          </form>
<!--code For login form ------------------------------------------------------------------------------>      
      <div class="box2 animate__animated animate__fadeInDownBig">
          <div class="sh">
                  Welcome Back 👋
                        </div>
      <P>Login to continue to your blog dashboard</P>
      <form action="login.php" method="post" autocomplete="off">
            <input type="text" name="uEmail" placeholder="Enter your email" required>
                  <input type="password" name="uPass" placeholder="Password" required>
                           <input type="submit" name="Loginbtn" value="Login" id="Loginbtn">
                                      <p>New user? &nbsp; <a href="#" id="Sibtn">Sign Up</a></p>
      </form>
      </div>
    </div>
   
    
<!-- Jquary and AJAX reqest to send signup from data and recive result ---------------------------------------------------------->
    <script>
  $(document).ready(function () {
    $("#Signupbtn").click(function (e) {
      e.preventDefault(); // Prevent default form submission
      // variable assignments
      var username = $("#uName").val().trim();
      var email = $("#uEmail").val().trim();
      var pass = $("#uPass").val().trim();

      $.ajax({
        type: "POST",
        url: "signup.php",
        data: {
          UName: username,
          Email: email,
          Password: pass
        },
        success: function (response) {
          $(".header").html(response).show();
// set time out to hide the popup alert  window .............................................................................>
          setTimeout(function () {
            $(".header").hide();
          }, 3000);
        }
      });
    });
  });
</script>
  </main>
  <script src="script.js"></script>
</body>
</html>