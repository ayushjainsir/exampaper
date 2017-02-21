function initNavbar() {

    var SCROLL_SPEED = 750;
    var SCROLL_OFFSET = 50;
    var EASING = 'swing';

    var $navTop = $('#navbar-top');
    var $navExternal = $('.nav-external');

    $navTop.find('.navbar-default ul.nav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: SCROLL_SPEED,
        scrollOffset: SCROLL_OFFSET,
        scrollThreshold: 0.5,
        filter: ':not(.external)',
        easing: EASING
    });


    $navTop.find('.navbar-default').affix({
        offset: {
            top: $('#home').height()
        }
    });

    $navExternal.click(function(e) {
        e.preventDefault();

        $('html, body').stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - SCROLL_OFFSET
        }, SCROLL_SPEED, EASING);
    });
}

function initPortfolio() {

    var $portfolio = $('#portfolio');
    var $items = $portfolio.find('.items');
    var $filters = $portfolio.find('.filters li a');

    $items.imagesLoaded(function() {

        $items.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows',
            transitionDuration: '0.7s'
        });
    });

    $filters.click(function() {

        var $el = $(this);

        $filters.removeClass('active');

        $el.addClass('active');

        var selector = $el.attr('data-filter');

        $items.isotope({
            filter: selector
        });

        return false;
    });

    // $items.find('.hello').venobox({
    //     border: '0 10px',
    //     numeratio: true,
    //     infinigall: true
    // });
}

function initAnimations() {
    var $animated = $('.animated');

    $animated.appear({
        force_process: true
    });

    $animated.on('appear', function() {

        var $el = $(this);

        var animation = $el.data('animation');
        var delay = $el.data('delay');

        if (delay) {

            setTimeout(function() {
                $el.addClass(animation);
                $el.addClass('showing');
                $el.removeClass('hiding');
            }, delay);
        } else {

            $el.addClass(animation);
            $el.addClass('showing');
            $el.removeClass('hiding');
        }
    });

    // Service hover animation
    $('.service').hover(function() {
        $('i', this).addClass('animated tada');
    }, function() {
        $('i', this).removeClass('animated tada');
    });
}


$(document).ready(function() {

    initNavbar();
    initPortfolio();
    initAnimations();
    $("#submit").click(function(){
var name = $("#name").val();
console.log(name);
var email = $("#email").val();
console.log(email);
var phone = $("#phone").val();
var college = $("#college").val();
var message = $('#message').val();
var year=$('#year').val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&phone1='+ phone + '&college1='+ college+ '&message1='+message+'&year1='+year;
if(name===''||email===''||phone===''||college===''||message===''||year==='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "./submit.php",
data: dataString,
cache: false,
success: function(result){
alert("Registration Successful");
window.location = "index.html";
}
});
//$("#loginform").reset();
document.getElementById("name").value="";
document.getElementById("email").value="";
document.getElementById("phone").value="";
document.getElementById("college").value="";
document.getElementById("message").value="";
document.getElementById("year").value="";

}
return false;
});


});
$(function () {

    $('.jcarousel').jcarousel();

    $('.jcarousel').jcarouselAutoscroll({
        interval: 500,
        target: '+=1'
    });
});

$(window).load(function() {

    var $loader = $('.loader');
    $('.specific').venobox({ });

    $loader.find('.fading-line').fadeOut();
    $loader.fadeOut("slow");
});
