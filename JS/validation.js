function checkValidation()
{
        var tag = document.postadd.tag.value;
        var name = document.postadd.name.value;
        var mobno = document.postadd.mobNo.value;
        var email = document.postadd.email.value;
        var cat = document.postadd.category.value;
        var price = document.postadd.price.value;
        var des = document.postadd.description.value;
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;
        var fuData1 = document.getElementById('fileChooser1');
        var FileUploadPath1 = fuData1.value;
        if (FileUploadPath == '' || FileUploadPath1 == '' || tag == '' || tag == null || name == '' || name == null || mobno == '' || email == '' || email == null || cat == -1 || price == '' || price == null || des == null || des == '')        
        {
            alert(" Please Fill The All Required Fields ");
//            document.getElementById('fileChooser').focus();
            return false;
        } 
        if(document.postadd.fsp[0].checked == false && document.postadd.fsp[1].checked == false)
        {
            alert("Please Select any 'show name' or 'not show name'");
            return false;
        }
        
        if(tag.length < 10 || tag.length > 100)
        {
            alert("TagLine require 10 to 100 characters .")
            document.postadd.tag.focus();
            return false;
        }
        
        var patternName = /([a-zA-Z\s]{1,50})/;
        if(!patternName.test(name))
        {
            alert("Valid name is required .");
            return document.postadd.name.focus();
            return false;
        }
        
        var patternMob = /([1-9]{1})+([0-9]{9})/;
        if(!patternMob.test(mobno))
        {
            alert("valid MobileNo is required .");
            return document.postadd.mobNo.focus();
            return false;
        }
        
        var patternmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-z]{2,4})+$/;
        if(!patternmail.test(email))
        {
            alert("Valid mail required .");
            document.postadd.email.focus();
            return false;
        }
        
        if(price < 1)
        {
            alert("please enter a valid price");
            document.postadd.price.focus();
            return false;
        }
        
        if(des.length <10 || des.length>2000)
        {
            alert("description is required 10 to 2000 characters");
            document.postadd.description.focus();
            return false;
        }
}    
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(70);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(70);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(70);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }