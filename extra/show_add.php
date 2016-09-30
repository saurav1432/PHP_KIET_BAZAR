<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Show Add</title>
    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/postad.css">
    <link rel="stylesheet" href="css/showAdd.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="libs/jquery-1.12.4.min.js"></script>
    <script src="libs/bootstrap.min.js"></script>
    <script src="js/validate.js"></script>
    </head>
    <body>
        <?php include 'header.php';?> 
        <hr/><br><br>
        <div class="low2HeaderLeft">
           <font id="font1">TagLine Here</font>
           <br><br>
            <font class="font2">Address Id and Date of Submitting</font>
        </div>
        
        <div class="low2HeaderRight">
            <font id="font1">Fill Rupees Here</font>
        </div>
        <br>
        
        <div class="low3HeaderLeft">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/one.jpg" style="width:700px;height:500px;" alt="...">
                <div class="carousel-caption">
                Cooler pic
              </div>
                </div>
            <div class="item">
              <img src="img/two.jpg" style="width:700px;height:500px;" alt="...">
              <div class="carousel-caption">
                Matteress Pic
              </div>
            </div>
             <div class="item">
              <img src="img/three.jpg" style="width:700px;height:500px;" alt="...">
              <div class="carousel-caption">
                Mobile Pic
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
            
        </div>
        
        <div class="extra">
        </div>
        
        <div class="low3HeaderRight2">
            <center><font id="number">+91 9451959966</font></center>
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
        <div class="extra1"></div>
        <div class="lowLastHeader">
            <center>Show Description Here</center>
        </div>
        
    <?php include 'footer.php';?> 
    </body>
</html>
