<?php
session_start();

$email=$_POST["email"];
$password=$_POST["pass"];
$mysqli=new mysqli("localhost","shashank","shasha2777","web");
$sql="SELECT * FROM signup WHERE email='$email' AND password='$password'";
$result=mysqli_query($mysqli,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if(!strcmp($row['password'],$password))
        {
        $new=$row['password'];
        $_SESSION["username"] = $_POST["email"];
        echo "<script type='text/javascript'>alert('Succesfully LoggedIn');</script>";
      }
      else {
      echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
      //header('Location:login_final.html');

      }
    }
} else {
    echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
    //header('Location:login_final.html');
}
/*
if ($mysqli->query($sql) === TRUE) {

}
else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}*/
$mysqli->close();
 ?>
 <html>
 <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
 <link href="css/bootstrap.css" rel="stylesheet" />
 <link href="css/bootstrap-theme.css" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet" type="text/css">
 <link rel="icon" href="logo.png" type="image/x-icon"/>
 <head>
  <title>Home Page</title>
  <style>
  body
  {
 }

  .block
  {
    background-color:#00264d;
    opacity:0.8;
    font-family:Boogaloo;
    font-size:18px;
    padding-top:5px;
    padding-bottom:10px;
    padding-left:40px;
    margin-top: 10px;
    margin-bottom: 10px;


  }

 .mb
 {

    background-color:#ffffff;
    opacity:0.65;
    font-family:Book Antiqua;
    font-size:15px;
    top:75px;
    bottom:100px;
    position: absolute;
     width: 60%;
     border-radius: 10px;
     margin-left: 260px;
     padding-top: 60px;
     padding-bottom: 20px;
     padding-left: 50px;
     padding-right: 50px;
     height: 80%;




 }



  .head
  {
    color: #00e6e6;
    font-size:45px;
    margin-left:25px;
    font-family:Boogaloo;
    float:left;
    padding-top:10px;
  }

   ul {
      position: relative;
     list-style-type: none;
     margin:0;
     padding:0;
     overflow: hidden;
     background-color:#00264d;
     opacity: 1;

   }


 li {
     float: right;
 }
 li a {
     display: block;
     color: #00e6e6;
     font-family: Boogaloo;
     text-align: center;
     padding: 5px 10px;
     text-decoration: none;
     font-size:30px;
 }
 li a:hover {
     background-color:#55ACEE;
     padding-left:25px;
     padding-right:25px;
     transition: 0.5s;
     box-shadow:3px 2px lightblue;
 }

 .c1
  {

    background-color:#00264d;
    padding-top: 3px;
    padding-bottom:15px;
    margin-bottom: 0px;
    font-family:Boogaloo;
    opacity: 0.9;

  }
  .footer {
   right: 0;
   bottom: 0;
   left: 0;
   padding: 0.5rem;
   position: fixed;
 }





 .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg5 {
   position: relative;
   background-attachment: fixed;
   background-position: center;

   background-size: cover;

 }
 .bgimg-1 {
   background-image: url("giphy (1).gif");
   opacity:1;
   height: 100%;


 }

 .bgimg-2 {
   background-image: url("Shooting.png");
   height: 100%;
 }

 .bgimg-3 {
   background-image: url("clashofclans.jpg");
   height: 100%;
 }

 .bgimg-4 {
   background-image: url("plvszom.jpeg");
   height: 100%;
 }

 .bgimg-5 {
   background-image: url("letsplay.jpeg");
   height: 100%;

 }

 .caption {
   position: absolute;
   left: 0;
   top: 35%;
   width: 100%;
   text-align: center;
   color: #000;
 }





  </style>
 </head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 <body>

   <ul>
     <li class="head"><a href="home.html" id="anchor"><span id="game">BUZZGAMES!</span></a></li>
      <!--
      <li style="float:left;padding-left:5px"><img src="logo.png" alt="weblogo" height="75px" width="75px"></li>
     -->
      <li style="padding-top:15px"><a href="login_final.html" id="sign"><span id="signup">Login/SignUp</span></a></li>
      <li style="padding-top:15px"><a href="about_page.html">About</a></li>
      <li style="padding-top:15px"><a href="contact.html">Contact</a></li>
      <li style="padding-top:15px"><a href="categories_page.html">Categories</a></li>
      <li style="padding-top:15px;padding-left:50px"><a href="home.html">Home</a></li>
    </ul>

 <div class="bgimg-1">
     <div class="caption">

     <span style="font-family:Courier New;color:#ffff33;font-size:90px;"><b>WELCOME TO BUZZGAMES!</b></span>
     <br>

     <span style="font-family:Courier New;color:#ff3300;font-size:60px;padding-top: 20px;"><b>Go Game Or Go Home</b> </span>
     <br>
   </div>
 </div>




 <div class="bgimg-2">
   <div class="mb" style="font-family:Lucida Console;color:#77773c;font-size: 40px; opacity: 0.79;margin-top:20px;height: 70%;">
    Shooty-bang-bang games are fun and all, but what other genres are out there?
    <br>
    <br>
    <b>Check out our all-time favourite games.</b>

   </div>

 </div>



 <div class="bgimg-3">
     <div class="mb" style="color:#ff9933;font-size: 45px; opacity: 0.86;padding-top:30px;height: 50%;margin-top: 70px;font-family:Lucida Console;">
     Inspired by ancient Gods, Played By Modern Heroes! <br>
     Check out our newest <span style="font-family: Palatino Linotype;color:  #ff6600;">Strategy Games! </span>
   </div>


 </div>



 <div class="bgimg-4">
    <div class="mb" style="font-family:Lucida Console;color: #ff8000;font-size: 40px; opacity: 0.79;margin-top:20px;height: 35%; padding-top: 85px;text-align: center;">
     <a href="categories_page.html">Click here to FIND MORE!</a>
   </div>

     <div class="mb" style="font-family:Lucida Console;color:black;font-size: 20px;opacity:0.87;margin-top:400px;height: 25%; padding-top: 30px;padding-bottom:10px;padding-left:20px;width: 40%;left: 40%;background-color: #ffcc00;text-align: center;">
       Scroll down to see what the creators have to say!
       <br>
       To know more view our <a href="about_page.html"><span style="color:red;">About Page</span></a>
       <br>
       Need help? You can contact us <a href="contact.html"><span style="color:red;">here</span></a>

   </div>


 </div>

 <div class="bgimg-1">
 <div class="mb" style="padding-top: 20px;padding-bottom: 20px;">

 Greetings Fellow Gamer!<br>
 Welcome to Buzz Games!<br><br>
 Buzz Games is an online website for games and game reviews.
 It showcases the best games in the hottest categories,making this a gamer's paradise.<br><br>
 Categories range from Action,Adventure,Sport and Multiplayer to Role Playing and Educational games.<br>
 These categories provide a wide range of games,each providing a different experience,to give the user a satisfying gaming session.<br><br>
 Apart from serving as a portal for these games,users have the option of reviewing the games they have played,to display their personal feedback and advice.
 This can be very helpful for newbie gamers who are looking to get the best gaming experience they can,without the hassles of google searches and unnecessary browsing.<br><br>
 Buzz Games is a one stop destination for the gaming enthusiast,and the gaming newbie alike.<br>
 We hope you like the website and what it has to offer.<br>
 Happy Gaming!<br>
 -Team Buzz Games

   </div>

 </div>
 <?php
 if(isset($_SESSION["username"]))
 {
   //echo "<script>alert(\"SET\");</script>";
   echo "<script>var g=document.querySelector(\"#game\");";
   echo "var sign=document.querySelector(\"#sign\");";
   echo "sign.setAttribute(\"href\",\"home.html\");";
   echo "var g1=document.querySelector(\"#anchor\");";
   echo "g1.textContent = \"Signout\";";
   echo "g1.setAttribute(\"href\",\"logout.html\");</script>";
   echo "<script>var k=document.querySelector(\"#signup\");";
   echo "k.innerHTML = \"$_SESSION[username]\";</script>";

 }
 echo "<script>var g=document.querySelector(\"#anchor\");";
 echo "var k=document.querySelector(\"#signup\");";
 echo "if(g.textContent==\"Signout\")
 {
   localStorage.setItem(\"user\",k.textContent);
 }
 else {

 }</script>";
 session_unset();
 session_destroy();
 ?>
 <div class="c1 footer" style="margin-top:9%">
  <b  style="margin-bottom:25px;color:#00e6e6;font-size: 10px;font-family:Boogaloo;">2017 © BUZZGAMES, All Rights Reserved.</b>
  </div>
 </body>
 </html>
