<?php
$mysqli=new mysqli("localhost","shashank","shasha2777","web");
$email=$_POST["email"];
$dob=$_POST["dob"];
$sql="SELECT * FROM signup WHERE email='$email' AND dob='$dob'";
$result=mysqli_query($mysqli,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if(!strcmp($row['dob'],$dob))
        {
        $new=$row['password'];
        echo "<script type='text/javascript'>alert('Your Password is:$new');</script>";
      }
      else {
      echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
      }
    }
} else {
    echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
}
/*
if ($mysqli->query($sql) === TRUE) {

}
else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}*/
$mysqli->close();
 ?><html>
 <head>
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <title>Login Page</title>
  <style>
  body
  {
    background-image: url('background_nebula.jpg');
  }
  .c1
  {

    background-color:#00264d;
    padding-top: 3px;
    padding-bottom: 15px;
    margin-bottom: 5px;
    font-family:Boogaloo;
    opacity: 0.9;

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
     opacity: 0.8;
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
  .login_block
  {
   color:#00e6e6;
    background-color:#00274d;
    margin-right: 65px;
    padding-left: 35px;
    padding-bottom: 30px;
    padding-top: 2px;
    opacity: 0.6;
    margin-bottom: : 0px;
    border-radius: 45px;
    margin-top: -10px;
  }
  .c3
  {
    margin-left:40px;
  }
 .footer {
   right: 0;
   bottom: 0;
   left: 0;
   padding: 0.5rem;
 }
 .vl {
     border-left: 1px solid green;
     height: 500px;
 }
  </style>
 </head>
 <body>
   <ul>
     <li class="head"><a href="home.html">BUZZGAMES!</a></li>
     <!--
     <li style="float:left;padding-left:5px"><img src="logo.png" alt="weblogo" height="75px" width="75px"></li>
   -->
     <li style="padding-top:15px"><a href="login_final.html">Login/SignUp</a></li>
     <li style="padding-top:15px"><a href="about_page.html">About</a></li>
     <li style="padding-top:15px"><a href="contact.html">Contact</a></li>
     <li style="padding-top:15px"><a href="categories_page.html">Categories</a></li>
     <li style="padding-top:15px;padding-left:50px"><a href="home.html">Home</a></li>
   </ul>
 <br>
 <br>
 <div class="row">
   <div class="col-md-8">
     <div class="c3">
     <img src="logo.png" alt="buzzgames-logo" height="435px" width="635px">
   </div>
 </div>
 <div class="col-md-4">
   <div class="login_block" style="margin-top:10%">
   <h2 style="font-family:Boogaloo;margin-left:15%;padding-top:10px"><b>Password Recovery</b></h2>
   <br>
   <form action="forgot.php" method="post">
 <label style="font-family:Boogaloo;font-size:20px">Email:<br>
 <div class="col-xs-18">
 <input type="text" name="email" placeholder="Email" name="email" color="black" class="form-control col-xs-6" required></label><br><br>
 </div>
 <label style="font-family:Boogaloo;font-size:20px">DOB:<br>
 <div class="col-xs-18">
 <input type="date" placeholder="DOB" name="dob" class="form-control" required></label>
 </div>
 <br>
 <input type="submit" class="btn btn-info btn-block" style="border-radius:10px;font-family:Boogaloo;padding:10px;margin-left:55px"><br>
 </form>
  </div>
 </div>
 </div>
 <br><br>
 <div class="c1 footer" style="margin-top:9%">
  <b  style="margin-bottom:25px;color:#00e6e6;font-size: 10px;font-family:Boogaloo;">2017 © BUZZGAMES, All Rights Reserved.</b>
  </div>
 </body>
 </html>
