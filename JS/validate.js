
function validate()
{
    var number = document.form1.mob.value;
    var catagory = document.form1.category.value;
    var hostel = document.form1.hostel.value;
    // number
    if(isNaN(number))
        {
            alert("invalid number , please insert a numeric value");
            document.form1.mob.focus();
            return false;
        }
    if(number.length != 10)
        {
            alert("invalid number , please insert a valid number");
            return false;
        }
    
    // catagory
    if(catagory.length == 0)
        {
            alert("please select a catagory");
            document.form1.category.focus();
            return false;
        }
    
    //hostel
    if(hostel.length == 0)
        {
             alert("please select a hostel");
            document.form1.hostel.focus();
            return false;
        }
}

function makeInput(val){
 var element=document.getElementById('makeDyn');
 if(val=='OTHERS')
   element.style.display='block';
 else  
   element.style.display='none';
}