// Mobile menu
$('#bs-example-navbar-collapse-1').on('show.bs.collapse hidden.bs.collapse', function () {
    if ($('.mobile_menu_button').text() == "Close") {
        // Text change: Close to Menu
        $('.mobile_menu_button').text("Menu");
        $(".logo").css("display", "block");
        $(".mobile_menu_heading").css("display", "none");  
    } else {                    
        // Text change: Menu to Close
        $('.mobile_menu_button').text("Close"); 
        $(".logo").css("display", "none");
        $(".mobile_menu_heading").css("display", "block");
        $(".mobile-menu-accordion").css("display", "block");
    }
});


// Mobile menu plus and minus icon
var selectClass = $('#accordion1 .collapse');
$(function ($) {
    selectClass.on('show.bs.collapse hidden.bs.collapse', function () {
        $(this).prev().find('.fa').toggleClass('fa-plus fa-minus');
    })
});

$(document).on('click', '.item .expand_more', function() { 
    if ($(this).text() == "Read Less") {
        // Reset current item
        $(this).parent().next('.panel').slideToggle("slow");
        $(this).text("Read More");
    } else {
        // Panel show/hide
        $(".item .panel").css('display', 'none');
        $(this).parent().next('.panel').slideToggle("slow");

        // Read More text change
        $(".item .expand_more").text("Read More");
        $(this).text("Read Less");
    }
});

// Mobile Filter (Header & Body content hide)
$('#filters').click(function() {
    $(".mobile_filter").slideToggle("slow");
    $(".mobile_filter").css({
        "position" : "absolute",
        "z-index" : "9",
        "width" : "100%"
    });
    //$("#main").hide();
    $(".navbar").hide();
    $("section#page").css({"margin-top": "0px"});
});


// Mobile Filter (Header & Body content show)
$('#mobile_filter_close, .apply_button').click(function() {
    $(".mobile_filter").slideToggle("slow"); 
    //$("#main").show();
    $(".navbar").show();    
    $("section#page").css({"margin-top": "85px"});          
});   

// Copy Link
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).attr('data-href')).select();
    document.execCommand("copy"); 
    $temp.remove();
    showToast();
}

// Snackbar / Toast message 
function showToast() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

// Search Cross Icon hide on IE
function GetIEVersion() {
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0) 
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)) 
    return 11;

  else
    return 0; //It is not IE
}

if (GetIEVersion() > 0) {
   //jQuery('.filter_form input[type="checkbox"]:checked').css('background-color', 'red'); 
}
else {
}

// Previous Page
function goBack() {
    window.history.back();
}

if ($(window).width() < 768) {
    $('.noMatch').matchHeight({ remove: true });
}