<?php include 'db.php'; ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CampusXchange/Home</title>

 <!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">


  <!-- cdn JQUARY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!--style cdn -->
  <!-- cdn bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
<!-- cdn fontstyle  -->
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
<!-- cdn animation  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

   <!-- CSs link -->
  <link rel="stylesheet" href="Style.css" type="text/css">
  

</head>
<body >
  <header>
  <nav class="navbar navbar-expand-lg">
    <!-- webname  ＣａｍｐｕｓＸｃｈａｎｇｅ -->
  <div class="Mobile_name">ＣａｍｐｕｓＸｃｈａｎｇｅ</div>
  <a class="website_name "><p>CampusXchange</p></a>

  <!-- toggle icon -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="glyphicon glyphicon-menu-hamburger"></span>
  </button>
  <!-- nav links  -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#NotesContent">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Assignment">Assignment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#Portfolios">Portfolios</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link disabled" href="#">BookExchange</a>
      </li>
       <li class="nav-item">
        <a class="nav-link disabled" href="#">About us</a>
      </li>
    </ul>
  </div>
</nav>
  </header>

  <main>
    <section class="hero">
    
      <h1>██▓▒­░𝙰 𝙲𝚘𝚕𝚕𝚊𝚋𝚘𝚛𝚊𝚝𝚒𝚟𝚎 𝚜𝚙𝚊𝚌𝚎 ░▒▓██</h1>
      <h4>𝙵𝚘𝚛 𝙽𝚘𝚝𝚎 𝚂𝚑𝚊𝚛𝚒𝚗𝚐, 𝙽𝚘𝚝𝚎𝚜 𝚊𝚌𝚌𝚎𝚜𝚜𝚒𝚗𝚐 , 𝙿𝚘𝚛𝚝𝚏𝚘𝚕𝚒𝚘 𝚌𝚛𝚎𝚊𝚝𝚒𝚗𝚐 , 𝙰𝚜𝚜𝚒𝚐𝚗𝚖𝚎𝚗𝚝 𝚑𝚎𝚕𝚙, 𝚊𝚗𝚍 𝙱𝚘𝚘𝚔 𝙴𝚡𝚌𝚑𝚊𝚗𝚐𝚎</h4> 
    <!-- <a href="Authetication.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-triangle-right"></span>Login</a> -->
    </section>
    <!------Notes section -------------------------------------------------------------->
    <section class="Notes content" id="NotesContent">
      <h2>Notes</h2><p>* Only for BCA students</p>
    <form method="GET">
    <input type="text" name="search" placeholder="Enter subject name...." style="font-size:16px; font-family:'Poppins', sans-serif;">
    <button type="submit" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-search"></span>Search</button>
    </form>

       <br>
       <br>
    <!------Notes section -------------------------------------------------------------->
      <!-- Backend work for accessing notes ................................... -->
      
 <?php

$conn=new mysqli("localhost","root","","campusXchange");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $search = $conn->real_escape_string($_GET['search']);
    $query = "SELECT * FROM notes WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
    $result = $conn->query($query);
     if ($result->num_rows!=0) {
        while ($row = $result->fetch_assoc())

        {  
       $originalLink = $row['noteLink'];

    // Extract the FILE ID using regex   // this help me to convert drive view link into donloadable link ...............................
    preg_match("/\/d\/(.*?)\//", $originalLink, $matches);
    $fileId = $matches[1] ?? null;

    if ($fileId) {
        $downloadLink = "https://drive.google.com/uc?export=download&id=" . $fileId;

    }
           echo "<div class='Note_box'>
        <h2 id='Note_tittle'>{$row['title']}<button id='span'  onclick=\"copyLink('{$row['noteLink']}')\"><span class='glyphicon glyphicon-share-alt'></span></button> </h2><br>
        <textarea id='Note_content' readonly>{$row['content']}</textarea>
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read <a  href=' $downloadLink ' download >Download</a></div>
      </div>";


        }
       
    } else 
    {
     
      
      echo "<script>
            alert('No data found !');
            window.location.href = 'index.php';
          </script>";
      
    }
}

else


//for permanent 3 iteam display here ..............................................................
{
  $result = $conn->query("SELECT * FROM notes ORDER BY created_at DESC");
  $count = 0;

    while ($count < 3 && $row = $result->fetch_assoc()) {

       $originalLink = $row['noteLink'];

    // Extract the FILE ID using regex   // this help me to convert drive view link into donloadable link ...............................
    preg_match("/\/d\/(.*?)\//", $originalLink, $matches);
    $fileId = $matches[1] ?? null;

    if ($fileId) {
        $downloadLink = "https://drive.google.com/uc?export=download&id=" . $fileId;

    }

     echo "<div class='Note_box'>
        <h2 id='Note_tittle'>{$row['title']}<button id='span'  onclick=\"copyLink('view.php?id={$row['id']}')\"><span class='glyphicon glyphicon-share-alt'></span></button> </h2><br>
        <textarea id='Note_content' readonly>{$row['content']}</textarea>
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read</a> <a  href=' $downloadLink ' download >Download</a></div>
      </div>";
        
       $count++;
    }
}
    ?>
      
    </section>


<!-- 
    Assignment section  -->
   
       <section  id="Assignment">
    
      <h1>For Lab Assignment Help ?</h1>
      <p>for Portfolios, Note Sharing, Notes accessing ,assignment help, and Book Exchange to create a blog, Please login and use the admin panel to publish from your space</P> 
    <!-- <a href="Authetication.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-triangle-right"></span>Login</a> -->
     <br>
     <br>
     <br>
         <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20MS%20Office%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>MS Office</a>
                  <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20C%20Programming%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>C Programing</a>
                           <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20WEB%20Technology%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>WebTechnology</a>
                                    <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20DSA%20Using%20C++%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>DSA using C++</a>
                                             <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20DBMS%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>DBMS</a>
                                                   <a href="https://wa.me/919155726625?text=Hey%20CampusXchange%20Team%20can%20you%20Please%20share%20the%20PHP%20Assignment" target="blank"><span class="glyphicon glyphicon-triangle-right"></span>PHP</a>
    </section>
      <section  id="Portfolios">
    
      <h1>Are you intrested to make Portfolio?</h1>
      <p>Select your template and fill the form given below . our team contact you within 24 Hr. </P> 
    <!-- <a href="Authetication.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-triangle-right"></span>Login</a> -->
     <br>
     
<div class="slider-box" id="sliderBox">
  <div class="slider-images" id="slider">
    <img src="https://picsum.photos/id/1015/400/250" alt="Image 1">
    <img src="https://picsum.photos/id/1016/400/250" alt="Image 2">
    <img src="https://picsum.photos/id/1018/400/250" alt="Image 3">
    <img src="https://picsum.photos/id/1018/400/250" alt="Image 3">
    <img src="https://picsum.photos/id/1018/400/250" alt="Image 3">
  </div>
</div>

<div class="numbers" id="numberContainer">*This indicate sample number: </div>
<br>
<br>
<form method="GET">
    <input type="text" name="search" placeholder="Enter your name" style="font-size:16px; font-family:'Poppins', sans-serif;">
     <input type="email" name="search" placeholder="Email" style="font-size:16px; font-family:'Poppins', sans-serif;">
      <input type="tel" name="search" placeholder="Mobile" style="font-size:16px; font-family:'Poppins', sans-serif;">
       <input type="number" name="search" placeholder="selected sample..." style="font-size:16px; font-family:'Poppins', sans-serif;">
    <button type="submit" class="btn btn-info btn-lg" onsubmit="Formvalid()">Submit</button>
    </form>
 
       
    </section>
  </main>


  <footer>
    <p><a href="https://drive.google.com/file/d/17XUmVf4YEe-3BXceomfECZifhSNRhILa/view?usp=drive_link">Privacy & Policy | </a> <a href="https://drive.google.com/file/d/1gC6tuELq2-wC4WE1MEIopsIGkldPnTDh/view?usp=drive_link">Terms & Services</a><a href="https://wa.me/919155726625?text=Hey%2C%20can%20you%20Please%20share%20the%20details%20about%20𝗕𝗹𝗼𝗴𝗦𝗰𝗿𝗶𝗽𝘁"> | Contact us</a>
    <p>CampusXchange &copy;2025  All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
