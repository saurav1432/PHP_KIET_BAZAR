<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Show Add</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/showAdd.css">
    <script src="libs/jquery-3.0.0.min.js"></script>
    <script src="libs/bootstrap.min.js"></script>
    <script src="js/validate.js"></script>
    </head>
    <body style="background-image: url(img/back/brickwall.png);">
        <?php include 'header.php'; ?> 
        <br><br>
        <hr>
        <?php
        $pk = $_GET['par'];
        $user='root';
        $pass='';
        $database='kiet_bazar_sample';
        $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
        
        $sql="Select DISTINCT * from postadd_table where PK='$pk'";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
            $fsp = $row["FSP"];
            $tagline=$row["TAGLINE"];
            $category=$row["CATEGORY"];
            $name=$row["NAME"];
            $description=$row["DESCRIPTION"];
            $price =$row["PRICE"];
            $hostel=$row["HOSTEL"];
            $when_add=$row["WHENADDED"];
            $email=$row["EMAIL"];
            $mob=$row["MOBILE_NO"];
            $pic1=$row["PIC1"];
            $pic2=$row["PIC2"];
            $pic3=$row["PIC3"];
            
        }
        ?>
       
        <!--<hr/><br><br>-->
        <div id="extra">
        <div class="low2HeaderLeft">
           <font id="number"><?php echo $tagline; ?></font>
           <br><br>
            <font class="font2">DATE : <?php echo $when_add; ?></font>
        </div>
        <div class="low2HeaderRight">
            <font id="font1">Rs.&nbsp;<?php echo $price; ?></font>
        </div>
        </div>
        
        <div id="break"></div>
        <div class="comp">
         <div class="low3HeaderLeft">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- DIV IMAGE Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <center>  <img src="upload/<?php echo $pic1 ?>" style="width:600px;height:500px;" alt="..."></center> 
                <div class="carousel-caption">
                PIC 1
                </div>
                </div>
            <div class="item">
                <center><img src="upload/<?php echo $pic2 ?>" style="width:600px;height:500px;" alt="..."></center>
              <div class="carousel-caption">
                PIC 2
              </div>
            </div>
             <div class="item">
                <center>  <img src="upload/<?php echo $pic3 ?>" style="width:600px;height:500px;" alt="..."></center> 
              <div class="carousel-caption">
                PIC 3
              </div>
                </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div> 
            
        <div id="gap">
            
        <div class="low3HeaderRight1">
            <font id="number"> <?php if($fsp == "Show Name"){echo $name;} else {echo "Anonymous";}  ?></font><br><br><br><br><br><br><br><br> 
            <table>
            <tr>
            <td>
            <font id="number">HOSTEL :&nbsp;</font>
            </td>
            <td>
           <font id="number"> <?php echo $hostel; ?></font>
            </td>
            <tr>
            </table>
        </div>
        
        <div class="extra">
        </div>
        
        <div class="low3HeaderRight2">
            <center><font id="number"> <?php echo $mob; ?></font></center>
        </div>
        
        <div class="extra"></div>
        
        <div class="low3HeaderRight3">
            <p><b><center>Safety Tips For Buyers</center></b></p>
            <font class="font2">
                &nbsp;&nbsp;1. Meet seller at a safe location
                <br>
                &nbsp;&nbsp;2. Check the item before you buy
                <br>
                &nbsp;&nbsp;3. Pay only after collecting item
                <br>
                &nbsp;&nbsp;4. Pay only after full satisfation
            </font>
        </div>
        </div>
        </div>
        <div class="extra1"></div>
        <div class="lowLastHeader">
             <h4><?php echo $description; ?></h4>
        </div>
        <br><br><br>
        <div class="bottomButton">
            <center> 
                <font id="font3"> Do You Have Something To Sell ? </font>
                <br><br>
                <font id="font4">Post Your Add For Free On Kiet_Bazar</font>
                <div class="imp_img">
                    <img src="img/arrow1.png" alt="left_arrow">
                    <a href="postadd.php"><button class="styled-button-1">Submit A Free Add</button></a>
                    <img src="img/arrow2.png" alt="right_arrow">
                </div>
            </center>
        </div>
    <?php include 'footer.php';?> 
    </body>
</html>
