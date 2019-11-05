<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="stylee.css">
        <title>Update Record</title>
        <style>


.container {
  position: relative;
  width: 60%;
  }
    div{
   
  border:4px solid white;
  height:502px;
  width:400px;
  margin:25px;
  display: block;
margin-left:auto;
margin-right:auto;
  padding-left: 50px;
  padding-right: 70px;
  text-align: center;
  color:black;
 background-color: rgba(255, 255, 255, 0.637);
}
.footer {
   position: fixed;
   left: 0;
 
   width: 100%;
   height: 10%;
   background-color:black;
   margin-top:0px;;
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

body {
  background-image: url("https://img.freepik.com/free-vector/abstract-medical-wallpaper-template-design_53876-61803.jpg?size=1400&ext=jpg");
  background-repeat: no-repeat;
  
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
    <form method="POST" action="update_user.php">
    <div class="container">    
    <h1 style="color: black;"><bold>Update Patient Data</bold></h1>
    USERNAME:
    <input  style="height: 30px;" type="text" name="username"><br><br>
    PASSWORD:
    <input  style="height: 30px;"type="password" name="password"><br><br>
    EMAIL ADDRESS:
    <input style="height: 30px;" type="text" name="email"><br><br>
    PHONE NUMBER:
    <input style="height: 30px;" type="text" name="phone"> <br><br>
    CNIC:
    <input style="height: 30px;" type="text" name="cnic"><br><br>
    CITY:
    <input type="text" name="city"><br><br>
DISEASE:
    <input type="text" name="disease"><br><br>
    GENDER:
    <input type="text" name="gender" ><br><br>

    <input type="submit" style="margin-left: 100px;"class="button" ></a>
 </div>
    </form>
    <div class="footer">
           
            <h5 style="color: white;text-align: center;">© 2019 Doctor's Hospital® Global Inc.</h5>
         </div>
    </body>
</html>