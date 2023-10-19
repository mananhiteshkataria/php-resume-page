// event listener
function myonbeforeprint() {
    alert("this will appear when user press ctrl+p ");
  }
  function myonafterprint(){
    alert("this will appear after user press ctrl+p ");
  }
 function myFunction()
  
{      
  alert("You clicked Event Listner button");
}



$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Hobbyist","Gamer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["Hobbyist","Gamer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });



    

});
