<!-- admin saurav1432 -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Header Page</title>
        <link rel="stylesheet" href="css/index_css.css">   
        <link rel="stylesheet" href="css/drop_down.css">  
        <script src="JS/drop_down.js"></script>
        <script src="libs/angular.min.js"></script>
        <script src="JS/app.js"></script>
        <script src="JS/slider.js"></script>
       
    </head>
    <body ng-app="friendapp" >
    <?php session_start(); if(isset($_SESSION["name"])) {?>
         <div class="header" >
             <table border="0">
             <tr>
             <td> <a href="index.php"><img src="img/site3.png" height="90" width="120"></a></td>
             <td width="60"></td>
             <td><br><br><center><font size="7" color="blue">KIET BAZAR</font></center>
                   <center><font size="4" color="red"> A Platform For Selling of Old Things</font></center>
             </td>
             </tr>
             </table>
             <br> <div>
            </div>
         </div> 
        <div class="header">
        <div class="right">
              <!--<a href="login.php"><button class="styled-button-8">Hello Saurav</button></a> -->
        <div class="dropdown" >
        <button onclick="myFunction()" class="dropbtn"><?php  echo $_SESSION["name"]; ?> </button>
        <div id="myDropdown" class="dropdown-content">
        <a href="index.php">Home</a>
        <a href="#">History</a>
        <a href="logout.php">Logout</a>
        </div>
        </div>
              <a href="postadd.php"><button class="styled-button-1">Submit A Free Add</button></a>
              <br><br><br><br><br><br>
         </div>
        </div>
        <hr/>
         
    <?php } else{?>
         <div class="header" >
             <table border="0">
             <tr>
             <td> <a href="index.php"><img src="img/site3.png" height="90" width="120"></a></td>
             <td width="60"></td>
             <td><br><br><center><font size="7" color="blue">KIET BAZAR</font></center>
                   <center><font size="4" color="red"> A Platform For Selling of Old Things</font></center>
             </td>
             </tr>
             </table>
             <br> <div>
            </div>
         </div>
         <div class="header">
         <div class="right">
              <a href="login.php"><button class="styled-button-8">My Account</button></a>
              <a href="postadd.php"><button class="styled-button-1">Submit A Free Add</button></a>
              <br><br><br><br><br><br>
        </div>
        </div>
        <hr/>
    <?php } ?>
    </body>
</html>
