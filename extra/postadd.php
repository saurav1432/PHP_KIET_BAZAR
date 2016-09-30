
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Post Add</title>
        <link rel="stylesheet" href="css/postad.css">
        <script src="libs/bootstrap.min.js"></script>
        <script src="libs/jquery-3.0.0.min.js"></script>
        <script src="libs/angular.min.js"></script>
       
    </head>
    <body style="background-image: url(img/back/seigaiha.png);">
        
            <?php
                if($_SERVER["REQUEST_METHOD"]=="post"){
                $target_dir = "C:/xampp/htdocs/php_kiet_bazar/upload/";

                $target_file1 = $target_dir . basename($_FILES["photoA"]["name"]);
                $target_file2 = $target_dir . basename($_FILES["photoB"]["name"]);
                $target_file3 = $target_dir . basename($_FILES["photoC"]["name"]);
            
            /*echo $target_file;
            echo "-----".basename($_FILES["photoA"]["name"])."-------";
            echo "-----".basename($_FILES["photoB"]["name"])."-------";
            echo "-----".basename($_FILES["photoC"]["name"])."-------";
            echo "--tag is ".$_POST["tag"]."--";
            echo "--tag is ".$_POST["name"]."--";
            $uploadOk1 = 1;
            $uploadOk2 = 1;
            $uploadOk3 = 1;
            $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
            $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
            $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
            $check1 = getimagesize($_FILES["photoA"]["tmp_name"]);
            $check2 = getimagesize($_FILES["photoB"]["tmp_name"]);
            $check3 = getimagesize($_FILES["photoC"]["tmp_name"]);
            // Check If Image 1
            if($check1 !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk1 = 1;
            }   
            else{
            echo"<script>alert('Image1 is Not an Image')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk1 = 0;
            }
            // Check If Image 1
            if($check2 !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk2 = 1;
            }   
            else{
            echo"<script>alert('Image2 is Not an Image')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk2 = 0;
            }
            // Check If Image 3
            if($check3 !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk3 = 1;
            }   
            else{
            echo"<script>alert('Image3 is Not an Image')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk3 = 0;
            }
            
            // Check file size
            if ($_FILES["photoA"]["size"] > 1000000) { // 1MB
            echo"<script>alert('Sorry, your Image1 is too large.')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk1 = 0;
            }
            if ($_FILES["photoB"]["size"] > 1000000) { // 1MB
            echo"<script>alert('Sorry, your Image2 is too large.')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk2 = 0;
            }
            if ($_FILES["photoC"]["size"] > 1000000) { // 1MB
            echo"<script>alert('Sorry, your Image3 is too large.')</script>";
            echo"<script>window.location='#'</script>";
            $uploadOk = 0;
            }
            
            if ($uploadOk1 == 0 || $uploadOk2 == 0 || $uploadOk3 == 0) {
                echo"<script>alert('Sorry, your file was not uploaded.')</script>";
          
            }
            else {*/
            
            move_uploaded_file($_FILES["photoA"]["tmp_name"], $target_file1);
            move_uploaded_file($_FILES["photoB"]["tmp_name"], $target_file2);
            move_uploaded_file($_FILES["photoC"]["tmp_name"], $target_file3);
            // image save in DB
            $image1=basename( $_FILES["photoA"]["name"]); // used to store the filename in a variable
            $image2=basename( $_FILES["photoB"]["name"]);
            $image3=basename( $_FILES["photoC"]["name"]);
            $tag=$_POST["tag"];
            $passw="empty";
            $name=$_POST["name"];
            $fsp=$_POST["fsp"];
            $mob=$_POST["mob"];
            $email=$_POST["e_mail"];
            $hostel=$_POST["hostel"];
            $room=$_POST["room"];
            $category=$_POST["category"];
            $price=$_POST["price"];
            $description=$_POST["description"];
            
            $pk="hello";
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            $sql="INSERT INTO postadd_table(EMAIL, PASSWORD, TAGLINE, NAME, FSP, ROOM_NO, MOBILE_NO, HOSTEL, CATEGORY, PRICE, PIC1, PIC2, PIC3, DESCRIPTION, WHENADDED) VALUES ('".$email."', '".$passw."', '".$tag."', '".$name."', '".$fsp."', '".$room."', '".$mob."', '".$hostel."', '".$category."', '".$price."', '".$image1."', '".$image2."', '".$image3."', '".$description."', NOW()  )";
            
            $conn->query($sql);
            if($conn->query($sql) === TRUE) {
                echo"<script>alert('DETAILS SAVED')</script>";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
            } 
            //}
            
            ?>
                  
            <?php include 'header.php';?> 
            <br><br>
            <div  style="background-image: url(img/back/old_map.png); ">
            <center>
            <div class="main_postad">
            <form ng-submit="checkValidation(postadd)" autocomplete="on" name="postadd" novalidate="novalidate" >
            <h1><u>POST YOUR ADD</u></h1>
            <br><br>
            <div id="start">
            <table border="0">
            <tr>
            <td>TAG-LINE :</td>
            <td><input type="text" id="tag" name="tag" ng-model="tag" ng-minlength="10" ng-maxlength="100" size="50" required>
            <span style="color:red" ng-show="postadd.tag.$dirty && postadd.tag.$invalid">
            <span ng-show="postadd.tag.$error.required">Tag Line is required.</span>
            <span ng-show="postadd.tag.$error.minlength">Tag Line Is Too Sort.</span>
            <span ng-show="postadd.tag.$error.maxlength">Tag Line Is Too Long.</span>
            </span></td>
            </tr>
            <tr><td>&nbsp;</td></tr>       
                 
                  <tr>
                  <td>NAME :</td><td><input type="text" name="name" id="name" ng-model="name" pattern="[a-z]{1,50}" placeholder="Type Name Here" required>
                  <span style="color:red" ng-show="postadd.name.$dirty && postadd.name.$invalid">
                  <span ng-show="postadd.name.$error.required">Name is required.</span>
                  <span ng-show="postadd.name.$error.pattern">Please enter a valid name.</span>
                  </span>
                  </td>
                  </tr>
                  <tr><td>&nbsp;</td></tr>
                  
                  <tr><td>For Security Purpose :</td><td><input type="radio" value="Show Name" name="fsp">Show Name  <input type="radio" value="Not Show Name" name="fsp">Not Show Number</td></tr>
                  <tr><td>&nbsp;</td></tr>
                
                 <tr>
                 <td>MOBILE NO. :</td><td><input id="color" type="text" value="+91" readonly size="1"><input type="text" id="num" placeholder="Type Number" name="mobNo" ng-model="mobNo" pattern="[1-9]{1}[0-9]{9}" required >
                 <span style="color:red" ng-show="postadd.mobNo.$dirty && postadd.mobNo.$invalid">
                 <span ng-show="postadd.mobNo.$error.required">Number is required.</span>
                 <span ng-show="postadd.mobNo.$error.pattern">Number required 10 digit.</span>
                 </span>
                 </td></tr>
                 <tr><td>&nbsp;</td></tr>
                 
                 <tr><td> KIET E-MAIL ID :</td><td><input type="email" id="mail" placeholder="Type Id here" name="email" ng-model="email"     pattern="[a-z]{1,50}.[1-9]{1}[0-9]{6}@kiet.edu"required>
                 <span style="color:red" ng-show="postadd.email.$dirty && postadd.email.$invalid">
                 <span ng-show="postadd.email.$error.required">Email is required.</span>
                 <span ng-show="postadd.email.$error.pattern">Invalid Email id.</span>
                </span>
                 </td></tr> 
                 <tr><td>&nbsp;</td></tr>                                    
                  
                  <tr><td>HOSTEL :</td><td><select name="hostel" id="hostel">
                    <option></option>
                    <option>GARGI</option>
                    <option>SARASWATI</option>
                    <option>TAGORE</option>
                    <option>VIVEKANAND</option>
                    <option>ARYABHATT</option>
                    <option>ATITHI</option>
                    <option>CHANDRAGUPTA</option>
                    <option>OTHERS</option>
                  </select></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>ROOM NO. : </td><td><input type="text" id="room" placeholder="Type Room.NO" name="room" required></td>
                   </tr>
                   <tr><td>&nbsp;</td></tr>
                 
                <tr>   
                <td>CATEGORY :</td><td> <select name="category" id="catagory" onchange='makeInput(this.value)';>
                    <option></option>
                    <option>COOLER</option>
                    <option>BOOKS</option>
                    <option>MATTRESS</option>
                    <option>MOBILE & ACCESSORIES</option>
                    <option>ELECTRONIC ACCESSORIES</option>
                    <option>OTHERS</option>
                </select>&nbsp;&nbsp;
                <a href="#"><img src="img/cooler.jpg" width="30" height="30"></a>&nbsp;
                <a href="#"><img src="img/matteress.jpg" width="30" height="31"></a>&nbsp;
                <a href="#"><img src="img/mobile.jpg" width="30" height="30"></a>&nbsp;
                <a href="#"><img src="img/trimmer.jpg" width="30" height="34"></a></td></tr>
                <tr><td></td><td><input type='text' id="makeDyn" placeholder="type other catagory here" style="display:none;"></td></tr>
                <tr><td>&nbsp;</td></tr>
                
               <tr> <td> PRICE :</td><td><input type="text" id="price" name="price" ng-model="price" pattern="[1-9]{1}[0-9]{0,4}" required>
               <span style="color:red" ng-show="postadd.price.$dirty && postadd.price.$invalid">
                 <span ng-show="postadd.price.$error.required">Price is required.</span>
                 <span ng-show="postadd.price.$error.pattern">Invalid Price.</span>
               </span>
               </td></tr>
               <tr><td>&nbsp;</td></tr>
               
               <tr><td> UPLOAD 3 PICS:</td> 
               <td><input type="file" name="photo" class="p" value="" required/></td></tr>
               <tr><td></td><td><input type="file" name="photo" class="p" value=""/></td></tr>
               <tr><td></td><td><input type="file" name="photo" class="p" value=""/></td></tr>
                <tr><td>&nbsp;</td></tr>
               
               <tr><td>Add Description :</td><td> <textarea rows="4" id="text1" cols="50" name="description" ng-model="description" placeholder="Include The Brand Model Age any Any Other details if required..." ng-minlength="10" ng-maxlength="2000" required>
                  </textarea>
                  <span style="color:red" ng-show="postadd.description.$dirty && postadd.description.$invalid">
                  <span ng-show="postadd.description.$error.required">Description is required.</span>
                  <span ng-show="postadd.description.$error.minlength">Description Is Too Sort.</span>
                  <span ng-show="postadd.description.$error.maxlength">Description Is Too Long.</span>
                  </span>
               </td></tr>
               <tr><td>&nbsp;</td></tr>
               </table>                   
               <br><center>By clicking 'Submit' you agree to our <a href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a></center>
               <br><br><center>
               <input type="submit" id="bt" class="styled-button-8" value="SUBMIT" 
               onmouseover="this.style.background='blue'" onmouseout="this.style.background='#25A6E1'"/></center>  
               <br><br>
               </div>
               </form> </div> </center>
               <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

       <script>
           var app = angular.module("postaddModule",[]);
           app.controller("postaddController",function($scope)
                         {
                    $scope.checkValidation = function(form)
                    {
                        if(form.$valid)
                   {
                        console.log("your form is successfully submit...");
                    }
               else
                  alert("please fill the required fields");
                   }
           });
        </script>
         <?php include 'footer.php';?>
         </div>
    </body>
       
   
</html>