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
         body{

            background-image: url('3.jpg');
         }
        </style>
</head>
<body>
<a href="Home.html">
                <img src="icon.png" >
              </a>
              
              <ul>
              <li><a href="Home.html">Home</a></li>
               <li><a href="Home.html"  class="button">Sign Out</a></li>
              </ul>
              <div class="footer">
           
            <h5 style="color: white;text-align: center;">© 2019 Doctor's Hospital® Global Inc.</h5>
         </div>
         <h1>All Bookings</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_project";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if($conn->connect_error) {
    die("connection failed : " . $conn->error);
}
$ret=mysqli_query($conn,"Select * from patientdata");

echo "<table border='6' >";
echo "<tr>";
echo "<th>id</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "<th>email</th>";
echo "<th>phone</th>";
echo "<th>cnic</th>";
echo "<th>city</th>";
echo "<th>gender</th>";
echo "<th>disease</th>";




while($row=mysqli_fetch_array($ret))
{
    echo "<tr>";
    
    echo "<td>"  .$row ['id']. "</td>";
    echo "<td>" .$row ['username']. "</td>";
    echo "<td>" .$row ['password']. "</td>";
    echo "<td>"  .$row ['email']. "</td>";
    echo "<td>" .$row ['phone']. "</td>";
    echo "<td>" .$row ['cnic']. "</td>";  
    echo "<td>" .$row ['city']. "</td>";
    echo "<td>" .$row ['gender']. "</td>";
    echo "<td>" .$row ['disease']. "</td>";
    
    echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo "<br><br>";
echo "<li><a href='delete.php'  class='button'>Delete Booking</a></li>";
    // echo "<a href='Grid box.html'><button type='button'>Home</button></a>"; 
?>
</body>
</html><br><br><br><br>