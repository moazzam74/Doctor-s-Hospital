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
               <li><a href="ulogin.html"  class="button">Sign In</a></li>
              </ul>
              <div class="footer">
           
            <h5 style="color: white;text-align: center;">© 2019 Doctor's Hospital® Global Inc.</h5>
         </div>
</body>
</html><br><br><br>
<?php
require_once 'connection.php';

if($_POST) 
{
    $username = $_POST['username'];

    $sql_query = "DELETE FROM patientdata WHERE username = '$username'";
    $result = $conn->query($sql_query);

    if($conn->affected_rows > 0)
    {
        echo $username . "<h1>deleted successfully</h1>.<br>";
        echo "rows deleted = ". $conn->affected_rows . "<br>";

        $sql_query = "SELECT count(username) as totalUsers FROM patientdata";
        $result = $conn->query($sql_query);
        echo "Remaining users : " . $result->fetch_object()->totalUsers . "<br>";
    }
    else
    {
        echo $username . " not found.<br>";
    }
    $conn->close();

    //header ("refresh:2; url=index.php");
}

?>