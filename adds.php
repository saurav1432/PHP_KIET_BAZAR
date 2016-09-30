<!--
To change this template, choose Tools | Templates
and open the template in the editor.
admin : saurav1432
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/index_css.css">
        <link rel="stylesheet" href="css/drop_down.css">
        <link rel="stylesheet" href="css/search_box.css">
        <link rel="stylesheet" href="css/adds.css">
        <script src="js/drop_down.js"></script>
        <script src="libs/angular.min.js"></script>
        <script src="JS/app.js"></script>
        <script src="JS/controller.js"></script>
        <script src="JS/search_box.js"></script>
    </head>
    <body ng-app="friendapp" ng-controller="friendctrl" style="background-image: url(img/back/brickwall.png);">
         <!--header file including search function-->
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
         <br><br><br><br><form><input type="text" ng-model ="search" id="search" name="search" placeholder="Search.."></form>
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
              <br><br><br><br><form><input type="text" ng-model ="search" id="search" name="search" placeholder="Search.."></form>
         </div>
         </div>
         <hr/>
        <?php } ?>
      
        <?php
        // put your code here
            $file = $_GET['par'];
            //echo $file;
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            //echo("Great work");
            $sql="Select DISTINCT * from postadd_table where CATEGORY='$file'";
            $result=$conn->query($sql);
            $emparray = array();
            while($row=$result->fetch_assoc())
            {
                $emparray[] = $row;
                //$pk=$row["PK"];
                //$tag=$row["TAGLINE"];
                //$price =$row["PRICE"];
                $str = json_encode($emparray); // str is JSON object
                //echo $str;
           }
           ?>
           <script>
           app.controller("friendctrl", function($scope){
           $scope.friends= <?php echo $str; ?>;
           })
           </script>
           
           <div id="adds_top" ng-repeat="friend in friends |filter:search" style="background-image: url(img/back/cork-wallet.png); ">
           
           <a href="show_add_modified.php?par=<?php echo'{{friend.PK}}' ?>" class="adds_firsthref">
           
           <table border="0" id="adds_first" onmouseover="this.style.background='lightblue';" onmouseout="this.style.backgroundImage='url(img/back/cork-wallet.png)' ">
           <tr>
           <td class="adds_firstTD"><center><img src="upload/{{friend.PIC1}}" width="150px" height="150px"/></center></td>
           <td class="adds_middleTD">
           <table border="0">
           <tr><td class="adds_trone">{{friend.TAGLINE}}<br><br>
           </h2><font size="2">CATEGORY - {{friend.CATEGORY}}</font></td></tr>
           <tr><td class="adds_trtwo">{{friend.HOSTEL}}</td></tr>
           <tr><td class="adds_trthree">{{friend.WHENADDED}}</td></tr>
           </table>
           </td>
           <td class="adds_lastTD"><center><img src="img/rupee.png" height="21" width="21">&nbsp;{{friend.PRICE}}</center></td>
           </tr>
           </table>   
           </a>
        </div>
   
         <?php include 'footer.php';?>
    </body>
</html>
