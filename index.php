
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="css/index_css.css">
        <link rel="stylesheet" href="css/search_box.css">
        <link rel="stylesheet" href="css/w3.css.css">
        <script src="JS/slider.js"></script>
        
    </head>
    <body style="background-image: url(img/back/brickwall.png);" >
        <?php include 'header.php';?>

        
        <div  class="main" style="background-image: url(img/back/cork-wallet.png); ">
          <?php  $file; ?>    
            <table border="0" cellspacing="10" cellpadding="10" >
                <tr>
                    <?php $file="COOLER" ;?>
                    <td length="100" width="100"><a href="adds.php?par=<?php echo$file ?>" ><center><img src="img/cooler.png" height="80px" width="80px"></center></a></td>
                    <td></td>
                    <?php $file="BOOKS" ;?>
                    <td length="100" width="100"><a href="adds.php?par=<?php echo$file ?>" ><center><img src="img/book.png" height="80px" width="80px"></center></a></td>
                    <td></td> 
                    <?php $file="MATTRESS" ;?>
                    <td length="100" width="100"><a href="adds.php?par=<?php echo$file ?>" ><center><img src="img/mattress.png" height="80px" width="80px"></center></a></td>
                    <td></td> 
                </tr>    
                <tr>
                    <?php $file="COOLER" ;?>
                    <td length="100" width="100">&nbsp;&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Cooler</font></center></a></td>
                    <td></td>
                    <?php $file="BOOKS" ;?>
                    <td length="100" width="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Books</font></center></a></td>
                    <td></td>
                    <?php $file="MATTRESS" ;?>
                    <td length="100" width="100">&nbsp;&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Mattress</font></center></a></td>
                    <td></td>
                </tr>
            </table><br><br>
            <table border="0" cellspacing="10" cellpadding="10" >
                <tr>
                    <?php $file="MOBILE AND ACCESSORIES" ;?>
                    <td length="100" width="100"><a href="adds.php?par=<?php echo$file ?>"><center><img src="img/mob.png" height="80px" width="80px"></center></a></td>
                    <td></td>
                    <?php $file="ELECTRONIC  ACCESSORIES" ;?>
                    <td length="100" width="100"><a href="adds.php?par=<?php echo$file ?>" ><center><img src="img/electronic.png" height="80px" width="80px"></center></a></td>
                    <td></td> 
                    <?php $file="OTHERS" ;?>
                    <td length="100" width="100"> <a href="adds.php?par=<?php echo$file ?>" ><center><img src="img/other.png" height="80px" width="80px"></<center></a></td>
                    <td></td> 
                </tr>    
                <tr>    
                    <?php $file="MOBILE AND ACCESSORIES" ;?>
                    <td length="100" width="100">&nbsp;&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Mobile &<br> Accessories</font></center></a></td>
                     <td></td>
                     <?php $file="ELECTRONIC  ACCESSORIES" ;?>
                     <td length="100" width="100">&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Electronic<br> Accessories</font></center></a></td>
                     <td></td>
                     <?php $file="OTHERS" ;?>
                     <td length="100" width="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adds.php?par=<?php echo$file ?>" style="text-decoration:none"><center><font size="4">Others</font></center></a></td>
                     <td></td>
                </tr>
        </table><br><br>
        </div>
            
        <div class="main" >
         <center><br><br><br><br>     
             <div >
             <div class="w3-content w3-section" style="max-width:50%" >
                <table border="0"><tr><td>
                <img class="mySlides w3-animate-fading" src="img/add1.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add2.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add3.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add4.jpg" width="210" height="250">
                </td></tr></table>
             </div>
             </div>
             <br><br><br>  
             <div class="right">
                 <img src="img/old_things.jpg" width="360" height="100">
             </div>
             </center>  
         </div>
          
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <?php include 'footer.php';?>

    </body>
</html>
