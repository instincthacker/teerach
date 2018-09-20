jQuery(document).ready(function () {
    var accordionsMenu = $('.cd-accordion-menu');

    if (accordionsMenu.length > 0) {

        accordionsMenu.each(function () {
            var accordion = $(this);
            //detect change in the input[type="checkbox"] value
            accordion.on('change', 'input[type="checkbox"]', function () {
                var checkbox = $(this);
                console.log(checkbox.prop('checked'));
                (checkbox.prop('checked')) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300): checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
            });
        });
    }
});

//----------------------------get script-------------------------------//

//------------------------ Include code php to all page ---------------------//
$(function () {
    $("#nav-placeholder").load("include/navlg.php");
});
$(function () {
    $("#nav-placeholdersm").load("include/navsm.php");
});
$(function () {
    $("#footer-section").load("include/foot.php");
});
//---------------------------Accordion--------------------------------//
$(document).ready(function(){
    $( "#accordion.knox-layer-detail" ).accordion({
//        collapsible: true
        active: 10,
        animate: 300,
//        collapsible: true,
    
     classes: {
        "ui-accordion-header": "ui-knox-header",//style text header
          "ui-accordion-header-collapsed": "ui-knox-all",//style header no active
          "ui-accordion-content": "ui-knox-content",//style content
  },
      icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" },
       
    });
});
$(document).ready(function(){
    $('#accordion.knox-layer-detail').on("click","h4",function(){
        var tabsId = $(this).attr("id");
            $(".section-knox-layer .knox-layer img").addClass("active").siblings().removeClass("active");
            $("#" + tabsId + "-img").addClass("active");  
    })
});
//-----------------------Buttom active page about us---------//
$(document).ready(function () {
    $(".btn-slide").click(function () {
        $(".btn-slide.active").removeClass("active");
        $(this).addClass("active");
    });
});

//-------------------------Products Samsung----------------------------------//

$(document).ready(function () {
    $('.product-mobile').flickity({
        // options
        cellAlign: 'left',
        pageDots: false,
        groupCells: '5'

    });
});

//-----------------------------------------------------------//

$(document).ready(function () {
    $('#videolink').magnificPopup({
        type: 'inline',
        midClick: true
    });
    $('#videolink2').magnificPopup({
        type: 'inline',
        midClick: true
    });
    $('#videolink3').magnificPopup({
        type: 'inline',
        midClick: true
    });
});

//--------------------------------- Animation  ---------------------------------------//

$(document).ready(function () {
    $("#myProduct").animatedModal({
        color: '#fff'
    });
});