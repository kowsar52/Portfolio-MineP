// aos script 
AOS.init();
   
var myCarousel = document.querySelector('#sliderCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: true 
})

    $('.navigation_menu').hover(
      function(){ $(this).addClass('active_menu') },
      function(){ $(this).removeClass('active_menu') }
    )
    
    // $('.navbar-toggler').click(function(){
    //   $('.navbar-collapse').slideUp();
    // })
/* ------------------------------------ */	
/*  MTD Menu
/* ------------------------------------ */	
$(document).ready(function(){
  
  // Menu Add Class Left
    $("#hamburger-icon").click(function(){
    $(".slide-menu").toggleClass("slide-left");
  });
  
  //  Menu Add Class Close 		
  $('.slide-close-button button, .mdl-layout__obfuscator').click(function(){
      $(".slide-menu").removeClass("slide-left");
  });
  // Menu Dropdown menu active
    $(".dropdownmenu").click(function(){
    $(".sub-menu").toggleClass("active"),fadeIn(46000);
  });
  });


  document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 200) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar_top
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 