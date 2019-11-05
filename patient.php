<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Patient</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <style>

.button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 10px 14px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
         .footer {
   position: fixed;
   left: 0;
   bottom:0;
   width: 100%;
   height: 10%;
   background-color:black;
   margin-top: 0px;;
  border: none;
   
}
        </style>
</head>
<body>
<a href="Home.html">
                <img src="icon.png" >
              </a>
              <ul>
               <li><a href="Home.html">Home</a></li>
               <li><a href="About Us.html">About Us</a>  

<li><a href="contact.html">Contact Us</a></li>
              </ul>
              <div class="footer">
           
            <h5 style="color: white;text-align: center;">© 2019 Doctor's Hospital® Global Inc.</h5>
         </div>
</body>
</html><br><br><br>
<?php
require_once 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$cnic = $_POST['cnic'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];


$sql = "INSERT INTO patientdata(username,password,email,phone,cnic,city,gender,disease)
VALUES ('$username','$password','$email','$phone','$cnic','$city','$gender','$disease')";

$run=mysqli_query($conn,$sql);

if($$run=TRUE)
{

echo "<h2> ThankYou you are register.You'll receive an email once the doctor accept your appointment.We appreciate your patience.</h2>";

}
else
{
    echo "database connected error";
}

$conn->close();

?>