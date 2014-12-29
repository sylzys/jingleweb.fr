jQuery(document).ready(function($) {
	$container = $('#works ul');
	var columns = 3;
  if (window.innerWidth < 480){
    columns = 1;
  }
  else if (window.innerWidth < 768){
    columns = 2;
  }
	$container.isotope({
    resizable: true,
    itemSelector: '.work',
    layoutMode: 'masonry',
    masonry: {
      columnWidth: $container.width() / columns
    }
  });

  //change "show all" filters text to fit on smatphone
  if (window.innerWidth < 480) {
    $('#filters > a:first-child').text('All');
  }
 $('#filters').on( 'click', '.button', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('active').siblings().removeClass('active');
  var filterValue = $( this ).attr('data-filter');
  $container.isotope({ filter: filterValue });
});

 $msg = 'This field is mandatory';
 $form = $('#form');
 $form.isHappy({
  fields: {
    '#name': {
      required: true,
      message: $msg
    },
    '#email': {
      required: true,
      message: $msg+' and must be a valid email address',
      test: validateEmail
    },
    '#msg': {
      required: true,
      message: $msg,
    }
  }
});
 function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
 $('input', $form).focus(function(event) {
  $(this).next('.unhappyMessage').remove();
});
 $('textarea', $form).focus(function(event) {
  $(this).next('.unhappyMessage').remove();
});

//Smooth scroll transition
var target, scroll;

$("a[href*=#]:not([href=#])").on("click", function(e) {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    target = $(this.hash);
    target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

    if (target.length) {
      if (typeof document.body.style.transitionProperty === 'string') {
        e.preventDefault();

        var avail = $(document).height() - $(window).height();

        scroll = target.offset().top;

        if (scroll > avail) {
          scroll = avail;
        }

        $("html").css({
          "margin-top" : ( $(window).scrollTop() - scroll ) + "px",
          "transition" : "1s ease-in-out"
        }).data("transitioning", true);
      } else {
        $("html, body").animate({
          scrollTop: scroll
        }, 1000);
        return;
      }
    }
  }
});

$("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function (e) {
  if (e.target == e.currentTarget && $(this).data("transitioning") === true) {
    $(this).removeAttr("style").data("transitioning", false);
    $("html, body").scrollTop(scroll);
    return;
  }
});
});