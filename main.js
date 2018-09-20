jQuery(document).ready(function(){
	var accordionsMenu = $('.cd-accordion-menu');

	if( accordionsMenu.length > 0 ) {
		
		accordionsMenu.each(function(){
			var accordion = $(this);
			//detect change in the input[type="checkbox"] value
			accordion.on('change', 'input[type="checkbox"]', function(){
				var checkbox = $(this);
				console.log(checkbox.prop('checked'));
				( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
			});
		});
	}
});
//------------------------ Include code php to all page ---------------------//
$(function(){
  $("#nav-placeholder").load("include/navlg.php");
});
$(function(){
  $("#nav-placeholdersm").load("include/navsm.php");
});
$(function(){
  $("#footer-section").load("include/foot.php");
});
//-----------------------------------------------------------//

//-----------------------Buttom active page about us---------//
$(document).ready(function(){
            $(".btn-slide").click(function(){
                $(".btn-slide.active").removeClass("active");
                $(this).addClass("active");
            });
});
//-----------------------------------------------------------//
