 jQuery(document).ready(function($) {
          jQuery('.stellarnav').stellarNav({
            theme: 'light',
            breakpoint: 960,
            position: 'right',
           
          });
         });
   
         var x = document.querySelectorAll(".view-img");
         var y=document.getElementById("getimg");
         
         for (let i=0; i<x.length; i++){
           x[i].addEventListener('click', function(){
                   let newimgsrc = x[i].src;
                    y.src=newimgsrc;
                });
         
         }
         

   
  
