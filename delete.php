<!DOCTYPE html>
<html>
    <head>
        <title>Delete User</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">
        <style>
     .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   
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
        <form action="delete_user.php" method="post">
        <a href="Home.html">
  <img src="icon.png" >
</a>
        <ul>
          <li><a href="Home.html">Home</a></li>
          <li><a href="About Us.html">About Us</a></li>  
          <li><a href="contact.html">Contact Us</a></li>
          </ul><br><br><br>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th >User Name</th>
                    <td><input type="text" style="height: 30px;"name="username" placeholder="Enter User Name" /></td>
              </tr>            
            </table><br><br>
            <li><input type="submit" value="Delete this user Booking"  class='button'>
        </form>
        <div class="footer" style="margin-top: 90px;" >
           
              <h5 style="color: white;text-align: center;">© 2019 Doctor's Hospital® Global Inc.</h5>
              
           </div>
    </body>
</html>