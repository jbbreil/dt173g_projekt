"use strict"
 
 /* Responsive Menu Resolution  */
 var mobileSize = 850;
 var pastWidth = $(window).width();
 $(window).resize(function(){
	 var width = $(this).width();
	 if((width < mobileSize && pastWidth > mobileSize) || (width > mobileSize && pastWidth < mobileSize)) {
		 $('#mobishownav').css("display", "none");
		 $('.container').removeClass("change");
		 
	 }
	 pastWidth = width;
 });

 /* Responsive Menu Button */
 function myFunction(x) {
   x.classList.toggle("change");
   $("#mobishownav").slideToggle(500);
 }


 function myFunction2(x) {
	 var submenu = $(".submenu-3");
	   x.classList.toggle("change");
	   $(submenu).slideToggle(500);
 }