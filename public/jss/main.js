// /* global , $ , console */

$(function(){

    /* owl carowsl  */
$('.owl-carousel').owlCarousel({
    items:4,
	loop:true,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	margin:10,
    rtl:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});

// taaaaaaaaaaps section
$(".my-toggle h5").click(function(){
    $(this).parent().toggleClass("cair");
   })
// taaaaaaaaaaps section
// registration form



    // $(".sign input").blur(function (e) { 
    //     $(this).parent().toggleClass("cairo");
        
    // });
    

    // registration form


 	});
     $(".hide-password").click(function(e){
         e.preventDefault

        var pass = document.getElementById("exampleInputPassword1")
        
         if( pass.hasAttribute('type','password'))
         {
            pass.setAttribute('type','text')
         }

          else 
         {
            pass.setAttribute('type','password')
            console.log(pass)

         }

     });

    



    /* owl carowsl  */
    // // naaaaaaaaaaaav baaaaaaaaaaaaaar
	//       $('.nav-item a ').click(function (e){
    //   $("html , body").animate({ scrollTop:$("#" + $(this).data("value")).offset().top},1000)          }); 
    //  // naaaaaaaaaaaav baaaaaaaaaaaaaar



      

