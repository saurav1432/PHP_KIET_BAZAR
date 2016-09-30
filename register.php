<!-- 
    Document   : register
    Created on : Aug 7, 2016, 3:48:53 AM
    Author     : sarthak
-->
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="css/postad.css">
        <script src="libs/jquery-3.0.0.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body  style="background-image: url(img/back/brickwall.png);">
    <?php include 'header.php';?>
    <?php
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $email = $_POST["phone&mail"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $r_password = $_POST["repeat_password"];
        //echo $name;
        if(strcmp($password, $r_password) != 0){
            echo"<font color='red' size='4'> Password should be same </font>";
            //echo"<script>window.location='register.php'</script>";
        }
        else{
            
        $user = "root";
        $pass = '';
        $database = "kiet_bazar_sample";
        $conn = new mysqli('localhost', $user, $pass, $database) or die ("Unable to Connect");
        
        $sql = "INSERT into register_table (EMAIL, NAME, PASSWORD) VALUES ('".$email."', '".$name."', '".$password."')";
       
        if ( $conn->query($sql)){
            //echo "New record created successfully";
            echo"<script>alert('DETAILS SAVED')</script>";
            echo"<script>window.location='index.php'</script>";
        } 
        else 
        {
            echo"<font color='red' size='4'> User Already Registered </font>";
            //echo"<script>alert('User Already Registered')</script>";
            //echo"<script>window.location='#'</script>";
        }
        }  
    }
    
    ?>    
        
    <h2>Register</h2>
    <center>
    <div id=demo style="background-image: url(img/back/cork-wallet.png); ">  

              <aside id="asidelreg">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="on" name="register" onsubmit="return validate()">
              <br><br>
              <table border="0">
                  
              <tr><td>Email  :</td><td> <input type="email" id="phone_mail" name="phone&mail" required autofocus></td></tr>
              <tr><td></td><td>Enter your email </td></tr>
              <tr><td>&nbsp;</td></tr>
                    
              <tr><td>Name  :</td><td> <input type="text" id="phone_mail" name="name" required autofocus></td></tr>
              <tr><td></td><td>Enter your full name </td></tr>
              <tr><td>&nbsp;</td></tr>
                     
              <tr><td>Password :</td><td> <input type="password" id="pass" name="password" required></td></tr>
              <tr><td></td><td>type your password</td></tr>
              <tr><td>&nbsp;</td></tr>
               
              <tr><td>Repeat Password :</td><td> <input type="password" id="pass" name="repeat_password" required></td></tr>
              <tr><td></td><td>Repeat your password</td></tr>
              <tr><td>&nbsp;</td></tr>
              </table>
              
              <input type="checkbox" required> By registering in app , you accept our <a id="none" href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a>
              <br><br> 
              <input type="submit" class="styled-button-8" value="Register" onmouseover="this.style.background='blue';" onmouseout="this.style.background='#5B74A8';"/> 
              
              </form> 
              </aside>
      </div> 
      </center> 
             
      <div id=demo >  
              <aside id="asiderreg">
              <table>
              <tr>&nbsp;</tr>
              <tr>&nbsp;</tr>
              <tr><p>By registering, you get access to<strong> My Account </strong>where you can:</p></tr>
              <tr><p>-> Manage your Ads (Edit, Delete, Upgrade)</p></tr>
              <tr><p>-> Check responses to your Ads</p></tr>
              <tr><p>-> Manage your settings</p></tr>
              </table>
              </aside>
      </div> 
    <?php include 'footer.php';?>
    </body>
</html>

