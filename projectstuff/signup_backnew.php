<html>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
<head>
 <title>signup</title>
 <style>
 body
 {
 background-image:url('background_nebula.jpg');
 }

 .c1
 {

   background-color:#00264d;
   margin:5px;
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
.c1
 {

   background-color:#00264d;
   padding-top: 3px;
   padding-bottom: 15px;
   margin-bottom: 5px;
   font-family:Boogaloo;
   opacity: 0.9;

 }
 .footer {
  right: 0;
  bottom: 0;
  left: 0;
  padding: 0.5rem;
}
 </style>
 <?php

 $username=$_POST["username"];
 $pass=$_POST["password"];
 $re=$_POST["repass"];
 $email=$_POST["email"];
 $dob=$_POST["dob"];

 //print $username
 //echo $pass;
 $mysqli=new mysqli("localhost","shashank","shasha2777","web");
 $sql="INSERT INTO signup VALUES('$username','$pass','$email','$dob')";
if ($mysqli->query($sql) === TRUE) {

 }
 else {
     echo "Error: " . $sql . "<br>" . $mysqli->error;
 }
 $mysqli->close();
  ?>
</head>
 <body>
   <ul>
     <li class="head"><a href="home.html">BUZZGAMES!</a></li>
     <li style="padding-top:15px"><a href="login_final.html">Login/SignUp</a></li>
     <li style="padding-top:15px"><a href="about_page.html">About</a></li>
     <li style="padding-top:15px"><a href="contact.html">Contact</a></li>
     <li style="padding-top:15px"><a href="categories_page.html">Categories</a></li>
     <li style="padding-top:15px;padding-left:50px"><a href="home.html">Home</a></li>
   </ul>

<h1 align="center" style="font-family:Boogaloo;color:#66ff66;font-size:40px;padding-top:80px;">Successfully Registered</h1>
<p style="font-family:Boogaloo;color:#ff7733;font-size:30px;padding-left:70px;padding-right:70px;" align="center" >Loogin to access the account
</p>
<div class="c1 footer" style="margin-top:31%">
<b style="margin-bottom:25px;color:#00e6e6;font-size:10px;font-family:Boogaloo;">2017 © BUZZGAMES, All Rights Reserved.</b>
</div>
</body>
</html>
