
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Post Add</title>
        <link rel="stylesheet" href="css/register.css">
        <!--<link rel="stylesheet" href="css/postad.css">-->
        <!--<script src="libs/bootstrap.min.js"></script>-->
        <script src="libs/jquery-3.0.0.min.js"></script>
        <script src="libs/angular.min.js"></script>
        <script type="text/javascript" src="JS/validation.js"></script>
       
    </head>
    <body style="background-image: url(img/back/brickwall.png);">    
            <?php include 'header.php';
            
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            $target_dir = "C:/xampp/htdocs/php_kiet_bazar/upload/";
            
            $target_file1 = $target_dir .basename($_FILES["fileChooser"]["name"]);
            $target_file2 = $target_dir .basename($_FILES["fileChooser1"]["name"]);
            $target_file3 = $target_dir .basename($_FILES["fileChooser2"]["name"]);
            move_uploaded_file($_FILES["fileChooser"]["tmp_name"], $target_file1);
            move_uploaded_file($_FILES["fileChooser1"]["tmp_name"], $target_file2);
            move_uploaded_file($_FILES["fileChooser2"]["tmp_name"], $target_file3);
            // image save in DB
            $image1=basename( $_FILES["fileChooser"]["name"]); // used to store the filename in a variable
            $image2=basename( $_FILES["fileChooser1"]["name"]);
            $image3=basename( $_FILES["fileChooser2"]["name"]);
            
            $tag=$_POST["tag"];
            $name=$_POST["name"];
            $fsp=$_POST["fsp"];
            $mob=$_POST["mobNo"];
            $email=$_POST["email"];
            $hostel=$_POST["hostel"];
            $room=$_POST["room"];
            $category=$_POST["category"];
            $price=$_POST["price"];
            $description=$_POST["description"];
            
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            $sql="INSERT INTO postadd_table(EMAIL, TAGLINE, NAME, FSP, ROOM_NO, MOBILE_NO, HOSTEL, CATEGORY, PRICE, PIC1, PIC2, PIC3, DESCRIPTION) VALUES ('".$email."', '".$tag."', '".$name."', '".$fsp."', '".$room."', '".$mob."', '".$hostel."', '".$category."', '".$price."', '".$image1."' , '".$image2."' , '".$image3."', '".$description."' )";
            
            //$conn->query($sql);
            if($conn->query($sql)) {
                echo"<script>alert('DETAILS SAVED')</script>";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
            } 
             ?> 
            
        
        
        
        
                <br><br>
                <div class="main_postad" style="background-image: url(img/back/cork-wallet.png); ">
                    <center>
                <!--<form ng-submit="checkValidation(postadd.$valid)" autocomplete="on" name="postadd" novalidate="novalidate" action="postadd.php" method="post">-->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" enctype="multipart/form-data" onsubmit="return checkValidation()" autocomplete="on" name="postadd" novalidate="novalidate">
                <h1><u>POST YOUR ADD</u></h1>
                <br><br>
                <div id="start">
                    <table border="0">
                        <tr class="t">
                        <td>TAG-LINE *:</td>
                        <td><input type="text" id="tag" name="tag" placeholder="Tag line for add" ng-model="tag" ng-minlength="10" ng-maxlength="100" size="30" autofocus="on" required></td>
                        <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.tag.$dirty && postadd.tag.$invalid">
                        <span ng-show="postadd.tag.$error.required">Tag Line is required.</span>
                        <span ng-show="postadd.tag.$error.minlength">Tag Line Is Too Sort.</span>
                        <span ng-show="postadd.tag.$error.maxlength">Tag Line Is Too Long.</span>
                        </span></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>       
                 
                    <tr class="t">
                        <td>NAME * :</td><td><input type="text" name="name" id="name" ng-model="name" pattern="[a-zA-Z\s]{1,50}" placeholder="Type Name Here" required></td></tr>
                        <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.name.$dirty && postadd.name.$invalid">
                        <span ng-show="postadd.name.$error.required">Name is required.</span>
                        <span ng-show="postadd.name.$error.pattern">Please enter a valid name.</span>
                        </span>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                  
                    <tr class="t"><td>For Security Purpose * :</td><td><input type="radio" value="Show Name" name="fsp">Show Name  <input type="radio" value="Not Show Name" name="fsp">Not Show Name</td></tr>
                    <tr><td>&nbsp;</td></tr>
                
                    <tr class="t">
                    <td>MOBILE NO. * :</td>
                    <!--</td><td><input id="color" type="text" value="+91" readonly size="1"></td>-->
                    <td><input type="text" id="num" placeholder="Type 10 digit mobile number" name="mobNo" ng-model="mobNo" pattern="[1-9]{1}[0-9]{9}" required ></td><tr>
                    <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.mobNo.$dirty && postadd.mobNo.$invalid">
                    <span ng-show="postadd.mobNo.$error.required">Number is required.</span>
                    <span ng-show="postadd.mobNo.$error.pattern">Invalid number.</span>
                    </span>
                    </td></tr>
                    <tr><td>&nbsp;</td></tr>
                 
                    <tr class="t"><td> E-MAIL ID * :</td><td><input type="text" id="mail" placeholder="Type Id here" name="email" ng-model="email" ng-pattern="/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4}$/" required/><td></tr>
                    <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.email.$dirty && postadd.email.$invalid">
                    <span ng-show="postadd.email.$error.required">Email is required.</span>
                    <span ng-show="postadd.email.$error.pattern">Invalid Email id.</span>
                    </span>
                    </td></tr> 
                    <tr><td>&nbsp;</td></tr>                                    
                  
                    <tr class="t"><td>HOSTEL :</td><td><select name="hostel" id="hostel">
                              <option value="-1" disabled="on" selected></option>
                              <option ng-value="">GARGI</option>
                              <option ng-value="">SARASWATI</option>
                              <option ng-value="">TAGORE</option>
                              <option ng-value="">VIVEKANAND</option>
                              <option ng-value="">ARYABHATT</option>
                              <option ng-value="">ATITHI</option>
                              <option ng-value="">CHANDRAGUPTA</option>
                              <option ng-value="">OTHERS</option>
                    </select></td></tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr class="t"><td>ROOM NO. : </td><td><input type="text" id="room" placeholder="Type Room.NO" name="room"></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                 
                    <tr class="t">   
                        <td>CATEGORY * :</td><td>
                        <select name="category" id="catagory" required>
                        <option value="-1" disabled ng-selected>-----select category-----</option>
                        <option value="cooler">COOLER</option>
                        <option value="books">BOOKS</option>
                        <option value="mattress">MATTRESS</option>
                        <option value="mobiles">MOBILE & ACCESSORIES</option>
                        <option value="electronics">ELECTRONIC ACCESSORIES</option>
                        <option value="others">OTHERS</option>
                        </select>
                            </td><td>
                            <img src="img/cat_cooler.png" width="30" height="30">
                            <img src="img/cat_bed.png" width="30" height="30">
                            <img src="img/cat_mob.png" width="30" height="30">
                            <img src="img/cat_book.png" width="30" height="30"></td></tr>
                        <tr><td>&nbsp;</td></tr>
                    <tr class="t">
                              <td></td><td><span style="color:red" ng-show="postadd.category.$dirty">
                              <span ng-show="postadd.category.$error.required">Category is required.</span></span>
                                <!--<span ng-show="postadd.email.$error.value">Invalid Email id.</span>--> 
                                </td>
                </tr>
                
                <tr class="t"> <td> PRICE * :</td><td><input type="text" placeholder="Price of product" id="price" name="price" ng-model="price" pattern="[1-9]{1}[0-9]{0,4}" required></td></tr>
                <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.price.$dirty && postadd.price.$invalid">
                 <span ng-show="postadd.price.$error.required">Price is required.</span>
                 <span ng-show="postadd.price.$error.pattern">Invalid Price.</span>
               </span>
               </td></tr>
               <tr><td>&nbsp;</td></tr>
               
               <tr class="t"><td> UPLOAD 2 PICS * :</td> 
               <td><input type="file" name="fileChooser" id="fileChooser" accept="image/*" onchange="readURL(this);" required/></td></tr>
               <tr><td></td><td><input type="file" name="fileChooser1" id="fileChooser1" accept="image/*" onchange="readURL1(this)" required/></td></tr>
               <tr><td></td><td><input type="file" name="fileChooser2" id="fileChooser2" accept="image/*" onchange="readURL2(this)"/></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                        <td></td><td><div id="uploadImage">
                                <div class="upimg"><img src="#" id="blah" alt="Your 1st Image" width="100px" height="70px"></div>
                                <div class="upimg"><img src="#" id="blah1" alt="Your 2nd Image" width="100px" height="70px"></div>
                                <div class="upimg"><img src="#" id="blah2" alt="Your 3rd Image" width="100px" height="70px"></div>
                        </div></td>
                </tr>
                <tr><td>&nbsp</td></tr>
               <tr class="t"><td>Add Description * :</td><td> <textarea rows="4" id="text1" cols="50" name="description" ng-model="description" placeholder="Include The Brand Model Age any Any Other details if required..." ng-minlength="10" ng-maxlength="2000" required>
                       </textarea></td></tr>
               <tr class="t"><td></td><td><span style="color:red" ng-show="postadd.description.$dirty && postadd.description.$invalid">
                  <span ng-show="postadd.description.$error.required">Description is required.</span>
                  <span ng-show="postadd.description.$error.minlength">Description Is Too Sort.</span>
                  <span ng-show="postadd.description.$error.maxlength">Description Is Too Long.</span>
                  </span>
               </td></tr>
               <tr><td>&nbsp;</td></tr>
               </table>                   
               <br><center>By clicking 'Submit' you agree to our <a href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a></center>
               <br><br><center><a href="#"><input type="submit" id="bt" class="styled-button-8" value="SUBMIT" 
               onmouseover="this.style.background='blue'" onmouseout="this.style.background='#25A6E1'"/></a></center>  
               <br><br>
               </div>
                </form> 
                    </center>
                </div>
    <!--</center>-->
 
         <?php include 'footer.php';?>
         <!--</div>-->
    </body>
       
   
</html>