
    <?php

require_once 'connection.php';

if($_POST) 
{
   
   
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$cnic = $_POST['cnic'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];
    
    $q = " update patientdata set  username='$username', password='$password'  , Email='$email',phone=$phone,cnic='$cnic',city='$city',gender='$gender',disease='$disease' where password=$password ";

    if($conn->query($q) === TRUE)
    {
        $q = "SELECT count(password) as totalpatient FROM patientdata";
        $result = $conn->query($q);
        echo "patient record Updated successfully. <br>totalpatient : " . $result->fetch_object()->totalpatient . "<br>";
        //echo 'rows received = '. $result->num_rows;
        echo "rows updated= ". $conn->affected_rows . "<br>";
        echo "<br>";
        echo "Updated Data."  ."<br> username : "  . $username ."<br> password : "  . $password."<br> email : "  . $email."<br> phone : "  . $phone ."<br> cnic  : ". $cnic ."<br> city : " .$city ."<br> gender : "  . $gender ."<br> disease : "  . $disease ."<br>";
    

    } 
    else 
    {
        echo "Error " . $sql_query . ' ' . $conn->error;
    }
 

    $conn->close();
}
?>
