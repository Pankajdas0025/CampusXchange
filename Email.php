<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $to = $_POST['Uemail'];
    $name = $_POST['Uname'];
    $subject = "Unit Testing from CampusXchange";

  // Properly formatted headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: CampusXchange Support <useremail5569121@gmail.com>\r\n";

    // HTML email body
    $message = "
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>CampusXchange</title>
    </head>
    <body style='margin: 0; padding:10px; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.5; color: #333;'>
      <div style='max-width: 600px; width: 100%; margin: auto; padding: 0; background: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;'>
        <img src='https://ibb.co/n8ZFQfL8' alt='CampusXchange' style='width: 100%; display: block; border-radius: 10px 10px 0 0;'>

        <div style='background: linear-gradient(to right, #6366f1, #f43f5e); padding: 20px; text-align: center; color: #fff;'>
          <h1 style='margin: 0; font-size: 1.5rem;'>🎉Hey , </h1>
          <p style='margin: 5px 0 0; font-size: 1rem;'><strong>$name</strong></p>
        </div>

        <div style='padding: 20px; background-color: #ecf0f1;'>
          <p style='margin: 0 0 10px;'>Tired of boring resumes?<br>
          Let your portfolio speak for you!<br>
          We design stunning digital portfolios that get noticed.</p>
          <p style='margin: 10px 0;'><strong>🌟 Our Support Team will contact you within 24 Hr.</strong></p>
          <p style='margin: 0;'>Be Happy with <strong>CampusXchange</strong></p>
        </div>

        <div style='padding: 20px; font-size: 0.9em; color: #555; border-top: 1px solid #ddd;'>
          <p style='margin-bottom: 10px;'>Connect with us:</p>
          <ul style='padding-left: 20px; margin: 0;'>
            <li>LinkedIn: <a href='#' style='color: #2980b9;'>CampusXchange</a></li>
            <li>Telegram: <a href='https://t.me/CampusXchange' target='_blank' style='color: #2980b9;'>https://t.me/CampusXchange</a></li>
            <li>Email: <a href='mailto:support@CampusXchange' style='color: #2980b9;'>support@CampusXchange</a></li>
            <li>Website: <a href='https://pankajdas0025.github.io/CampusXchange/' target='_blank' style='color: #2980b9;'>www.CampusXchange.org</a></li>
          </ul>
        </div>
      </div>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $subject, $message, $headers))
    {
        echo "✅ Email sent successfully!";
    } else 
    {
        echo "❌ Email sending failed.";
    }
}
?>
