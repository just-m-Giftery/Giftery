let userName=document.getElementById("userName");
let password=document.getElementById("input");
let btn=document.getElementById("myBtn");

btn.onclick=function(){
    if(reg()==true)
        {
             alert("Done");
        }
    else
        {
            
            alert(" Invalid username or password ");
            return false;
            
        }
}

function reg(){
    let regx1=/^[A-z]{3,15}/;
    let regx3=/^[0-9]{9,10}[A-Z]{1,2}/;
    if(regx1.test(userName.value)==false||regx3.test(password.value)==false)
        {
    
          return false;   
        }
    else
        {
            return true;
        }
    
}

$(".icone").click(function(){
    
 let x= $(this).parent().find("input");
    if($(this).css("opacity")==1)
        { 
             $(this).css("opacity","0")
             x.attr("type","text")
             $(this).siblings().css("opacity","1")
        }
    else
        {
             $(this).css("opacity","1") 
             x.attr("type","password")
        }
})
/*function showPassword() {
  let x = document.getElementById("input");
  if (x.type === "password") {
    x.type = "text";
  }
    else {
    x.type = "password";
  }
}

$(".myicone ").click(function(){
    
    if($("#myicone1").css("opacity")==1)
        { 
             $("#myicone1").css("opacity","0" ,showPassword())
        }
    else
        {
            $("#myicone1").css("opacity","1",showPassword()) 
        }
})
      
*/


/*$(document).ready(function(){
  $('.owl-carousel').owlCarousel(
      
      {
          margin:10 ,loop:true,autoplay:true
      }
  );
});*/