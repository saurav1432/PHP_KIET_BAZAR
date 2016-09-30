<!-- 
    Document   : newjsplogin
    Created on : Aug 7, 2016, 3:21:39 AM
    Author     : sarthak
-->

<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kiet Shop</title>
        <link rel="stylesheet" href="css/postad.css">
         <link rel="stylesheet" href="css/index_css.css">
        <script src="libs/jquery-3.0.0.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body style="background-image: url(img/back/brickwall.png);">
         
         
            <?php include 'header.php';?>
            <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST" )
            {
                $email = $_POST["mail"];
                $password = $_POST["password"];
            
                $user = "root";
                $pass = '';
                $database = "kiet_bazar_sample";
                $conn = new mysqli('localhost', $user, $pass, $database) or die ("Unable to Connect");
        
                $sql = "SELECT * FROM register_table";
                $result=$conn->query($sql);
                $flag = 0;
                while($row=$result->fetch_assoc())
                {
                    $email_tab=$row["EMAIL"];
                    $name=$row["NAME"];
                    $pass_tab=$row["PASSWORD"];
                    if(strcmp( $email, $email_tab) == 0){
                        if( strcmp($password, $pass_tab) == 0){
                            $_SESSION["name"]=$name;
                            $flag = 1;
                            //echo"<font color='green' size='4'> Welcome </font>";
                            echo "<script>alert('You are Log in successfully')</script>";
                            echo"<script>window.location='index.php'</script>";
                        }
                     }
                }
                if($flag == 0){
                     echo"<font color='red' size='4'> Wrong Combination of Email and Password </font>";
                }
             }
            ?>
        
            <center><h3><font color="blue ">Log In</font></h3></center>
            <center>
            <div id="login" style="background-image: url(img/back/cork-wallet.png);">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" autocomplete="on" name="login" onsubmit="return validate()">
                  <br>
                  <table border="0">
                  <tr>
                  <td>Email  : </td> <td><input type="text" id="phone_mail" name="mail" autofocus required></td>
                  </tr>
                  <tr>
                  <td>&nbsp;</td> <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                  <td>Password : </td> <td><input type="password" id="pass" name="password" required></td>
                  </tr>
                  <tr>
                  <td>&nbsp;</td> <td>&nbsp;</td>
                  </tr>
                  </table>
                     
                     
                  <input type="checkbox" id="check" name="ckeckb">&nbsp;&nbsp;Remember Me
                  <br><br>
                  <div id="logid" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='lightgray';">   
              
                  <center> <input type="submit" class="styled-button-12" value="Log In" /> </center>
                  </div>
                  <br>
                     <pre><a href="www.google.co.in" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'">Unable to Login?</a>              <a href="register.php" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'">Register</a></pre>
                     <br>
                     <div id="POTP" style="background-image: url(img/back/cork-wallet.png);">
                     <a href="/#" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'">LogIn With phone & OTP</a>
                     </div>
                </form>
                </div>
                
                <br><br>
                
                
                <div id="fb"  style="background-image: url(img/back/restaurant.png);">
                   <center>
                    <h4>Log In using your Facebook account</h4>
                   <div id="concfb" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='lightgray';"><a href="www.facebook.com" class="none"><h1>facebook</h1></a></div>
                    </center> 
                </div>
                <br>
        </center>
                
                <center>By Logging in , you accept our <a id="none" href="#" onmouseover="style.color='red'" onmouseout="style.color='black'">Terms & Conditions</a></center>
                <?php include 'footer.php';?>
                
                 
    </body>
</html>